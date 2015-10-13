<?php
/**
 * @package Trr
 */

class Trr_Ajax_Calendar {
	
	function update_reservation() {
		
		$ymd                = $_REQUEST['ymd'];
		$class_schedule_pid = $_REQUEST['class_schedule_pid'];
		$class_room         = $_REQUEST['class_room'];
		$class_type         = $_REQUEST['class_type'];
		$teacher            = $_REQUEST['teacher'];
		$student            = $_REQUEST['student'];
		$memo               = $_REQUEST['memo'];
		$student_id         = $_REQUEST['student_id'];
		
		// save reservation
		require_once( TRR_PLUGIN_DIR . 'class/model/reservation.php' );
		$obj = new Tros_Model_Reservation();
		$option = array(
			"class_room" => $class_room,
			"class_type" => $class_type,
			"teacher"    => $teacher,
			"student"    => $student,
			"memo"       => $memo,
		);
		
		$res = $obj->update($ymd, $class_schedule_pid, $student_id, $option);
		
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
		
		if ($class_room_pid) { $option['class_room'] = $class_room_pid; }
		if ($class_type_pid) { $option['class_type'] = $class_type_pid; }
		if ($teacher_id)     { $option['teacher']    = $teacher_id; }
		if ($student_id)     { $option['student']    = $student_id; }
		$obj->delete($ymd, $class_schedule_pid, $option);
		
		die();
	}
	
	
	function get_choices() {
	
		$stt_date  = $_REQUEST['stt_date'];
		$end_date  = $_REQUEST['end_date'];
		$pos_type  = $_REQUEST['post_type'];
		
		$meta_query = array(
			'relation' => 'OR',
			// 1
			array(
				'key'=>'stt_date',
				'value'=>array( $stt_date, $end_date ),
				'compare'=>'BETWEEN',
				'type'=>'DATE'
			),
			// 2
			array(
				array('key' => 'stt_date', 'compare' => '<=', 'value' => $stt_date),
				array('key' => 'end_date', 'compare' => '>=', 'value' => $end_date),
			),
			array(
				'key'=>'end_date',
				'value'=>array( $stt_date, $end_date ),
				'compare'=>'BETWEEN',
				'type'=>'DATE'
			),
		);
		
		switch ($pos_type) {
			case "student":
				require_once( TRR_PLUGIN_DIR . 'class/model/student.php' );
				$obj = new Tros_Model_Student();
				$obj->get(null, $meta_query);
				$res = array(
					"status" => "ok",
					"res"    => $obj->data
				);
			break;
			
			case "teacher":
				require_once( TRR_PLUGIN_DIR . 'class/model/teacher.php' );
				$obj = new Tros_Model_Teacher();
				$obj->get(null, $meta_query);
				$res = array(
					"status" => "ok",
					"res"    => $obj->data
				);
			break;
			
			case "class_room":
				require_once( TRR_PLUGIN_DIR . 'class/model/class_room.php' );
				$obj = new Tros_Model_ClassRoom();
				$obj->get();
				foreach ($obj->data as $key => $value) {
					$obj->data[$key]["display_name"]  = $value["post_title"];
				}
				$res = array(
					"status" => "ok",
					"res"    => $obj->data
				);
				break;
				
			case "class_type":
				require_once( TRR_PLUGIN_DIR . 'class/model/class_type.php' );
				$obj = new Tros_Model_ClassType();
				$obj->get();
				foreach ($obj->data as $key => $value) {
					$obj->data[$key]["display_name"]  = $value["post_title"];
				}
				$res = array(
					"status" => "ok",
					"res"    => $obj->data
				);
				break;
				
			default:
				$res = array(
					"status" => "error"
				);
			break;
		}
		
		
		echo json_encode($res);
		
		die();
	}
	
}
