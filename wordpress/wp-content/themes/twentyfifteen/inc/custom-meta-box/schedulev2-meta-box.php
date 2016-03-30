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

	$schedules = get_post_meta($post->ID, '_schedule_v2');
	?>

	<link rel="stylesheet"
		  href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/schedule.css">

	<input type="button" onclick="myFunction()" class="btn btn-primary" value="Print">

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