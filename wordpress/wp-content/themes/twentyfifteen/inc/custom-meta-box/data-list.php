<datalist id="schedule_rooms">
	<?php
	echo "<option>".implode('</option><option>', array_map(function ($entry) {
			return strtoupper($entry->post_title);
		}, $rooms_v1))."</option>";
	?>
</datalist>

<datalist id="schedule_teachers">
	<?php
	echo "<option>".implode('</option><option>', array_map(function ($entry) {
			return strtoupper($entry->display_name);
		}, $teachers_v1))."</option>";
	?>
</datalist>

<datalist id="schedule_class_type">
	<?php
	echo "<option>".implode('</option><option>', array_map(function ($entry) {
			return strtoupper($entry->post_title);
		}, $class_types_v1))."</option>";
	?>
</datalist>

<datalist id="schedule_students">
	<?php
	echo "<option>".implode('</option><option>', array_map(function ($entry) {
			if ($entry->end_date != null AND $entry->student != null )
			{
				return strtoupper($entry->display_name);
			}
		}, $students_v1))."</option>";
	?>
</datalist>
