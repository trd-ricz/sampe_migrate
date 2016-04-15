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
	$testgc = array();
	$clstype = array();
	foreach($all_teachers_to_display as $teacher_single) {
		foreach($new_data_print_teacher as $tsched) {
			if ($tsched["sched"]["time2"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time2"][1], "MM") !== false) {
					$clstype[2] = $tsched["sched"]["time2"][1];
					$stud_name[2] = $tsched['name'] . " " . $tsched["sched"]["time2"][2];
				}
			}

			if ($tsched["sched"]["time3"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time3"][1], "MM") !== false) {
					$clstype[3] = $tsched["sched"]["time3"][1];
					$stud_name[3] = $tsched['name'] . " " . $tsched["sched"]["time3"][2];
				}
			}

			if ($tsched["sched"]["time4"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time4"][1], "MM") !== false) {
					$clstype[4] = $tsched["sched"]["time4"][1];
					$stud_name[4] = $tsched['name'] . " " . $tsched["sched"]["time4"][2];
				}
			}

			if ($tsched["sched"]["time5"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time5"][1], "MM") !== false) {
					$clstype[5] = $tsched["sched"]["time5"][1];
					$stud_name[5] = $tsched['name'] . " " . $tsched["sched"]["time5"][2];
				}
			}

			if ($tsched["sched"]["time6"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time6"][1], "MM") !== false) {
					$clstype[6] = $tsched["sched"]["time6"][1];
					$stud_name[6] = $tsched['name'] . " " . $tsched["sched"]["time6"][2];
				}
			}

			if ($tsched["sched"]["time7"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time7"][1], "MM") !== false) {
					$clstype[7] = $tsched["sched"]["time7"][1];
					$stud_name[7] = $tsched['name'] . " " . $tsched["sched"]["time7"][2];
				}
			}

			if ($tsched["sched"]["time8"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time8"][1], "MM") !== false) {
					$clstype[8] = $tsched["sched"]["time8"][1];
					$stud_name[8] = $tsched['name'] . " " . $tsched["sched"]["time8"][2];
				}
			}

			if ($tsched["sched"]["time9"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time9"][1], "MM") !== false) {
					$clstype[9] = $tsched["sched"]["time9"][1];
					$stud_name[9] = $tsched['name'] . " " . $tsched["sched"]["time9"][2];
				}
			}

			if ($tsched["sched"]["time10"][0] == strtoupper($teacher_single->display_name)) {
				if (strpos($tsched["sched"]["time10"][1], "MM") !== false) {
					$clstype[10] = $tsched["sched"]["time10"][1];
					$stud_name[10] = $tsched['name'] . " " . $tsched["sched"]["time10"][2];
				}
			}
		} // end 2nd foreach
		?>
		<tr>
			<td><?php echo $teacher_single->display_name; ?></td>
			<td><?php echo $stud_name[2]; ?></td>
			<td><?php echo $clstype[2]; ?></td>
			<td><?php echo $stud_name[3]; ?></td>
			<td><?php echo $clstype[3]; ?></td>
			<td><?php echo $stud_name[4]; ?></td>
			<td><?php echo $clstype[4]; ?></td>
			<td><?php echo $stud_name[5]; ?></td>
			<td><?php echo $clstype[5]; ?></td>
			<td><?php echo $stud_name[6]; ?></td>
			<td><?php echo $clstype[6]; ?></td>
			<td><?php echo $stud_name[7]; ?></td>
			<td><?php echo $clstype[7]; ?></td>
			<td><?php echo $stud_name[8]; ?></td>
			<td><?php echo $clstype[8]; ?></td>
			<td><?php echo $stud_name[9]; ?></td>
			<td><?php echo $clstype[9]; ?></td>
			<td><?php echo $stud_name[10]; ?></td>
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
	} // end all teachers
	?>
	</tbody>
</table>
