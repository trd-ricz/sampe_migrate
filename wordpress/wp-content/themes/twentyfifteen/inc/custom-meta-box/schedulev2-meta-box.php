<?php

function add_schedule_v2_metaboxes()
{
	add_meta_box('wpt_schedules', 'How many students you want to create ? Pls. Input an integer', 'create_schedules', 'schedule_v2', 'normal', 'high');
	add_meta_box('wpt_schedules_print_teacher', 'Print Teacher Weekly Schedule', 'print_teacher_schedules', 'schedule_v2', 'normal', 'high');
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

function print_teacher_schedules()
{
	global $wpdb;
	global $post;

	$all_class_type = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_type = 'class_type' and post_title like '%GC%' AND post_status = 'publish'");

	$all_teachers_to_display = $wpdb->get_results("SELECT users.display_name FROM $wpdb->users as users
	LEFT JOIN $wpdb->usermeta as meta ON users.ID = meta.user_id and meta.meta_key = 'wp_capabilities' and meta.meta_value REGEXP 'teacher'
	WHERE meta.meta_value IS NOT NULL");

	$title = str_replace("&#039;","'",$post->post_title);
	$get_data_by_title = $wpdb->get_row("Select meta_value from wp_postmeta as a, wp_posts as b where a.post_id = b.ID and b.post_title = '".addslashes($title)."' and a.meta_key = '_schedule_v2' ");
	$new_data_print_teacher = unserialize($get_data_by_title->meta_value);

?>
	<div id="printTeacherWeeklySchedule">
		<input type="button" onclick="printTeacherWeeklySchedule()" class="btn btn-success" value="Print Teacher Weekly Schedule">
<?php
	include __DIR__ . '/print-teacher-schedule.php';
	include __DIR__ . '/print-teacher-schedule-gc.php';
?>
	</div><!--printTeacherWeeklySchedule-->
<?php
}

function print_schedules()
{
	global $wpdb;
	global $post;

	$schedules = get_post_meta($post->ID, '_schedule_v2');

	?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/schedule.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<input type="button" onclick="printAllStudentWeeklySchedule()" class="btn btn-primary" value="Print All Student Weekly Schedule">
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

			if (strpos($entry->display_name, "graduated") !== false) {
				// do nothing
			} else {
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