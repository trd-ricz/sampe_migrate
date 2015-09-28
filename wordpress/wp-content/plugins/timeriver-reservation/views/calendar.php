<style>
	.draggable { width: 100px; height: 20px; padding: 0em; float: left; margin: 10px; }
	.draggable p { margin: 0px; }
	.droppable { width: 100px; float: left; margin: 2px; }
	.show_status {
		font-size: 10px;
		color: red;
		font-weight: bold;
	}
	.class-room {
		background-color: #f0b67f;
	}
	.class-type {
		background-color: #F2CCC3;
	}
	.teacher {
		background-color: #d6d1b1;
	}
	.student {
		background-color: #c7efcf;
	}
	.ui-state-target {
		border: 1px solid #000;
		background-color: #fff;
		font-weight: bold;
	}
	.ui-state-hover {
		border: 1px solid red;
		background-color: #fff;
	}
</style>

<script>

var schedule_ids = [1,2,3,4,5,6,7,8,9,10];
var days_list = {
	'2015-08-30' : ['2015-08-30', '2015-08-31', '2015-09-01', '2015-09-02', '2015-09-03', '2015-09-04', '2015-09-05']
};
(function($){$(function() {
	$( ".draggable" ).draggable({ revert: "valid" });

	// single
	$( ".droppable" ).droppable({
		activeClass: "ui-state-target",
		hoverClass: "ui-state-hover",
		drop: function( event, ui ) {
			var to_id   = $( this ).context.id;
			var from_id = ui.draggable.context.id;
			update_box(from_id, to_id);
		}
	});

	// for day
	$( ".droppable" ).droppable({
		activeClass: "ui-state-target",
		hoverClass: "ui-state-hover",
		drop: function( event, ui ) {
			var to_id   = $( this ).context.id;
			var from_id = ui.draggable.context.id;
			var change_target = to_id.split('_')[0];
			
			if (change_target == "row") {
				update_box_row(from_id, to_id);
			} else if (change_target == "col") {
				update_box_col(from_id, to_id);
			} else {
				update_box_single(from_id, to_id);
			}
			
		}
	});

	// Update to Col
	function update_box_col(from_id, to_id) {
		var from_class_key = from_id.split('_')[0];
		var ymd            = to_id.split('_')[1];
		for ( var i=0; i < schedule_ids.length; i++ ) {
			var to_id = schedule_ids[i] + "_" + ymd + "_" + from_class_key;
			update_box_single(from_id, to_id);
		}
	}

	// Update to Row
	function update_box_row(from_id, to_id) {
		var from_class_key = from_id.split('_')[0];
		var ymd            = to_id.split('_')[1];
		var schedule_id    = to_id.split('_')[2];
		for ( var i=0; i < days_list[ymd].length; i++ ) {
			var to_id = schedule_id + "_" + days_list[ymd][i] + "_" + from_class_key;
			update_box_single(from_id, to_id);
		}
	}
	
	// for class_schedule
	function update_box_single(from_id, to_id) {

		var fromDom = $("#" + from_id);
		var toDom   = $("#" + to_id);

		var class_name_draggable = fromDom[0].id.split( '_' )[0];
		var class_name_droppable = toDom[0].id.split( '_' )[2];
		if (class_name_draggable != class_name_droppable) { return; }
		
		var titleDom = $('<span>' + fromDom[0].innerText + '</span>');
		var statusDom = $('<span class="show_status">更新</span>');
		
		toDom.find( "p" ).html('');
		toDom.find( "p" ).append(titleDom);
		toDom.find( "p" ).append(statusDom);
		statusDom.fadeOut(5000);
	}

	
});})(jQuery);






</script>

<div id="class-room_34" class="draggable class-room">
	<p>cube-01</p>
</div>
<div id="class-room_33"  class="draggable class-room">
	<p>cube-02</p>
</div>

<div id="class-type_34"  class="draggable class-type">
	<p>Man-to-Man</p>
</div>

<?php 

