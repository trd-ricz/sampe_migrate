<?php
/*
 Plugin Name: time river reservation(Trr)
 Plugin URI: 
 Description: 
 Version: 0.001
 Author: TimeRiverSystem,inc
 Author URI: 
 License: GPLv2
*/

/*
 Copyright 2015 Global IT Academy  (email : tokikawa@globalit-academy.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

date_default_timezone_set( 'Asia/Tokyo' );

define( 'TRR_VERSION', '0.0.1' );
define( 'TRR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TRR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// ACF KEYS
define( 'RESERVATION_CLASS_ROOM',     'field_5604fe02a2b9a' );
define( 'RESERVATION_CLASS_TYPE',     'field_5605756287a86' );
define( 'RESERVATION_STUDENT',        'field_5605757d87a87' );
define( 'RESERVATION_TEACHER',        'field_560575d587a88' );
define( 'RESERVATION_CLASS_SCHEDULE', 'field_560575fa87a89' );
define( 'RESERVATION_MEMO',           'field_5605765d87a8a' );
define( 'RESERVATION_DATE',           'field_5605776046ce6' );



require_once( TRR_PLUGIN_DIR . 'class.trr.php' );

// ctl
require_once( TRR_PLUGIN_DIR . 'class/ctl/calendar.php' );

// ajax
require_once( TRR_PLUGIN_DIR . 'class/ajax/calendar.php' );

$Trr = new Trr();

?>
