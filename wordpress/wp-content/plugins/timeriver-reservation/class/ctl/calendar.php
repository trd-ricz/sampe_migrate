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
		self::load_view($data);
	}
	
	public function init(){
		wp_enqueue_style( 'jquery-ui.css', TRR_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.css' );
		wp_enqueue_script( 'jquery-ui.js', TRR_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.js', array(), '1.0.0', true );
	}
	
	public function load_view($data){
		extract($data);
		include TRR_PLUGIN_DIR . 'views/calendar.php';
	}
	
}
