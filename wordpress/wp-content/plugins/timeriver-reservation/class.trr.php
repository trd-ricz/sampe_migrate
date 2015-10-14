<?php

class Trr {
	
	public function __construct() {
		
		// Load Ajax
		self::load_ajax_endpoints();
		
		wp_enqueue_script( 'jquery-ui.js', TRR_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.js', array(), '1.0.0', true );
		wp_enqueue_style( 'custom.css', TRR_PLUGIN_URL . 'assets/css/custom.css', array(), null, 'all');
		
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
		
		add_action( 'wp_ajax_get_choices',  'Trr_Ajax_Calendar::get_choices');
		add_action( 'wp_ajax_nopriv_get_choices',  'Trr_Ajax_Calendar::get_choices');
		
		add_action( 'wp_ajax_copy_week',  'Trr_Ajax_Calendar::copy_week');
		add_action( 'wp_ajax_nopriv_copy_week',  'Trr_Ajax_Calendar::copy_week');
		
	}
	
	
	
}
