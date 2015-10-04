<?php
/**
 * @package Trr
 */

class Trr_Ajax_Calendar {
	
	function update_reservation() {
		
		$ymd                = $_REQUEST['ymd'];
		$class_schedule_pid = $_REQUEST['class_schedule_pid'];
		$class_room_pid     = $_REQUEST['class-room'];
		$class_type_pid     = $_REQUEST['class-type'];
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
	
	
}
