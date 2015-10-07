<?php

class Trr {
	
	public function __construct() {
		
		// Load Ajax
		self::load_ajax_endpoints();
		
		// Show Menu
		add_action('admin_menu', array($this, 'show_menu'));
	}
	
	public function show_menu() {
		add_menu_page('カレンダー', 'カレンダー', 0, 'calendar', array('Trr_Ctl_Calendar', 'action'), "dashicons-clipboard", 1);
	}
	
	/*
	 * 
	 *  Load Ajax
	 * 
	 */
	public static function load_ajax_endpoints(){
		
		add_action( 'wp_ajax_update_reservation',  'Trr_Ajax_Calendar::update_reservation');
		add_action( 'wp_ajax_nopriv_update_reservation',  'Trr_Ajax_Calendar::update_reservation');

		add_action( 'wp_ajax_delete_reservation',  'Trr_Ajax_Calendar::delete_reservation');
		add_action( 'wp_ajax_nopriv_delete_reservation',  'Trr_Ajax_Calendar::delete_reservation');
		
	}
	
	
	
}
