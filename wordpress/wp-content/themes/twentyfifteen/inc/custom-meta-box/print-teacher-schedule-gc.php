<br/>
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
	$gcteacher;
	$gcroom;
	$studentsgc2 = array();
	$studentsgc3 = array();
	$studentsgc4 = array();
	$studentsgc5 = array();
	$studentsgc6 = array();
	$studentsgc7 = array();
	$studentsgc8 = array();
	$studentsgc9 = array();
	$studentsgc10 = array();
	$colorgc2 = array();
	$colorgc3 = array();
	$colorgc4 = array();
	$colorgc5 = array();
	$colorgc6 = array();
	$colorgc7 = array();
	$colorgc8 = array();
	$colorgc9 = array();
	$colorgc10 = array();
	$ssdate2 = array();

	foreach($all_class_type as $single_class) {
		foreach($new_data_print_teacher as $tsched_gc) {
			if ($tsched_gc["sched"]["time2"][1] == $single_class->post_title) {
				$studentsgc2[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time2"][0];
				$gcroom = $tsched_gc["sched"]["time2"][2];
				$colorgc2[] = $tsched_gc['status'];
				$ssdate2[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time3"][1] == $single_class->post_title) {
				$studentsgc3[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time3"][0];
				$gcroom = $tsched_gc["sched"]["time3"][2];
			}

			if ($tsched_gc["sched"]["time4"][1] == $single_class->post_title) {
				$studentsgc4[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time4"][0];
				$gcroom = $tsched_gc["sched"]["time4"][2];
			}

			if ($tsched_gc["sched"]["time5"][1] == $single_class->post_title) {
				$studentsgc5[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time5"][0];
				$gcroom = $tsched_gc["sched"]["time5"][2];
			}

			if ($tsched_gc["sched"]["time6"][1] == $single_class->post_title) {
				$studentsgc6[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time6"][0];
				$gcroom = $tsched_gc["sched"]["time6"][2];
			}

			if ($tsched_gc["sched"]["time7"][1] == $single_class->post_title) {
				$studentsgc7[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time7"][0];
				$gcroom = $tsched_gc["sched"]["time7"][2];
			}

			if ($tsched_gc["sched"]["time8"][1] == $single_class->post_title) {
				$studentsgc8[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time8"][0];
				$gcroom = $tsched_gc["sched"]["time8"][2];
			}

			if ($tsched_gc["sched"]["time9"][1] == $single_class->post_title) {
				$studentsgc9[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time9"][0];
				$gcroom = $tsched_gc["sched"]["time9"][2];
			}

			if ($tsched_gc["sched"]["time10"][1] == $single_class->post_title) {
				$studentsgc10[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time10"][0];
				$gcroom = $tsched_gc["sched"]["time10"][2];
			}
		} // end 2nd foreach


		?>


		<tr class="tym-parent">
			<td>
				<?php
				echo $gcteacher;
				echo "<br>";
				echo $single_class->post_title;
				echo "<br>";
				echo $gcroom;
				?>
			</td>
			<td colspan="2">

				<?php
				$sstoday = date('Y-m-d');
				foreach ($studentsgc2 as $key => $value) {
					$val2 = $colorgc2[$key];
					$val3 = $ssdate2[$key];

					$val4 = date('Y-m-d', strtotime($val3 . ' + 7 days'));

					echo $value.$val2.$val4."; ";
				}
				?></td>
			<td colspan="2"><?php foreach ($studentsgc3 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc4 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc5 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc6 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc7 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc8 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc9 as $key => $value) {
					echo $value."; ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc10 as $key => $value) {
					echo $value."; ";
				} ?></td>
		</tr>
		<?php
		// unset
		$gcteacher = "";
		$gcroom = "";
		$studentsgc2 = array();
		$studentsgc3 = array();
		$studentsgc4 = array();
		$studentsgc5 = array();
		$studentsgc6 = array();
		$studentsgc7 = array();
		$studentsgc8 = array();
		$studentsgc9 = array();
		$studentsgc10 = array();
		$colorgc2 = array();

	} // end all class
	?>
	</tbody>
</table>