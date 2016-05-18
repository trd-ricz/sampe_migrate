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

	$studgcstatus2 = array();
	$studgcstatus3 = array();
	$studgcstatus4 = array();
	$studgcstatus5 = array();
	$studgcstatus6 = array();
	$studgcstatus7 = array();
	$studgcstatus8 = array();
	$studgcstatus9 = array();
	$studgcstatus10 = array();

	$transgc2 = array();
	$transgc3 = array();
	$transgc4 = array();
	$transgc5 = array();
	$transgc6 = array();
	$transgc7 = array();
	$transgc8 = array();
	$transgc9 = array();
	$transgc10 = array();

	foreach($all_class_type as $single_class) {
		foreach($new_data_print_teacher as $tsched_gc) {
			if ($tsched_gc["sched"]["time2"][1] == $single_class->post_title) {
				$studentsgc2[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time2"][0];
				$gcroom = $tsched_gc["sched"]["time2"][2];

				$studgcstatus2[] = $tsched_gc['status'];

				// get transferree status
				$transgc2[] = $tsched_gc["sched"]["time2"][3];
			}

			if ($tsched_gc["sched"]["time3"][1] == $single_class->post_title) {
				$studentsgc3[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time3"][0];
				$gcroom = $tsched_gc["sched"]["time3"][2];

				$studgcstatus3[] = $tsched_gc['status'];

				// get transferree status
				$transgc3[] = $tsched_gc["sched"]["time3"][3];
			}

			if ($tsched_gc["sched"]["time4"][1] == $single_class->post_title) {
				$studentsgc4[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time4"][0];
				$gcroom = $tsched_gc["sched"]["time4"][2];

				$studgcstatus4[] = $tsched_gc['status'];

				// get transferree status
				$transgc4[] = $tsched_gc["sched"]["time4"][3];
			}

			if ($tsched_gc["sched"]["time5"][1] == $single_class->post_title) {
				$studentsgc5[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time5"][0];
				$gcroom = $tsched_gc["sched"]["time5"][2];

				$studgcstatus5[] = $tsched_gc['status'];

				// get transferree status
				$transgc5[] = $tsched_gc["sched"]["time5"][3];
			}

			if ($tsched_gc["sched"]["time6"][1] == $single_class->post_title) {
				$studentsgc6[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time6"][0];
				$gcroom = $tsched_gc["sched"]["time6"][2];

				$studgcstatus6[] = $tsched_gc['status'];

				// get transferree status
				$transgc6[] = $tsched_gc["sched"]["time6"][3];
			}

			if ($tsched_gc["sched"]["time7"][1] == $single_class->post_title) {
				$studentsgc7[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time7"][0];
				$gcroom = $tsched_gc["sched"]["time7"][2];

				$studgcstatus7[] = $tsched_gc['status'];

				// get transferree status
				$transgc7[] = $tsched_gc["sched"]["time7"][3];
			}

			if ($tsched_gc["sched"]["time8"][1] == $single_class->post_title) {
				$studentsgc8[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time8"][0];
				$gcroom = $tsched_gc["sched"]["time8"][2];

				$studgcstatus8[] = $tsched_gc['status'];

				// get transferree status
				$transgc8[] = $tsched_gc["sched"]["time8"][3];
			}

			if ($tsched_gc["sched"]["time9"][1] == $single_class->post_title) {
				$studentsgc9[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time9"][0];
				$gcroom = $tsched_gc["sched"]["time9"][2];

				$studgcstatus9[] = $tsched_gc['status'];

				// get transferree status
				$transgc9[] = $tsched_gc["sched"]["time9"][3];
			}

			if ($tsched_gc["sched"]["time10"][1] == $single_class->post_title) {
				$studentsgc10[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time10"][0];
				$gcroom = $tsched_gc["sched"]["time10"][2];

				$studgcstatus10[] = $tsched_gc['status'];

				// get transferree status
				$transgc10[] = $tsched_gc["sched"]["time10"][3];
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
				foreach ($studentsgc2 as $key => $value) {
					$sgcstatus = $studgcstatus2[$key];

					$transgc2value = $transgc2[$key];

					$colorgc = get_status_color($sgcstatus, $transgc2value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				}
				?></td>
			<td colspan="2"><?php foreach ($studentsgc3 as $key => $value) {
					$sgcstatus = $studgcstatus3[$key];

					$transgc3value = $transgc3[$key];

					$colorgc = get_status_color($sgcstatus, $transgc3value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc4 as $key => $value) {
					$sgcstatus = $studgcstatus4[$key];

					$transgc4value = $transgc4[$key];

					$colorgc = get_status_color($sgcstatus, $transgc4value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc5 as $key => $value) {
					$sgcstatus = $studgcstatus5[$key];

					$transgc5value = $transgc5[$key];

					$colorgc = get_status_color($sgcstatus, $transgc5value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc6 as $key => $value) {
					$sgcstatus = $studgcstatus6[$key];

					$transgc6value = $transgc6[$key];

					$colorgc = get_status_color($sgcstatus, $transgc6value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc7 as $key => $value) {
					$sgcstatus = $studgcstatus7[$key];

					$transgc7value = $transgc7[$key];

					$colorgc = get_status_color($sgcstatus, $transgc7value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc8 as $key => $value) {
					$sgcstatus = $studgcstatus8[$key];

					$transgc8value = $transgc8[$key];

					$colorgc = get_status_color($sgcstatus, $transgc8value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc9 as $key => $value) {
						$sgcstatus = $studgcstatus9[$key];

					$transgc9value = $transgc9[$key];

					$colorgc = get_status_color($sgcstatus, $transgc9value);

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc10 as $key => $value) {
						$sgcstatus = $studgcstatus10[$key];

					$transgc10value = $transgc10[$key];

					$colorgc = get_status_color($sgcstatus, $transgc10value);

					echo '<span class="'.$colorgc.'">'.$value.";</span> ";
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

		$studgcstatus2 = array();
		$studgcstatus3 = array();
		$studgcstatus4 = array();
		$studgcstatus5 = array();
		$studgcstatus6 = array();
		$studgcstatus7 = array();
		$studgcstatus8 = array();
		$studgcstatus9 = array();
		$studgcstatus10 = array();

		$transgc2 = array();
		$transgc3 = array();
		$transgc4 = array();
		$transgc5 = array();
		$transgc6 = array();
		$transgc7 = array();
		$transgc8 = array();
		$transgc9 = array();
		$transgc10 = array();

	} // end all class
	?>
	</tbody>
</table>