<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style>
	.draggable { width: 100px; height: 20px; padding: 0em; float: left; margin: 10px; }
	.draggable p { margin: 0px; }
	.droppable { width: 100px; float: left; margin: 2px; }
	.show_status {
		font-size: 10px;
		color: red;
		font-weight: bold;
	}
	.class_room {
		background-color: #f0b67f;
	}
	.class_type {
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
	.update-nag {
		display : none;
	}
	
	.hasDatepicker {
		width: 90px;
	}
	
</style>
<?php 
function json_safe_encode($data){
	return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
?>
<script>
var schedule_ids = '<?php echo json_safe_encode($schedule_keys); ?>';
schedule_ids     = JSON.parse(schedule_ids);

var days_list = '<?php echo json_safe_encode($days_list); ?>';
days_list     = JSON.parse(days_list);

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
			var change_target = to_id.split('--')[0];
			
			if (change_target == "row") {
				update_box_row(from_id, to_id);
			} else if (change_target == "col") {
				update_box_col(from_id, to_id);
			} else {
				update_box_single(from_id, to_id);
			}
			
		}
	});

	$(".box_del").click(del_box);

	// Update to Col
	function update_box_col(from_id, to_id) {
		var from_class_key = from_id.split('--')[0];
		var ymd            = to_id.split('--')[1];
		for ( var i=0; i < schedule_ids.length; i++ ) {
			var to_id = schedule_ids[i] + '--' + ymd + '--' + from_class_key;
			update_box_single(from_id, to_id);
		}
	}

	// Update to Row
	function update_box_row(from_id, to_id) {
		var from_class_key = from_id.split('--')[0];
		var ymd            = to_id.split('--')[1];
		var schedule_id    = to_id.split('--')[2];
		for ( var i=0; i < days_list[ymd].length; i++ ) {
			var to_id = schedule_id + '--' + days_list[ymd][i] + '--' + from_class_key;
			update_box_single(from_id, to_id);
		}
	}
	
	// for class_schedule
	function update_box_single(from_id, to_id) {

		var fromDom = $("#" + from_id);
		var toDom   = $("#" + to_id);

		var class_name_draggable = from_id.split( '--' )[0];
		var class_name_droppable = to_id.split( '--' )[2];
		if (class_name_draggable != class_name_droppable) { return; }

		//console.log(fromDom[0].id.split( '_' ));
		var class_schedule_pid = to_id.split( '--' )[0];
		
		var ymd                = to_id.split( '--' )[1];
		var key                = from_id.split( '--' )[0];
		var val                = from_id.split( '--' )[1];
		var arg = "?action=update_reservation";
			arg += "&ymd=" + ymd;
			arg += "&class_schedule_pid=" + class_schedule_pid;
			arg += "&" + key + "=" + val;
			console.log(arg);
		$.ajax({
			url: "/wp-admin/admin-ajax.php" + arg
		}).done(function(data, status, xhr) {
			var box_id = 'del--' + class_schedule_pid + '--' + ymd + '--' + key + '--' + val;
			
			var del_link = $('<a>x</a>');
			del_link.attr('id', box_id);
			del_link.click(del_box);

			var del_span = $('<span></span>');
			del_span.append(del_link);
			
			var titleDom = $('<span class="block">' + fromDom[0].innerText + '</span>');
			titleDom.append(del_span);
			
			var statusDom = $('<span class="show_status">更新</span>');
			// if teacher or student
			if (class_name_draggable == "class_room" 
				|| class_name_draggable == "class_type" ) {
				toDom.find( "p" ).html('');
			}
			toDom.find( "p" ).append(titleDom);
			toDom.find( "p" ).append(statusDom);
			statusDom.fadeOut(5000);
			
			
		}).fail(function(xhr, status, error) {
			alert("通信エラーが発生しました。しばらく経って再度処理を行ってください。");
		}).always(function(arg1, status, arg2) {
		});
	}

	function del_box (e){
		var target_id   = $( this ).context.id;

		var schedule_id = target_id.split('--')[1];
		var ymd         = target_id.split('--')[2];
		var key         = target_id.split('--')[3];
		var val         = target_id.split('--')[4];
		
		var arg = "?action=delete_reservation";
		arg += "&ymd=" + ymd;
		arg += "&class_schedule_pid=" + schedule_id;
		arg += "&" + key + "=" + val;
		console.log(arg);
		$.ajax({
			url: "/wp-admin/admin-ajax.php" + arg
		}).done(function(data, status, xhr) {
			var targetDom = $("#" + target_id).parent().parent();
			var parentDom = $("#" + target_id).parent().parent().parent();
			targetDom.remove();
			var statusDom = $('<span class="show_status">削除</span>');
			parentDom.append(statusDom);
			statusDom.fadeOut(5000);
		}).fail(function(xhr, status, error) {
			alert("通信エラーが発生しました。しばらく経って再度処理を行ってください。");
		}).always(function(arg1, status, arg2) {
		});
	}
	

	$(function() {
		$( "#from" ).datepicker({
			dateFormat: "yy-mm-dd",
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 3,
			onClose: function( selectedDate ) {
				$( "#to" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( "#to" ).datepicker({
			dateFormat: "yy-mm-dd",
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 3,
			onClose: function( selectedDate ) {
				$( "#from" ).datepicker( "option", "maxDate", selectedDate );
			}
		});
	});

	
	
});})(jQuery);






