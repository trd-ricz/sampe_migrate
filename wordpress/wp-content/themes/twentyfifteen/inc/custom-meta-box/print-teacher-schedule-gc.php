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

	$ssdate2 = array();
	$ssdate3 = array();
	$ssdate4 = array();
	$ssdate5 = array();
	$ssdate6 = array();
	$ssdate7 = array();
	$ssdate8 = array();
	$ssdate9 = array();
	$ssdate10 = array();

	foreach($all_class_type as $single_class) {
		foreach($new_data_print_teacher as $tsched_gc) {
			if ($tsched_gc["sched"]["time2"][1] == $single_class->post_title) {
				$studentsgc2[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time2"][0];
				$gcroom = $tsched_gc["sched"]["time2"][2];

				$studgcstatus2[] = $tsched_gc['status'];
				$ssdate2[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time3"][1] == $single_class->post_title) {
				$studentsgc3[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time3"][0];
				$gcroom = $tsched_gc["sched"]["time3"][2];

				$studgcstatus3[] = $tsched_gc['status'];
				$ssdate3[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time4"][1] == $single_class->post_title) {
				$studentsgc4[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time4"][0];
				$gcroom = $tsched_gc["sched"]["time4"][2];

				$studgcstatus4[] = $tsched_gc['status'];
				$ssdate4[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time5"][1] == $single_class->post_title) {
				$studentsgc5[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time5"][0];
				$gcroom = $tsched_gc["sched"]["time5"][2];

				$studgcstatus5[] = $tsched_gc['status'];
				$ssdate5[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time6"][1] == $single_class->post_title) {
				$studentsgc6[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time6"][0];
				$gcroom = $tsched_gc["sched"]["time6"][2];

				$studgcstatus6[] = $tsched_gc['status'];
				$ssdate6[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time7"][1] == $single_class->post_title) {
				$studentsgc7[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time7"][0];
				$gcroom = $tsched_gc["sched"]["time7"][2];

				$studgcstatus7[] = $tsched_gc['status'];
				$ssdate7[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time8"][1] == $single_class->post_title) {
				$studentsgc8[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time8"][0];
				$gcroom = $tsched_gc["sched"]["time8"][2];

				$studgcstatus8[] = $tsched_gc['status'];
				$ssdate8[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time9"][1] == $single_class->post_title) {
				$studentsgc9[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time9"][0];
				$gcroom = $tsched_gc["sched"]["time9"][2];

				$studgcstatus9[] = $tsched_gc['status'];
				$ssdate9[] = $tsched_gc['start_date'];
			}

			if ($tsched_gc["sched"]["time10"][1] == $single_class->post_title) {
				$studentsgc10[] = $tsched_gc["name"];
				$gcteacher = $tsched_gc["sched"]["time10"][0];
				$gcroom = $tsched_gc["sched"]["time10"][2];

				$studgcstatus10[] = $tsched_gc['status'];
				$ssdate10[] = $tsched_gc['start_date'];
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
				$sstodaygc = date('Y-m-d');
				foreach ($studentsgc2 as $key => $value) {
					$sgcstatus = $studgcstatus2[$key];
					$ssd2gc = $ssdate2[$key];

					$newssd2gc = date('Y-m-d', strtotime($ssd2gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd2gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				}
				?></td>
			<td colspan="2"><?php foreach ($studentsgc3 as $key => $value) {
					$sgcstatus = $studgcstatus3[$key];
					$ssd3gc = $ssdate3[$key];

					$newssd3gc = date('Y-m-d', strtotime($ssd3gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd3gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc4 as $key => $value) {
					$sgcstatus = $studgcstatus4[$key];
					$ssd4gc = $ssdate4[$key];

					$newssd4gc = date('Y-m-d', strtotime($ssd4gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd4gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc5 as $key => $value) {
					$sgcstatus = $studgcstatus5[$key];
					$ssd5gc = $ssdate5[$key];

					$newssd5gc = date('Y-m-d', strtotime($ssd5gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd5gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc6 as $key => $value) {
					$sgcstatus = $studgcstatus6[$key];
					$ssd6gc = $ssdate6[$key];

					$newssd6gc = date('Y-m-d', strtotime($ssd6gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd6gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc7 as $key => $value) {
					$sgcstatus = $studgcstatus7[$key];
					$ssd7gc = $ssdate7[$key];

					$newssd7gc = date('Y-m-d', strtotime($ssd7gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd7gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc8 as $key => $value) {
					$sgcstatus = $studgcstatus8[$key];
					$ssd8gc = $ssdate8[$key];

					$newssd8gc = date('Y-m-d', strtotime($ssd8gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd8gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc9 as $key => $value) {
						$sgcstatus = $studgcstatus9[$key];
					$ssd9gc = $ssdate9[$key];

					$newssd9gc = date('Y-m-d', strtotime($ssd9gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd9gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

						echo '<span class="'.$colorgc.'">'.$value.";</span> ";
				} ?></td>
			<td colspan="2"><?php foreach ($studentsgc10 as $key => $value) {
						$sgcstatus = $studgcstatus10[$key];
					$ssd10gc = $ssdate10[$key];

					$newssd10gc = date('Y-m-d', strtotime($ssd10gc . ' + 7 days'));

					if ($sgcstatus == 'NEW STUDENT' && $sstodaygc >= $newssd10gc) {
						$colorgc = 'white';
					} elseif ($sgcstatus == 'OLD STUDENT') {
						$colorgc = 'white';
					} else {
						$colorgc = 'yellow';
					}

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

	} // end all class
	?>
	</tbody>
</table>