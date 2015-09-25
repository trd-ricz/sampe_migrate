<?php

class Trr {
	
	public function __construct() {
		
		// Show Menu
		add_action('admin_menu', array($this, 'show_menu'));
	}
	
	public function show_menu() {
		add_menu_page('カレンダー', 'カレンダー', 0, 'calendar', array('Trr_Ctl_Calendar', 'action'), "dashicons-clipboard", 1);
	}
	
}