</script>



<div id="search_form">
	<form action="" method="post">
		　＃表示タイプ：
		<select name="post_type">
			<option value="student">生徒別</option>
			<option value="teacher">講師別</option>
			<option value="class_room">教室別</option>
			<option value="class_type">授業別</option>
		</select>
		
		　＃絞り込み：
		<select name="post_id">
		</select>
		
		　＃日付：
		<input type="text" id="from" name="stt" value="<?php echo $_REQUEST["stt"];?>">
		<label for="to">〜</label>
		<input type="text" id="to" name="end" value="<?php echo $_REQUEST["end"];?>">
		
		<input type="submit" value="更新" />
	</form>
</div>


<div id="class_room--22" class="draggable class_room">
	<p>cube-01</p>
</div>
<div id="class_room--23"  class="draggable class_room">
	<p>cube-02</p>
</div>

<div id="class_type--30"  class="draggable class_type">
	<p>UE</p>
</div>
<div id="class_type--31"  class="draggable class_type">
	<p>VOA</p>
</div>

<div id="teacher--4"  class="draggable teacher">
	<p>teacher01</p>
</div>
<div id="teacher--5"  class="draggable teacher">
	<p>teacher02</p>
</div>

<div id="student--2"  class="draggable student">
	<p>student01</p>
</div>
<div id="student--3"  class="draggable student">
	<p>student02</p>
</div>






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
				<th><div id="col--<?php echo $ymd; ?>" class="droppable" ><?php echo $ymd . " " . $whatday; ?></div></th>
			<?php }?>
		</tr>
		<?php foreach ($class_schedule_data as $class_schedule => $class_date_data) { ?>
		<tr>
			<td>
				<div id="row--<?php echo $week_key; ?>--<?php echo $class_schedule; ?>"  class="droppable" >
				<?php
					echo $mt_class_schedule[$class_schedule]["post_title"] 
					."<br/>  (" .$mt_class_schedule[$class_schedule]["stt"]
					."〜  " .$mt_class_schedule[$class_schedule]["end"] . ")";
				?>
				</div>
			</td>
			<?php foreach ($class_date_data as $ymd => $class_data) { ?>
				<?php $box_prefix = "{$class_schedule}--{$ymd}"; ?>
				<td>
					<div id="<?php echo "{$box_prefix}--class_room"?>" class="droppable class_room">
						<p>
							<span class="block"><?php echo $mt_class_room[$class_data['class_room']]['post_title']; ?>
								<?php if ($mt_class_room[$class_data['class_room']]['post_title']) {?>
								<span><a class="box_del" id="<?php echo "del--{$box_prefix}--class_room--".$class_data['class_room'];?>">x</a></span>
								<?php } ?>
							</span>
						</p>
					</div>
					<div id="<?php echo "{$box_prefix}--class_type"?>" class="droppable class_type">
						<p>
							<span class="block"><?php echo $mt_class_type[$class_data['class_type']]['post_title']; ?>
								<?php if ($mt_class_type[$class_data['class_type']]['post_title']) {?>
								<span><a class="box_del" id="<?php echo "del--{$box_prefix}--class_type--".$class_data['class_type'];?>">x</a></span>
								<?php } ?>
							</span>
						</p>
					</div>
					<div id="<?php echo "{$box_prefix}--teacher"?>" class="droppable teacher">
						<p>
						<?php 
						foreach ((array)$class_data['teacher'] as $id) {
							?>
							<span class="block"><?php echo $mt_teacher[$id]['display_name']; ?>
								<span><a class="box_del" id="<?php echo "del--{$box_prefix}--teacher--".$id;?>">x</a></span>
							</span>
							<?php 
						}
						?>
						</p>
					</div>
					<div id="<?php echo "{$box_prefix}--student"?>" class="droppable student">
						<p>
						<?php 
						foreach ((array)$class_data['student'] as $id) {
						?>
							<span class="block"><?php echo $mt_student[$id]['display_name']; ?>
								<span><a class="box_del" id="<?php echo "del--{$box_prefix}--student--".$id;?>">x</a></span>
							</span>
							<?php 
						}
						?>
						</p>
					</div>
				</td>
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
<?php } ?>


