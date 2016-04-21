<br/>
<br/>
<table class="table table-bordered twspfirst">
	<thead>
	<tr>
		<th>Name</th>
		<th>8:00-8:50</th>
		<th>class</th>
		<th>9:00-9:50</th>
		<th>class</th>
		<th>10:00 - 10:50</th>
		<th>class</th>
		<th>11:00 - 11:50</th>
		<th>class</th>
		<th>1:30 - 2:20</th>
		<th>class</th>
		<th>2:30 - 3:20</th>
		<th>class</th>
		<th>3:30 - 4:20</th>
		<th>class</th>
		<th>4:30 - 5:20</th>
		<th>class</th>
		<th>5:30 - 6:20</th>
		<th>class</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$stud_name = array();
	$stud_room = array();
	$clstype = array();
	$color = array();

	foreach($all_teachers_to_display as $teacher_single) {
		foreach($new_data_print_teacher as $tsched) {
			if ($tsched["sched"]["time2"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time2"][1], "MM") !== false) {
					$clstype[2] = $tsched["sched"]["time2"][1];
					$stud_name[2] = $tsched['name'];
					$stud_room[2] = $tsched["sched"]["time2"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[2] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[2] = 'white';
					} else {
						$color[2] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time3"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time3"][1], "MM") !== false) {
					$clstype[3] = $tsched["sched"]["time3"][1];
					$stud_name[3] = $tsched['name'];
					$stud_room[3] = $tsched["sched"]["time3"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[3] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[3] = 'white';
					} else {
						$color[3] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time4"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time4"][1], "MM") !== false) {
					$clstype[4] = $tsched["sched"]["time4"][1];
					$stud_name[4] = $tsched['name'];
					$stud_room[4] = $tsched["sched"]["time4"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[4] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[4] = 'white';
					} else {
						$color[4] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time5"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time5"][1], "MM") !== false) {
					$clstype[5] = $tsched["sched"]["time5"][1];
					$stud_name[5] = $tsched['name'];
					$stud_room[5] = $tsched["sched"]["time5"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[5] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[5] = 'white';
					} else {
						$color[5] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time6"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time6"][1], "MM") !== false) {
					$clstype[6] = $tsched["sched"]["time6"][1];
					$stud_name[6] = $tsched['name'];
					$stud_room[6] = $tsched["sched"]["time6"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[6] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[6] = 'white';
					} else {
						$color[6] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time7"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time7"][1], "MM") !== false) {
					$clstype[7] = $tsched["sched"]["time7"][1];
					$stud_name[7] = $tsched['name'];
					$stud_room[7] = $tsched["sched"]["time7"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[7] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[7] = 'white';
					} else {
						$color[7] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time8"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time8"][1], "MM") !== false) {
					$clstype[8] = $tsched["sched"]["time8"][1];
					$stud_name[8] = $tsched['name'];
					$stud_room[8] = $tsched["sched"]["time8"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[8] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[8] = 'white';
					} else {
						$color[8] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time9"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time9"][1], "MM") !== false) {
					$clstype[9] = $tsched["sched"]["time9"][1];
					$stud_name[9] = $tsched['name'];
					$stud_room[9] = $tsched["sched"]["time9"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date. ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[9] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[9] = 'white';
					} else {
						$color[9] = 'yellow';
					}
				}
			}

			if ($tsched["sched"]["time10"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time10"][1], "MM") !== false) {
					$clstype[10] = $tsched["sched"]["time10"][1];
					$stud_name[10] = $tsched['name'];
					$stud_room[10] = $tsched["sched"]["time10"][2];

					$sstatus = $tsched['status'];
					$today_date = date('Y-m-d');
					$studentdb_date = $tsched['start_date'];
					$new_studentdb_date = date('Y-m-d', strtotime($studentdb_date . ' + 7 days'));

					if ($sstatus == 'NEW STUDENT' && $today_date >= $new_studentdb_date) {
						$color[10] = 'white';
					} elseif ($sstatus == 'OLD STUDENT') {
						$color[10] = 'white';
					} else {
						$color[10] = 'yellow';
					}
				}
			}
		} // end 2nd foreach

		?>
		<tr>
			<td><?php echo $teacher_single->display_name; echo $tors; 	?></td>
			<td><?php echo '<span class="'.$color[2].'">'.$stud_name[2].'</span>'; echo "<br>"; echo $stud_room[2]; ?></td>
			<td><?php echo $clstype[2]; ?></td>
			<td><?php echo '<span class="'.$color[3].'">'.$stud_name[3].'</span>'; echo "<br>"; echo $stud_room[3]; ?></td>
			<td><?php echo $clstype[3]; ?></td>
			<td><?php echo '<span class="'.$color[4].'">'.$stud_name[4].'</span>'; echo "<br>"; echo $stud_room[4]; ?></td>
			<td><?php echo $clstype[4]; ?></td>
			<td><?php echo '<span class="'.$color[5].'">'.$stud_name[5].'</span>'; echo "<br>"; echo $stud_room[5]; ?></td>
			<td><?php echo $clstype[5]; ?></td>
			<td><?php echo '<span class="'.$color[6].'">'.$stud_name[6].'</span>'; echo "<br>"; echo $stud_room[6]; ?></td>
			<td><?php echo $clstype[6]; ?></td>
			<td><?php echo '<span class="'.$color[7].'">'.$stud_name[7].'</span>'; echo "<br>"; echo $stud_room[7]; ?></td>
			<td><?php echo $clstype[7]; ?></td>
			<td><?php echo '<span class="'.$color[8].'">'.$stud_name[8].'</span>'; echo "<br>"; echo $stud_room[8]; ?></td>
			<td><?php echo $clstype[8]; ?></td>
			<td><?php echo '<span class="'.$color[9].'">'.$stud_name[9].'</span>'; echo "<br>"; echo $stud_room[9]; ?></td>
			<td><?php echo $clstype[9]; ?></td>
			<td><?php echo '<span class="'.$color[10].'">'.$stud_name[10].'</span>'; echo "<br>"; echo $stud_room[10];?></td>
			<td><?php echo $clstype[10]; ?></td>
		</tr>
		<?php
		// unset
		$stud_name[2] = "";
		$clstype[2] = "";
		$stud_name[3] = "";
		$clstype[3] = "";
		$stud_name[4] = "";
		$clstype[4] = "";
		$stud_name[5] = "";
		$clstype[5] = "";
		$stud_name[6] = "";
		$clstype[6] = "";
		$stud_name[7] = "";
		$clstype[7] = "";
		$stud_name[8] = "";
		$clstype[8] = "";
		$stud_name[9] = "";
		$clstype[9] = "";
		$stud_name[10] = "";
		$clstype[10] = "";
		$stud_room[2] = "";
		$stud_room[3] = "";
		$stud_room[4] = "";
		$stud_room[5] = "";
		$stud_room[6] = "";
		$stud_room[7] = "";
		$stud_room[8] = "";
		$stud_room[9] = "";
		$stud_room[10] = "";
		$color[2] = "";
		$color[3] = "";
		$color[4] = "";
		$color[5] = "";
		$color[6] = "";
		$color[7] = "";
		$color[8] = "";
		$color[9] = "";
		$color[10] = "";
	} // end all teachers
	?>
	</tbody>
</table>
