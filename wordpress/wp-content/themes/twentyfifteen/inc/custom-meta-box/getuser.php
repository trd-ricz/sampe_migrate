<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php';

global $wpdb;

$q = $_GET['q'];

$old = "Old Student";
$new = "New Student";
$start_date_default = date("m-d-Y");
$end_date_default = date("m-d-Y", strtotime("+5 days"));

$mylink1 = $wpdb->get_row( "SELECT ID FROM $wpdb->users WHERE display_name = '$q'" );
$mylink = $wpdb->get_results( "SELECT meta_key, meta_value FROM $wpdb->usermeta WHERE meta_key IN ('stt_date', 'end_date') and user_id = $mylink1->ID" );


if ($mylink)
{
	$result = new stdClass;

	$result->start_date = $mylink[0]->meta_value;
	$result->end_date   = $mylink[1]->meta_value;
	$result->student_status = $old;

	echo json_encode($result);
}
else
{
	$result = new stdClass;

	$result->start_date = $start_date_default;
	$result->end_date   = $end_date_default;
	$result->student_status = $new;

	echo json_encode($result);
}
