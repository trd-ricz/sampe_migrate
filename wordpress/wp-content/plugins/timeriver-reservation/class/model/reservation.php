<?php
/**
 * @package Trr
 */
class Tros_Model_Reservation {
	
	public $reservations = array();
	
	public $week_title_key = array(
		"+ 0day" => "(日)",
		"+ 1day" => "(月)",
		"+ 2day" => "(火)",
		"+ 3day" => "(水)",
		"+ 4day" => "(木)",
		"+ 5day" => "(金)",
		"+ 6day" => "(土)",
	);
	
	public $schedule_data = array();
	
	public $days_list = array();
	
	public $post_id = "";
	public $class_schedule_id = "";
	public $ymd = "";
	public $student_id = "";
	public $option = array();
	public $error_res = array();
	
	function get_cal_data($week_list, $option = array()) {
		
		$target_stt_ymd = "";
		$target_end_ymd = "";
		foreach ($week_list as $week_key => $class_schedule_data) {
			$week_stt_time = strtotime($week_key);
			foreach ($this->week_title_key as $format => $whatday) {
				$ymd = date("Y-m-d", strtotime($format, $week_stt_time));
				
				$this->days_list[$week_key][] = $ymd;
				
				// first ymd
				if (!$target_stt_ymd) {
					$target_stt_ymd = $ymd;
				}
				// final ymd
				$target_end_ymd = $ymd;
			}
		}
		
		
		$this->get_reservation($target_stt_ymd, $target_end_ymd, $option);
		
		// ClassSchedule
		require_once( TRR_PLUGIN_DIR . 'class/model/class_schedule.php' );
		$mCS = new Tros_Model_ClassSchedule();
		$mCS->get();
		
		$this->schedule_data = $mCS->data;
		
		// make cal_data
		$cal_data = array();
		foreach ($week_list as $week_key => $dummy) {
			foreach ($mCS->data as $class_schedule_id => $dummy) {
				$week_stt_time = strtotime($week_key);
				foreach ($this->week_title_key as $format => $whatday) {
					$ymd = date("Y-m-d", strtotime($format, $week_stt_time));
					$cal_data[$week_key][$class_schedule_id][$ymd]
						= $this->reservations[$ymd][$class_schedule_id];
				}
			}
		}
		return $cal_data;
	}
	
	
	/**
	 * create_reservation()
	 */
	function update($ymd, $class_schedule_pid, $student_id, $option=array()) {
		
		$this->ymd               = $ymd;
		$this->class_schedule_id = $class_schedule_pid;
		$this->student_id        = $student_id;
		$this->option            = $option;
		
		// ClassSchedule
		require_once( TRR_PLUGIN_DIR . 'class/model/class_schedule.php' );
		$mCS = new Tros_Model_ClassSchedule();
		$mCS->get(array($class_schedule_pid));
		$this->schedule_data = $mCS->data;
		$schedule = $mCS->data[$class_schedule_pid]['post_title'];
		
		// check exist post_id
		$tmp = array(
			"student"        => $student_id,
			"class_schedule" => $class_schedule_pid
		);
		$chk_exist = $this->get_reservation($ymd, $ymd, $tmp);
		if ($chk_exist) {
			$this->post_id = $this->reservations[$ymd][$class_schedule_pid]["post_id"];
		} else {
			
			// start new
			$post = array();
			$post['post_title']  = "{$ymd}_{$schedule}";
			$post['post_status'] = 'publish';
			$post['post_type']   = 'reservation';
			$this->post_id = wp_insert_post($post);
			
			$this->reservations[$ymd][$class_schedule_pid] = array(
				"class_room"     => "",
				"class_type"     => "",
				"teacher"        => array(),
				"student"        => array(),
				"memo"           => "",
				"date"           => $ymd,
				"class_schedule" => $class_schedule_pid
			);
			
			// fixed meta
			update_field(RESERVATION_DATE, $ymd, $this->post_id);
			update_field(RESERVATION_CLASS_SCHEDULE, $class_schedule_pid, $this->post_id);
		}
		
		// check duplicate
		if($this->exist_duplicate($ymd, $class_schedule_pid, $this->post_id, $option)) {
			return array(
				"status" => "duplicate"
			);
		}
		
		// check cant prossess
		if ($this->chk_error()) {
			return $this->error_res;
		}
		
		
		// marget update datas
		$option["student"] = $student_id;
		foreach ($option as $key => $value) {
			
			// if empty arg dont touch
			if (!$option[$key]) { continue; }
			
			if ($key == "student" || $key == "teacher") {
				$this->reservations[$ymd][$class_schedule_pid][$key][] = $option[$key];
				$this->reservations[$ymd][$class_schedule_pid][$key] = 
					array_unique($this->reservations[$ymd][$class_schedule_pid][$key]);
			} else {
				$this->reservations[$ymd][$class_schedule_pid][$key] = $option[$key];
			}
		}
		
		// update metas
		$this->update_metas($option);
		
		// update post title
		$arg = array(
			"ID"         => $this->post_id,
			"post_title" => $this->make_post_title($this->post_id)
		);
		wp_update_post($arg);
		
		return array(
			"status" => "ok"
		);
	}
	
