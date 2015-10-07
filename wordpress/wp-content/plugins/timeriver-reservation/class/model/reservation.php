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
	
	function get_cal_data($week_list) {
		
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
		
		
		$this->get_reservation($target_stt_ymd, $target_end_ymd);
		
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
	function update($ymd, $class_schedule_pid, $option=array()) {
		
		$this->ymd               = $ymd;
		$this->class_schedule_id = $class_schedule_pid;
		
		// ClassSchedule
		require_once( TRR_PLUGIN_DIR . 'class/model/class_schedule.php' );
		$mCS = new Tros_Model_ClassSchedule();
		$mCS->get(array($class_schedule_pid));
		$schedule = $mCS->data[$class_schedule_pid]['post_title'];
		
		if ($this->get_reservation($ymd, $ymd, $class_schedule_pid)) {
			$this->post_id = $this->reservations[$ymd][$class_schedule_pid]["post_id"];
			$arg = array(
				"ID"         => $this->post_id,
				"post_title" => "{$ymd}_{$schedule}"
			);
			wp_update_post($arg);
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
		
		// marget update datas
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
		
		$this->update_metas($option);
		
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
	 * get_reservation()
	 */
	function get_reservation($from_ymd, $to_ymd, $class_schedule=null) {
	
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
		
		if ($class_schedule) {
			$args['meta_query'][] = array(
				'key'   => 'class_schedule',
				'value' => $class_schedule
			);
		}
		
		$res = get_posts( $args );
		if (!$res) { return false; }
		foreach ($res as $post_obj) {
			$date           = get_post_meta($post_obj->ID, "date", true);
			$class_schedule = get_post_meta($post_obj->ID, "class_schedule", true);
			$fields = get_fields($post_obj->ID, false);
			$this->reservations[$date][$class_schedule] = $fields;
			$this->reservations[$date][$class_schedule]["post_id"] = $post_obj->ID;
		}
		return true;
	}
	
	function delete($ymd, $class_schedule_pid, $option) {
		
		$this->ymd               = $ymd;
		$this->class_schedule_id = $class_schedule_pid;
		
		if (!$this->get_reservation($ymd, $ymd, $class_schedule_pid)) {
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
		
	}
	
	
}
