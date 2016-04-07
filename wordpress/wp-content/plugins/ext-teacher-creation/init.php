<?php
/*
Plugin Name: Custom Teacher Creation
Description:
Version: 1
Author: Brylle John C. Empenida
Author URI:
*/

//menu items
add_action('admin_menu','ext_teachers_modifymenu');

function ext_teachers_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('All Teachers', //page title
	'All Teachers', //menu title
	'manage_options', //capabilities
	'teachers_list', //menu slug
	teachers_list //function
	);
	
	//this is a submenu
	add_submenu_page('teachers_list', //parent slug
	'Add New Teacher', //page title
	'Add New', //menu title
	'manage_options', //capability
	'create_teacher', //menu slug
	'create_teacher'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update School', //page title
	'Update', //menu title
	'manage_options', //capability
	'update_teacher', //menu slug
	'update_teacher'); //function
}

define('ROOTDIR', plugin_dir_path(__FILE__));

require_once(ROOTDIR . 'all-teachers.php');
require_once(ROOTDIR . 'create-teacher.php');
require_once(ROOTDIR . 'update-teacher.php');
require_once(ROOTDIR . 'classes/Pagination.php');
