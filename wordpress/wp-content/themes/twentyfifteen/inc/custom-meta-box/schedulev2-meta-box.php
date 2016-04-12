<?php

function add_schedule_v2_metaboxes()
{
	add_meta_box('wpt_schedules', 'How many students you want to create ? Pls. Input an integer', 'create_schedules', 'schedule_v2', 'normal', 'high');
	add_meta_box('wpt_schedules_print', 'Print Schedules', 'print_schedules', 'schedule_v2', 'normal', 'high');
	add_meta_box('wpt_schedules_update', 'Update Schedules', 'update_schedules_v2', 'schedule_v2', 'normal', 'high');
}

function create_schedules()
{
	global $post;
	wp_nonce_field('check_schedule', 'check_schedule_nonce');
	?>

	<input type="text" name="counter" id="counter" value=""/>
	<input type="button" id="counter_value" name="counter_value" value="Display"/>

	<div id="display_forms">
		<!--this is where we append the forms by user integer input-->
	</div>

	<script type="text/javascript"><!--//--><![CDATA[//><!--
	<?php include __DIR__.'/custom-meta-box.js'; ?>
		//--><!]]></script>

<?php
}


function print_schedules()
{
	global $wpdb;
	global $post;

	$all_teachers_to_display = $wpdb->get_results("SELECT users.display_name FROM $wpdb->users as users
	LEFT JOIN $wpdb->usermeta as meta ON users.ID = meta.user_id and meta.meta_value REGEXP 'teacher'
	WHERE meta.meta_value IS NOT NULL");


	$title = str_replace("&#039;","'",$post->post_title);
	$get_data_by_title = $wpdb->get_row("Select meta_value from wp_postmeta as a, wp_posts as b where a.post_id = b.ID and b.post_title = '".addslashes($title)."' and a.meta_key = '_schedule_v2' ");
	$new_data_print_teacher = unserialize($get_data_by_title->meta_value);

//	echo "bryllejohn";
//	echo "<pre>";
//	print_r($new_data_print_teacher);
//	echo "</pre>";


//	foreach($all_teachers_to_display as $asda) {
//		for ($i=0; $i < count($new_data_print_teacher); $i++) {
//			echo $asda->display_name;
//		}



//	array_map(function ($dsdsd) {
////		return $dsdsd;
//		for ($i=0; $i < count($new_data_print_teacher); $i++) {
//			return $dsdsd;
//			echo $dsdsd->display_name;
//		}
//
//	}, $all_teachers_to_display);


//	array_map(function ($entry) {

	?>
			<table class="table table-condensed">
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
					$clstype = array();
					foreach($all_teachers_to_display as $teacher_single) {
						foreach($new_data_print_teacher as $tsched) {
							if ($tsched["sched"]["time2"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[2] = $tsched["sched"]["time2"][1];
								$stud_name[2] = $tsched['name']." ".$tsched["sched"]["time2"][2];
							}

							if ($tsched["sched"]["time3"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[3] = $tsched["sched"]["time3"][1];
								$stud_name[3] = $tsched['name']." ".$tsched["sched"]["time3"][2];
							}

							if ($tsched["sched"]["time4"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[4] = $tsched["sched"]["time4"][1];
								$stud_name[4] = $tsched['name']." ".$tsched["sched"]["time4"][2];
							}

							if ($tsched["sched"]["time5"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[5] = $tsched["sched"]["time5"][1];
								$stud_name[5] = $tsched['name']." ".$tsched["sched"]["time5"][2];
							}

							if ($tsched["sched"]["time6"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[6] = $tsched["sched"]["time6"][1];
								$stud_name[6] = $tsched['name']." ".$tsched["sched"]["time6"][2];
							}

							if ($tsched["sched"]["time7"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[7] = $tsched["sched"]["time7"][1];
								$stud_name[7] = $tsched['name']." ".$tsched["sched"]["time7"][2];
							}

							if ($tsched["sched"]["time8"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[8] = $tsched["sched"]["time8"][1];
								$stud_name[8] = $tsched['name']." ".$tsched["sched"]["time8"][2];
							}

							if ($tsched["sched"]["time9"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[9] = $tsched["sched"]["time9"][1];
								$stud_name[9] = $tsched['name']." ".$tsched["sched"]["time9"][2];
							}

							if ($tsched["sched"]["time10"][0] == strtoupper($teacher_single->display_name)) {
								$clstype[10] = $tsched["sched"]["time10"][1];
								$stud_name[10] = $tsched['name']." ".$tsched["sched"]["time10"][2];
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
					}
				?>
				</tbody>
			</table>

		<?php
			//			if ($new_data_print_teacher[$i]["sched"]["time2"][0] == strtoupper($entry->display_name)) {
//				echo "found";
//			} else if ($new_data_print_teacher[$i]["sched"]["time9"][0] == "AL MARIE") {
//				echo "found";
//			} else {
//				echo "not found";
//			}
//
//			echo "<br/>";


//	}, $all_teachers_to_display);


	$schedules = get_post_meta($post->ID, '_schedule_v2');

	?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/schedule.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<input type="button" onclick="myPrintFunction()" class="btn btn-primary" value="Print">
	<br/>
	<br/>

	<div id="print_preview">
		<?php for ($x = 0; $x < count($schedules[0]); $x++) : ?>
			<?php include __DIR__ . '/print-data.php'; ?>
		<?php endfor; ?>
	</div><!--end print -->

<?php
}

function update_schedules_v2()
{
	global $wpdb;
	global $post;

	$schedules = get_post_meta($post->ID, '_schedule_v2');

	$students_v1 = $wpdb->get_results("SELECT ID,
			display_name,
			CASE WHEN meta.meta_key = 'end_date' AND meta.meta_value > now() THEN meta.meta_value END as end_date,
			MAX(CASE WHEN meta.meta_key = 'wp_capabilities' AND meta.meta_value LIKE '%student%' THEN 'TRUE' END) as student
		FROM $wpdb->users as users, $wpdb->usermeta as meta
		WHERE users.ID = meta.user_id
		AND meta.meta_key IN ('end_date','wp_capabilities')
		GROUP BY ID");

	$teachers_v1 = $wpdb->get_results("SELECT display_name FROM $wpdb->users as users, $wpdb->usermeta as meta WHERE meta.meta_key = 'wp_capabilities' AND meta.meta_value LIKE '%teacher%' AND users.ID = meta.user_id");
	$class_types_v1 = $wpdb->get_results("SELECT post_title FROM $wpdb->posts WHERE post_type = 'class_type'");
	$rooms_v1 = $wpdb->get_results("SELECT post_title FROM $wpdb->posts WHERE post_type = 'class_room'");
	$students_graduated = $wpdb->get_results("SELECT ID,
			display_name,
			CASE WHEN meta.meta_key = 'end_date' AND meta.meta_value < now() THEN meta.meta_value END as end_date,
			MAX(CASE WHEN meta.meta_key = 'wp_capabilities' AND meta.meta_value LIKE '%student%' THEN 'TRUE' END) as student
		FROM $wpdb->users as users, $wpdb->usermeta as meta
		WHERE users.ID = meta.user_id
		AND meta.meta_key IN ('end_date','wp_capabilities')
		GROUP BY ID");

	array_map(function ($entry) {
		if ($entry->end_date != null AND $entry->student != null )
		{
			global $wpdb;

			if (strpos($entry->display_name, "graduated") !== false)
			{
				// do nothing
			}
			else
			{
				$wpdb->update(
					'wp_users',
					array(
						'display_name' => $entry->display_name."_graduated"
					),
					array( 'ID' => $entry->ID),
					array(
						'%s'
					),
					array( '%d' )
				);
			}
		}
	}, $students_graduated);
	?>

	<div id="update_schedules_v2">
		<?php for ($x = 0; $x < count($schedules[0]); $x++) : ?>
			<?php include __DIR__ . '/edit-data-v2.php'; ?>
		<?php endfor; ?>
	</div><!--end print -->

	<!--datalist-->
	<?php include __DIR__ . '/data-list.php'; ?>
	<!--datalist-->

<?php
}

function save_schedules($post_id)
{

	if (!isset($_POST['check_schedule_nonce']))
		return $post_id;

	$nonce = $_POST['check_schedule_nonce'];

	if (!wp_verify_nonce($nonce, 'check_schedule'))
		return $post_id;

	if (!current_user_can('edit_post', $post_id))
		return $post_id;

	//$_POSTS
	include __DIR__ . '/variable-posts.php';

	update_post_meta($post_id, '_schedule_v2', $sched);
}

add_action('save_post', 'save_schedules');