	function chk_error() {
		
		// student check
		if($this->error_res = $this->is_error_date_time($this->student_id)) {
			$this->error_res["mess"] .= "(生徒)";
			return true;
		}
		
		$update_type    = "";
		$update_post_id = "";
		foreach ($this->option as $key => $value) {
			if (!$value) { continue; }
			$update_type    = $key;
			$update_post_id = $value;
		}
		if (!$update_type || !$update_post_id) {
			$this->error_res = array(
				"status" => "error",
				"mess"   => "不正な処理"
			);
			return true;
		}
		
		// when teacher check
		if ($update_type == "teacher") {
			if($this->error_res = $this->is_error_date_time($update_post_id)) {
				$this->error_res["mess"] .= "(講師)";
				return true;
			}
		}
		return false;
	}
	
	function is_error_date_time($user_id) {
		
		// setting data
		$res = get_metadata("user", $user_id);
		$stt_date = ($res["stt_date"][0]) ? $res["stt_date"][0] : "2000-01-01";
		$end_date = ($res["end_date"][0]) ? $res["end_date"][0] : "2100-01-01";
		$stt_time = ($res["stt_time"][0]) ? $res["stt_time"][0] : "00:00";
		$end_time = ($res["end_time"][0]) ? $res["end_time"][0] : "23:59";
		// check date
		if (!(
				strtotime($stt_date) <= strtotime($this->ymd)
				&& strtotime($this->ymd) <= strtotime($end_date)
		)) {
			return array(
				"status" => "error",
				"mess"   => "日付不正"
			);
		}
		// check time
		$tmp = $this->schedule_data[$this->class_schedule_id];
		if (!(
				strtotime($stt_time) <= strtotime($tmp["stt"])
				&& strtotime($tmp["end"]) <= strtotime($end_time)
		)) {
			return array(
				"status" => "error",
				"mess"   => "時間不正"
			);
		}
	}
	
	
	function exist_duplicate($ymd, $class_schedule, $post_id, $option) {
		
		foreach ($option as $key => $value) {
			if (!$value) { continue; }
			if ($key == "class_type") { continue; }
			$check_option = array(
				"class_schedule" => $class_schedule,
				$key             => $value,
			);
			if ($this->get_reservation($ymd, $ymd, $check_option)) {
				
				$reserv_data = $this->reservations[$ymd][$class_schedule];
				
				$is_g = $this->is_group_lesson($reserv_data);
				
				if ($is_g) {
					if ($key == "teacher") {
						$process_data = get_fields($post_id, false);
						$other_reserv = $reserv_data;
						if ($process_data["class_room"] != $other_reserv["class_room"]) {
							return true;
						}
					}
					return false;
				}
				return true;
			}
		}
		return false;
	}
	
