<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php';

global $wpdb;

$q = $_GET['q'];

$old = "OLD STUDENT";
$new = "NEW STUDENT";
$start_date_default = date("Y-m-d");
$end_date_default = date("Y-m-d", strtotime("+7 days"));

$mylink1 = $wpdb->get_row( "SELECT ID FROM $wpdb->users WHERE display_name = '$q'" );
$mylink = $wpdb->get_results( "SELECT meta_key, meta_value FROM $wpdb->usermeta WHERE meta_key IN ('stt_date', 'end_date') and user_id = $mylink1->ID" );


// for old students
$startDate = new DateTime($mylink[0]->meta_value);
$endDate = new DateTime($mylink[1]->meta_value);
$interval = $startDate->diff($endDate);
$count_result = (int)(($interval->days) / 7);

// for new students
$startDate2 = new DateTime($start_date_default);
$endDate2 = new DateTime($end_date_default);
$interval2 = $startDate2->diff($endDate2);
$count_result2 = (int)(($interval2->days) / 7);

if ($mylink)
{
	$result = new stdClass;

	$result->start_date = $mylink[0]->meta_value;
	$result->end_date   = $mylink[1]->meta_value;
	$result->student_status = $old;
	if ($count_result == 1)
	{
		$result->student_status = $new;
	}
	$result->count_weeks = $count_result;

	echo json_encode($result);
}
else
{
	$result = new stdClass;

	$result->start_date = $start_date_default;
	$result->end_date   = $end_date_default;
	$result->student_status = $new;
	$result->count_weeks = $count_result2;

	echo json_encode($result);
}