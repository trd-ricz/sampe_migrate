<?php
/**
 * @package Trr
 */

class Trr_Ctl_Calendar {
	
	public static $select_type_list = array(
		"student"    => "Student",
		"teacher"    => "Ceacher",
		"class_room" => "Room",
	);
	
	public function action() {
		self::init();
		switch ($_REQUEST['action']) {
			default:
				self::show_main();
				break;
		}
	}
	
	public function show_main() {
		$data = array();
		
		if (!$_REQUEST['post_type']) { $_REQUEST['post_type'] = "student"; }
		if (!$_REQUEST['stt']) { $_REQUEST['stt'] = date("Y-m-d"); }
		if (!$_REQUEST['end']) { $_REQUEST['end'] = date("Y-m-d"); }
		
		$post_id   = $_REQUEST['post_id'];
		$post_type = $_REQUEST['post_type'];
		$stt = $_REQUEST['stt'];
		$end = $_REQUEST['end'];
		
		// week list
		$week_list = array();
		$stt_time = strtotime($stt);
		$end_time = strtotime($end);
		while ($stt_time <= $end_time) {
			$week_begin = self::get_beginning_week_date($stt_time);
			$week_list[$week_begin] = 1;
			$stt_time = strtotime("+1 day", $stt_time);
		}
		
		// save reservation
		require_once( TRR_PLUGIN_DIR . 'class/model/reservation.php' );
		$mRE = new Tros_Model_Reservation();
		$option = array(
			$post_type => $post_id
		);
		$cal_data = $mRE->get_cal_data($week_list, $option);
		
		// display titles
		require_once( TRR_PLUGIN_DIR . 'class/model/class_room.php' );
		$mSR = new Tros_Model_ClassRoom();
		$mSR->get();
		$data["mt_class_room"] = $mSR->data;
		
		require_once( TRR_PLUGIN_DIR . 'class/model/class_schedule.php' );
		$mCS = new Tros_Model_ClassSchedule();
		$mCS->get();
		$data["mt_class_schedule"] = $mCS->data;
		
		require_once( TRR_PLUGIN_DIR . 'class/model/class_type.php' );
		$mCT = new Tros_Model_ClassType();
		$mCT->get();
		$data["mt_class_type"] = $mCT->data;
		
		require_once( TRR_PLUGIN_DIR . 'class/model/student.php' );
		$mSt = new Tros_Model_Student();
		$mSt->get();
		$data["mt_student"] = $mSt->data;
		
		require_once( TRR_PLUGIN_DIR . 'class/model/teacher.php' );
		$mTe = new Tros_Model_Teacher();
		$mTe->get();
		$data["mt_teacher"] = $mTe->data;
		
		
		// show args
		$data["week_list"]      = $week_list;
		$data["cal_data"]       = $cal_data;
		$data["schedule_data"]  = $mRE->schedule_data;
		$data["schedule_keys"]  = array_keys($mRE->schedule_data);
		$data["days_list"]      = $mRE->days_list;
		$data["week_title_key"] = $mRE->week_title_key;
		$data["post_type"]      = $post_type;
		$data["post_id"]        = $post_id;
		$data["p_typ_list"]     = self::$select_type_list;
		
		self::load_view($data);
	}
	
	public function get_beginning_week_date($time) {
		$w = date("w", $time);
		$beginning_week_date =
		date('Y-m-d', strtotime("-{$w} day", $time));
		return $beginning_week_date;
	}
	
	public function init(){
		//wp_enqueue_style( 'jquery-ui.css', TRR_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.css' );
		wp_enqueue_script( 'jquery-ui.js', TRR_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.js', array(), '1.0.0', true );
	}
	
	public function load_view($data){
		extract($data);
		include TRR_PLUGIN_DIR . 'views/calendar.php';
	}
	
}
