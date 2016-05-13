<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php';

global $wpdb;

$q = intval($_GET['q']);
$sttd = $_GET['sttd'];

$val = $q * 7;

$val = $val - 3;

$end_date = date("Y-m-d", strtotime($sttd . "+{$val} days"));

$result = new stdClass;

$result->end_date = $end_date;

echo json_encode($result);
