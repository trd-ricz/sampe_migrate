<?php 
    /*
    Plugin Name: FirstEnglish Scheduler
    Plugin URI: Comings Soon ..
    Description: Plugin for FirstEnglish Scheduler
    Author: Ralph Vincent R. Mirasol
    Version: 0.1 Beta
    Author URI: Coming Soon ...
    */
    function stylesheet(){
        echo "<link rel='stylesheet' href='".plugins_url("assets/css/bootstrap.min.css",__FILE__)."' />";
        echo "<link rel='stylesheet' href='".plugins_url("assets/css/font-awesome.min.css",__FILE__)."' />"; 
    }
    function schedule_menu_1(){
        stylesheet();
        echo "<link rel='stylesheet' href='".plugins_url("assets/css/schedule.css",__FILE__)."' />";
        include('views/schedule.php');
    }
    function schedule_menu_2(){
        stylesheet();
        include('views/rooms.php');
    }
    function schedule_menu_3(){
    	stylesheet();
        include('views/classtype.php');
    }
   
    function create_tbl_rooms(){
	    // do NOT forget this global
		global $wpdb;
	 
		// this if statement makes sure that the table doe not exist already
		if($wpdb->get_var("show tables like tbl_rooms") != 'tbl_rooms') 
		{
			$sql = "CREATE TABLE IF NOT EXISTS `tbl_rooms` (
			  `ID` int(11) NOT NULL AUTO_INCREMENT,
			  `RNAME` varchar(100) NOT NULL,
			  `STATUS` int(11) NOT NULL,
			  PRIMARY KEY (`ID`));";
			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			dbDelta($sql);
			echo "<script>alert('Sulod man');</script>";
		}
	}

	function scheduler_menu(){
    	add_menu_page("Schedule", "Schedule", 1, "Schedule", "schedule_menu_1");
    	add_menu_page("Class Room","Class Room",1,"Class Room","schedule_menu_2");
    	add_menu_page("Class Type","Class Type",1,"Class Type","schedule_menu_3");
    }

    add_action('admin_menu','scheduler_menu');
    register_activation_hook( __FILE__, 'create_tbl_rooms' );
?>