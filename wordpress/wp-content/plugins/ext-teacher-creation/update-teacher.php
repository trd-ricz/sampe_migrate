<?php
	function update_teacher() {

	global $wpdb;

	$user_id = $_GET["id"];

	$name = $_POST["teacher_name"];
	$role = $_POST["role"];

	//update
	if (isset($_POST['submit']))
	{
		$wpdb->update(
			'wp_users', //table
			array('user_login' => $name, 'display_name' => $name), //data
			array( 'ID' => $user_id ), //where
			array('%s', '%s'), //data format
			array('%d') //where format
		);

		update_user_meta($user_id, 'wp_capabilities', $role);

		$message = "Update Successfully";
	}

	$teacher_role = $wpdb->get_row( "SELECT meta_value FROM $wpdb->usermeta as meta WHERE meta.meta_key = 'wp_capabilities' AND user_id = $user_id" );
	$teacher_name = $wpdb->get_row( "SELECT display_name FROM $wpdb->users WHERE ID = $user_id" );

?>

<link rel="stylesheet" href="<?php echo WP_PLUGIN_URL; ?>/ext-teacher-creation/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo WP_PLUGIN_URL; ?>/ext-teacher-creation/js/bootstrap.min.js"></script>

<div class="wrap" style="background-color: #fff;">

<h2>Update Teacher Role - <a href="<?php echo admin_url('admin.php?page=teachers_list'); ?>" class="btn btn-sm btn-primary">Back</a></h2>

<br/>

<?php if (isset($message)) : ?>
	<div class="updated">
		<p><?php echo $message;?></p>
	</div>
<?php endif;?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
	<div class="form-group">
		<div class="row">
			<div class="col-md-3">
				<input type="text" name="teacher_name" class="form-control" placeholder="Teacher Name" value="<?php echo $teacher_name->display_name; ?>" required>
				<br/>
				<select class="form-control" name="role">
					<option value="teacher" <?php echo (strpos($teacher_role->meta_value, "teacher") !== false) ? "selected" : ""; ?>>Teacher</option>
					<option value="subscriber" <?php echo (strpos($teacher_role->meta_value, "subscriber") !== false) ? "selected" : ""; ?>>Subscriber</option>
				</select>
			</div>
		</div>
	</div>

	<input type='submit' name="submit" value='Update' class='btn btn-primary'>
</form>
</div>
<?php
}