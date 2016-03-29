<?php
$studenta = $_POST['student'];
$student_status = $_POST['student_status'];
$buddy_teacher = $_POST['buddy_teacher'];
$cubicle_no = $_POST['cubicle_no'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$teacher88 = $_POST['teacher8850'];
$class88 = $_POST['class_type8850'];
$room88 = $_POST['room8850'];

$teacher99 = $_POST['teacher9950'];
$class99 = $_POST['class_type9950'];
$room99 = $_POST['room9950'];

$teacher1010 = $_POST['teacher101050'];
$class1010 = $_POST['class_type101050'];
$room1010 = $_POST['room101050'];

$teacher1111 = $_POST['teacher111150'];
$class1111 = $_POST['class_type111150'];
$room1111 = $_POST['room111150'];

$teacher1302 = $_POST['teacher130220'];
$class1302 = $_POST['class_type130220'];
$room1302 = $_POST['room130220'];

$teacher2303 = $_POST['teacher230320'];
$class2303 = $_POST['class_type230320'];
$room2303 = $_POST['room230320'];

$teacher3304 = $_POST['teacher330420'];
$class3304 = $_POST['class_type330420'];
$room3304 = $_POST['room330420'];

$teacher4305 = $_POST['teacher430520'];
$class4305 = $_POST['class_type430520'];
$room4305 = $_POST['room430520'];

$teacher5306 = $_POST['teacher530620'];
$class5306 = $_POST['class_type530620'];
$room5306 = $_POST['room530620'];


$sched = array();

// if use [] / then use $x = 0;
for ($x = 0; $x < count($studenta); $x++) {

	$data2 = array(
		$teacher88[$x],
		$class88[$x],
		$room88[$x]
	);

	$data3 = array(
		$teacher99[$x],
		$class99[$x],
		$room99[$x]
	);

	$data4 = array(
		$teacher1010[$x],
		$class1010[$x],
		$room1010[$x]
	);

	$data5 = array(
		$teacher1111[$x],
		$class1111[$x],
		$room1111[$x]
	);

	$data6 = array(
		$teacher1302[$x],
		$class1302[$x],
		$room1302[$x]
	);

	$data7 = array(
		$teacher2303[$x],
		$class2303[$x],
		$room2303[$x]
	);

	$data8 = array(
		$teacher3304[$x],
		$class3304[$x],
		$room3304[$x]
	);

	$data9 = array(
		$teacher4305[$x],
		$class4305[$x],
		$room4305[$x]
	);

	$data10 = array(
		$teacher5306[$x],
		$class5306[$x],
		$room5306[$x]
	);


	$sched[$x] = array(
		"name" => $studenta[$x],
		"status" => $student_status[$x],
		"cubicle_no" => $cubicle_no[$x],
		"buddy_teacher" => $buddy_teacher[$x],
		"start_date" => $start_date[$x],
		"end_date" => $end_date[$x],
		"sched" => array(
			"time2" => $data2,
			"time3" => $data3,
			"time4" => $data4,
			"time5" => $data5,
			"time6" => $data6,
			"time7" => $data7,
			"time8" => $data8,
			"time9" => $data9,
			"time10" => $data10
		)
	);
}
?>