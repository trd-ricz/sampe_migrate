<?php
	function create_teacher() {

	$name = $_POST["teacher_name"];

	if (isset($_POST['submit']))
	{
		global $wpdb;

		$wpdb->insert(
			'wp_users',
			array('user_login' => $name, 'display_name' => $name),
			array('%s', '%s')
		);

		$lastid = $wpdb->insert_id;

		if ($lastid) {
			add_user_meta( $lastid, 'wp_capabilities', 'teacher' );
			$message = "Save Successfully";
		} else {
			$message = "Error Occured";
		}
	}
?>
<link rel="stylesheet" href="<?php echo WP_PLUGIN_URL; ?>/ext-teacher-creation/css/bootstrap.min.css" />

<div class="wrap" style="background-color: #fff;">

<h2>Add New Teacher - <a href="<?php echo admin_url('admin.php?page=teachers_list'); ?>" class="btn btn-sm btn-primary">Back</a></h2>

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
				<input type="text" name="teacher_name" class="form-control" placeholder="Teacher Name" required>
			</div>
		</div>
	</div>

	<input type='submit' name="submit" value='Submit' class='btn btn-primary'>
</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo WP_PLUGIN_URL; ?>/ext-teacher-creation/js/bootstrap.min.js"></script>

<?php }