	function is_group_lesson($data) {
		return get_field("group_flag", $data["class_type"]);
	}
	
	
	function make_post_title($post_id) {
		
		$title = array();
		$res = get_fields($post_id);
		$title[] = $res["date"];
		$title[] = $res["class_schedule"]->post_title;
		$title[] = $res["class_room"]->post_title;
		
		foreach ((array)$res["teacher"] as $value) {
			$title[] = $value["display_name"];
		}
		foreach ((array)$res["student"] as $value) {
			$title[] = $value["display_name"];
		}
		
		return implode("_", $title);
	}
	
	
	function update_metas($option) {
		
		// update only add ( not delete )
		foreach ($this->reservations[$this->ymd][$this->class_schedule_id] as $key => $update) {
			// if empty arg dont touch
			if (!isset($option[$key])) { continue; }
			switch ($key) {
				case "class_room":
					update_field(RESERVATION_CLASS_ROOM, $update, $this->post_id);
					break;
				case "class_type":
					update_field(RESERVATION_CLASS_TYPE, $update, $this->post_id);
					break;
				case "teacher":
					update_field(RESERVATION_TEACHER, $update, $this->post_id);
					break;
				case "student":
					update_field(RESERVATION_STUDENT, $update, $this->post_id);
					break;
				case "memo":
					break;
				default:
					break;
			}
		}
		
	}
	
	
	/**
	 * get reservation
	 */
	function get_reservation($from_ymd, $to_ymd, $option=array()) {
		
		$this->reservations = array();
		$args = array(
			'posts_per_page' => -1,
			'post_type'      => 'reservation',
			'post_status'    => 'publish',
			'meta_query' => array(
				array(
					'key'     => 'date',
					'value'   => $from_ymd,
					'compare' => '>='
				),
				array(
					'key'     => 'date',
					'value'   => $to_ymd,
					'compare' => '<='
				)
			)
		);
		
		$add_metas = false;
		foreach ($option as $key => $value) {
			if (!$value) { continue; }
			if ($key == "student" || $key == "teacher") {
				$args['meta_query'][] = array(
					'key'     => $key,
					'value'   => '"' . $value . '"',
					'compare' => 'LIKE',
				);
			} else {
				$args['meta_query'][] = array(
					'key'   => $key,
					'value' => $value
				);
			}
			$add_metas = true;
		}
		if (!$add_metas) { return false; }
		$res = get_posts( $args );
		
		//print_r($option);
		//print_r($args);
		//print_r($res);
		//exit;
		
		if (!$res) { return false; }
		foreach ($res as $post_obj) {
			$fields = get_fields($post_obj->ID, false);
			//if (!$this->chk_refine($fields, $option)) { continue; }
			$date           = get_post_meta($post_obj->ID, "date", true);
			$class_schedule = get_post_meta($post_obj->ID, "class_schedule", true);
			$this->reservations[$date][$class_schedule] = $fields;
			$this->reservations[$date][$class_schedule]["post_id"] = $post_obj->ID;
		}
		return true;
	}
	
	function chk_refine($fields, $option) {
		if (!$option['post_type']) { return true; } // get all
		if ($option["post_type"] == "class_room") {
			return ($fields[$option["post_type"]] == $option["post_id"]);
		} else {
			return (in_array($option["post_id"], $fields[$option["post_type"]]));
		}
	}
	
	function delete($ymd, $class_schedule_pid, $option) {
		
		$this->ymd               = $ymd;
		$this->class_schedule_id = $class_schedule_pid;
		
		$option["class_schedule"] = $class_schedule_pid;
		if (!$this->get_reservation($ymd, $ymd, $option)) {
			return;
		}
		$this->post_id = $this->reservations[$ymd][$class_schedule_pid]["post_id"];
		
		if ($option['class_room']) {
			$this->reservations[$ymd][$class_schedule_pid]['class_room'] = "";
		} else if ($option['class_type']) {
			$this->reservations[$ymd][$class_schedule_pid]['class_type'] = "";
		} else if ($option['teacher']) {
			foreach ($this->reservations[$ymd][$class_schedule_pid]['teacher'] as $key => $value) {
				if ($value != $option['teacher']) { continue; }
				unset($this->reservations[$ymd][$class_schedule_pid]['teacher'][$key]);
			}
		} else if ($option['student']) {
			foreach ($this->reservations[$ymd][$class_schedule_pid]['student'] as $key => $value) {
				if ($value != $option['student']) { continue; }
				unset($this->reservations[$ymd][$class_schedule_pid]['student'][$key]);
			}
		} else {
			return;
		}
		
		$this->update_metas($option);
		
		// update post title
		$arg = array(
			"ID"         => $this->post_id,
			"post_title" => $this->make_post_title($this->post_id)
		);
		wp_update_post($arg);
		
	}
	
	
}
