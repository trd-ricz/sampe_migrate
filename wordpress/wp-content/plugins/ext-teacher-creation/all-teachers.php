<?php function teachers_list() {
	global $wpdb;

	$page = ! empty($_GET['page_num']) ? (int)$_GET['page_num'] : 1;
	$per_page = 15;
	$total_count = $wpdb->get_var( "SELECT COUNT(*) from $wpdb->usermeta as meta where meta.meta_value REGEXP 'teacher|subscriber'" );
	$pagination = new Pagination($page, $per_page, $total_count);
?>

<link rel="stylesheet" href="<?php echo WP_PLUGIN_URL; ?>/ext-teacher-creation/css/bootstrap.min.css" />
<div class="wrap" style="background-color: #fff;">

<h2>All Teachers</h2>
<hr/>
<a href="<?php echo admin_url('admin.php?page=create_teacher'); ?>" class="btn btn-primary">Add New</a>
<hr/>
<?php
	$teachers = $wpdb->get_results("SELECT users.ID, meta.meta_value, users.display_name FROM $wpdb->users as users
	LEFT JOIN $wpdb->usermeta as meta ON users.ID = meta.user_id and meta.meta_value REGEXP 'teacher|subscriber'
	WHERE meta.meta_value IS NOT NULL ORDER BY ID DESC LIMIT {$per_page} OFFSET {$pagination->offset()}");
?>
<table id="teachers-list" class="table table-condensed">
	<thead>
		<tr>
			<th>Name</th>
			<th>Role</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php array_map(function ($entry) { ?>
		<tr class="<?php echo (strpos($entry->meta_value, "subscriber") !== false) ? "danger" : ""; ?>">
			<td id="names"><?php echo $entry->display_name; ?></td>
			<td>
				<?php
					if (strpos($entry->meta_value, "teacher") !== false) {
						echo "teacher";
					} else if (strpos($entry->meta_value, "subscriber") !== false) {
						echo "subscriber";
					}
				?>
			</td>
			<td><a href="<?php echo admin_url('admin.php?page=update_teacher&id='.$entry->ID); ?>" class="btn btn-info">Edit</a></td>
		</tr>
	<?php }, $teachers); ?>
	</tbody>
</table>

<nav>
	<ul class="pagination">
		<!--            total page is 2 -->
		<?php if ($pagination->total_pages() > 1) : ?>

			<?php if ($pagination->has_previous_page()) : ?>
				<li>
					<a href="?page=<?php echo $pagination->previous_page() ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo; Previous</span>
					</a>
				</li>
			<?php endif; ?>

			<?php for ($i = 1; $i <= $pagination->total_pages(); $i++) : ?>
				<?php if ($i == $page) : ?>
					<li class="active"><a href="?page=teachers_list&page_num=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php else : ?>
					<li><a href="?page=teachers_list&page_num=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endif; ?>
			<?php endfor; ?>

			<?php if ($pagination->has_next_page()) : ?>
				<li>
					<a href="?page=teachers_list&page_num=<?php echo $pagination->next_page() ?>" aria-label="Next">
						<span aria-hidden="true">Next &raquo;</span>
					</a>
				</li>
			<?php endif; ?>

		<?php endif; ?>
	</ul>
</nav>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo WP_PLUGIN_URL; ?>/ext-teacher-creation/js/bootstrap.min.js"></script>

<?php }