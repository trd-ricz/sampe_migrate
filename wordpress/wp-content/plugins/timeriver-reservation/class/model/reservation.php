<?php
/**
 * @package Trr
 */
class Tros_Model_Reservation {
	
	public $reservations = array();
	
	
	/**
	 * create_reservation()
	 */
	function update($ymd, $class_schedule_pid, $option=array()) {
		
		// ClassSchedule
		require_once( TRR_PLUGIN_DIR . 'class/model/class_schedule.php' );
		$mCS = new Tros_Model_ClassSchedule();
		$mCS->get(array($class_schedule_pid));
		$schedule = $mCS->data[$class_schedule_pid]['post_title'];
		
		$post_ID = "";
		if ($this->get_reservation($ymd, $ymd, $class_schedule_pid)) {
			$post_ID = $this->reservations[$ymd][$class_schedule_pid]["post_id"];
			$arg = array(
				"ID"         => $post_ID,
				"post_title" => "{$ymd}_{$schedule}"
			);
			wp_update_post($arg);
		} else {
			// start new
			$post = array();
			$post['post_title']  = "{$ymd}_{$schedule}";
			$post['post_status'] = 'publish';
			$post['post_type']   = 'reservation';
			$post_ID = wp_insert_post($post);
			
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
			update_field(RESERVATION_DATE, $ymd, $post_ID);
			update_field(RESERVATION_CLASS_SCHEDULE, $class_schedule_pid, $post_ID);
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
		
	
		// update only add ( not delete )
		foreach ($this->reservations[$ymd][$class_schedule_pid] as $key => $update) {
			// if empty arg dont touch
			if (!$option[$key]) { continue; }
			switch ($key) {
				case "class_room":
					update_field(RESERVATION_CLASS_ROOM, $update, $post_ID);
					break;
				case "class_type":
					update_field(RESERVATION_CLASS_TYPE, $update, $post_ID);
					break;
				case "teacher":
					update_field(RESERVATION_TEACHER, $update, $post_ID);
					break;
				case "student":
					update_field(RESERVATION_STUDENT, $update, $post_ID);
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
	
}
