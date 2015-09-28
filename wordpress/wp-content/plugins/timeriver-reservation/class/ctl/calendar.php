<?php
/**
 * @package Trr
 */

class Trr_Ctl_Calendar {
	
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
		
		$stt = $_REQUEST['stt'];
		$end = $_REQUEST['end'];
		
		$stt = "2015-09-05";
		$end = "2015-09-10";
		
		//$stt_sunday = get_beginning_week_date($stt);
		//$end_sunday = get_beginning_week_date($end);
		$week_list = array();
		
		$stt_time = strtotime($stt);
		$end_time = strtotime($end);
		while ($stt_time <= $end_time) {
			$week_begin = self::get_beginning_week_date($stt_time);
			$week_list[$week_begin] = 1;
			$stt_time = strtotime("+1 day", $stt_time);
		}
		$data["week_list"] = $week_list;
		
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
