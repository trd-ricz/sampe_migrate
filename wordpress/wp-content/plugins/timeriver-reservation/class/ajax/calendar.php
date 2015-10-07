<?php
/**
 * @package Trr
 */

class Trr_Ajax_Calendar {
	
	function update_reservation() {
		
		$ymd                = $_REQUEST['ymd'];
		$class_schedule_pid = $_REQUEST['class_schedule_pid'];
		$class_room_pid     = $_REQUEST['class_room'];
		$class_type_pid     = $_REQUEST['class_type'];
		$teacher_id         = $_REQUEST['teacher'];
		$student_id         = $_REQUEST['student'];
		$memo               = $_REQUEST['memo'];
		
		// save reservation
		require_once( TRR_PLUGIN_DIR . 'class/model/reservation.php' );
		$obj = new Tros_Model_Reservation();
		$option = array(
			"class_room" => $class_room_pid,
			"class_type" => $class_type_pid,
			"teacher"    => $teacher_id,
			"student"    => $student_id,
			"memo"       => $memo,
			"date"       => $ymd
		);
		
		$obj->update($ymd, $class_schedule_pid, $option);
		
		$res = array(
			"status"  => "ok"
		);
		echo json_encode($res);
		die();
	}
	
	function delete_reservation() {
		
		$ymd                = $_REQUEST['ymd'];
		$class_schedule_pid = $_REQUEST['class_schedule_pid'];
		$class_room_pid     = $_REQUEST['class_room'];
		$class_type_pid     = $_REQUEST['class_type'];
		$teacher_id         = $_REQUEST['teacher'];
		$student_id         = $_REQUEST['student'];
		
		// save reservation
		require_once( TRR_PLUGIN_DIR . 'class/model/reservation.php' );
		$obj = new Tros_Model_Reservation();
		$option = array();
		
		if ($class_room_pid) { $option['class_room'] = $class_schedule_pid; }
		if ($class_type_pid) { $option['class_type'] = $class_type_pid; }
		if ($teacher_id)     { $option['teacher']    = $teacher_id; }
		if ($student_id)     { $option['student']    = $student_id; }
		
		$obj->delete($ymd, $class_schedule_pid, $option);
		
		die();
	}
	
}
