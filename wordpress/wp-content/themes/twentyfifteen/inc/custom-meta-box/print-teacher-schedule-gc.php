<!--<input type="button" onclick="printTeacherWeeklySchedule()" class="btn btn-success" value="Print Teacher Weekly Schedule">-->
<br/>
<br/>
<div id="twsp">

	<?php
		$test = 'brylle';
		$test2 = '';

		$tz = $test2 = $test;

		echo $tz;
	?>
<table class="table table-bordered">
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
	$stud_name_gc = array();
	$stud_teach_gc = array();

	foreach($all_class_type as $single_class) {
		foreach($new_data_print_teacher as $tsched_gc) {
			if ($tsched_gc["sched"]["time2"][1] == $single_class->post_title) {
				$stud_name_gc[2] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time3"][1] == $single_class->post_title) {
				$stud_name_gc[3] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time4"][1] == $single_class->post_title) {
				$stud_name_gc[4] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time5"][1] == $single_class->post_title) {
				$stud_name_gc[5] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time6"][1] == $single_class->post_title) {
				$stud_name_gc[6] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time7"][1] == $single_class->post_title) {
				$stud_name_gc[7] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time8"][1] == $single_class->post_title) {
				$stud_name_gc[8] = $tsched_gc['name'];
			}

			if ($tsched_gc["sched"]["time9"][1] == $single_class->post_title) {
				$stud_name_gc[9] = $tsched_gc['name'];
			}

			if ($tsched["sched"]["time10"][1] == $single_class->post_title) {
				$stud_name_gc[10] = $tsched['name'];
			}
		} // end 2nd foreach
		?>
		<tr class="tym-parent">
			<td><?php echo $single_class->post_title; ?></td>
			<td colspan="2" class="tym2"><?php echo $stud_name_gc[2]; ?></td>
			<td colspan="2" class="tym3"><?php echo $stud_name_gc[3]; ?></td>
			<td colspan="2" class="tym4"><?php echo $stud_name_gc[4]; ?></td>
			<td colspan="2" class="tym5"><?php echo $stud_name_gc[5]; ?></td>
			<td colspan="2" class="tym6"><?php echo $stud_name_gc[6]; ?></td>
			<td colspan="2" class="tym7"><?php echo $stud_name_gc[7]; ?></td>
			<td colspan="2" class="tym8"><?php echo $stud_name_gc[8]; ?></td>
			<td colspan="2" class="tym9"><?php echo $stud_name_gc[9]; ?></td>
			<td colspan="2" class="tym10"><?php echo $stud_name_gc[10]; ?></td>
		</tr>
		<?php
		// unset
		$stud_name_gc[2] = "";
		$stud_name_gc[3] = "";
		$stud_name_gc[4] = "";
		$stud_name_gc[5] = "";
		$stud_name_gc[6] = "";
		$stud_name_gc[7] = "";
		$stud_name_gc[8] = "";
		$stud_name_gc[9] = "";
		$stud_name_gc[10] = "";
	} // end all teachers
	?>
	</tbody>
</table>
</div>