$cal_data = array(
	// week
	"2015-08-30" => array(
		"1" => array(
			"2015-08-30" => array(
				"class-room" => 22,
				"class-type" => 34,
				"student"    => "tanaka<br/>masaru",
				"teacher"    => array(4, 5)
			),
			"2015-08-31" => array(
				"class-room" => 25,
				"class-type" => 33,
				"student"    => array(2, 3),
				"teacher"    => array(4, 5)
			),
			"2015-09-01" => array(
				"class-room" => 25,
				"class-type" => 33,
				"student"    => array(2, 3),
				"teacher"    => array(4, 5)
			),
			"2015-09-02" => array(
			),
			"2015-09-03" => array(
			),
			"2015-09-04" => array(
						
			),
			"2015-09-05" => array(
			)
		),
		"2" => array(
			"2015-08-30" => array(
					"class-room" => 22,
					"class-type" => 34,
					"student"    => "tanaka<br/>masaru",
					"teacher"    => array(4, 5)
			),
			"2015-08-31" => array(
					"class-room" => 25,
					"class-type" => 33,
					"student"    => array(2, 3),
					"teacher"    => array(4, 5)
			),
			"2015-09-01" => array(
					"class-room" => 25,
					"class-type" => 33,
					"student"    => array(2, 3),
					"teacher"    => array(4, 5)
			),
			"2015-09-02" => array(
			),
			"2015-09-03" => array(
			),
			"2015-09-04" => array(
			
			),
			"2015-09-05" => array(
			)
		),
		"3" => array(
			"2015-08-30" => array(
					"class-room" => 22,
					"class-type" => 34,
					"student"    => "tanaka<br/>masaru",
					"teacher"    => array(4, 5)
			),
			"2015-08-31" => array(
					"class-room" => 25,
					"class-type" => 33,
					"student"    => array(2, 3),
					"teacher"    => array(4, 5)
			),
			"2015-09-01" => array(
					"class-room" => 25,
					"class-type" => 33,
					"student"    => array(2, 3),
					"teacher"    => array(4, 5)
			),
			"2015-09-02" => array(
			),
			"2015-09-03" => array(
			),
			"2015-09-04" => array(
			),
			"2015-09-05" => array(
			)
		),
		"4" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		),
		"5" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		),
		"6" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		),
		"7" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		),
		"8" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		),
		"9" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		),
		"10" => array(
				"2015-08-30" => array(
						"class-room" => 22,
						"class-type" => 34,
						"student"    => "tanaka<br/>masaru",
						"teacher"    => array(4, 5)
				),
				"2015-08-31" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-01" => array(
						"class-room" => 25,
						"class-type" => 33,
						"student"    => array(2, 3),
						"teacher"    => array(4, 5)
				),
				"2015-09-02" => array(
				),
				"2015-09-03" => array(
				),
				"2015-09-04" => array(
				),
				"2015-09-05" => array(
				)
		)
	)
);
?>

<?php 
$week_title_key = array(
	"+ 0day" => "(日)",
	"+ 1day" => "(月)",
	"+ 2day" => "(火)",
	"+ 3day" => "(水)",
	"+ 4day" => "(木)",
	"+ 5day" => "(金)",
	"+ 6day" => "(土)",
);

?>

<?php foreach ($cal_data as $week_key => $class_schedule_data) { ?>
	<?php 
	$week_stt_time = strtotime($week_key);
	?>
	<table class="wp-list-table widefat striped">
		<tr>
			<th rowspan="11"></th>
			<th>コマ</th>
			<?php foreach ($week_title_key as $format => $whatday) { ?>
				<?php $ymd = date("Y-m-d", strtotime($format, $week_stt_time)); ?>
				<th><div id="col_<?php echo $ymd; ?>" class="droppable" ><?php echo $ymd . " " . $whatday; ?></div></th>
			<?php }?>
		</tr>
		<?php foreach ($class_schedule_data as $class_schedule => $class_date_data) { ?>
		<tr>
			<td>
				<div id="row_<?php echo $week_key; ?>_<?php echo $class_schedule; ?>"  class="droppable" >
				<?php echo $class_schedule; ?>
				</div>
			</td>
			<?php foreach ($class_date_data as $ymd => $class_data) { ?>
				<?php $box_prefix = "{$class_schedule}_{$ymd}"; ?>
				<td>
					<div id="<?php echo "{$box_prefix}_class-room"?>" class="droppable class-room">
						<p><?php echo $class_data['class-room']; ?></p>
					</div>
					<div id="<?php echo "{$box_prefix}_class-type"?>" class="droppable class-type">
						<p><?php echo $class_data['class-type']; ?></p>
					</div>
					<div id="<?php echo "{$box_prefix}_teacher"?>" class="droppable teacher">
						<p><?php echo $class_data['student']; ?></p>
					</div>
					<div id="<?php echo "{$box_prefix}_student"?>" class="droppable student">
						<p><?php echo $class_data['teacher']; ?></p>
					</div>
				</td>
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
<?php } ?>


