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
	
	#regist_box table th {
		text-align: left;
	}
	#regist_box table td {
		border: solid 1px #666;
	}
	
</style>


<?php 
function json_safe_encode($data){
	return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
?>
<script>

/*
 * vars 
 */

 // shcelude_ids
var schedule_ids = '<?php echo json_safe_encode($schedule_keys); ?>';
schedule_ids     = JSON.parse(schedule_ids);

// days_list
var days_list = '<?php echo json_safe_encode($days_list); ?>';
days_list     = JSON.parse(days_list);

// post_type
var post_type = '<?php echo $post_type?>';

// post_id
var post_id   = '<?php echo $post_id?>';


(function($){$(function() {


	$(window).load(function(){

		// only student can regst and delete
		if (post_type == "student") {
			$("#regist_box").show();
			$("#regist_box_not").hide();
		} else {
			$("#regist_box").hide();
			$("#regist_box_not").show();
		}
	
		$("#post_type_select").trigger("change");

		get_post_type_choices_by_ajax("class_room", "#class_room_select");
		get_post_type_choices_by_ajax("class_type", "#class_type_select");
		get_post_type_choices_by_ajax("teacher",    "#teacher_select");
	});

	
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
	$(".make_box").click(make_regst_box);
	

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
			arg += "&student_id=" + post_id;
			arg += "&" + key + "=" + val;
			console.log(arg);
		$.ajax({
			url: "/wp-admin/admin-ajax.php" + arg,
			dataType: 'json'
		}).done(function(data, status, xhr) {
			
			if (data["status"] == "ok") { 
				var box_id = 'del--' + class_schedule_pid + '--' + ymd + '--' + key + '--' + val;
				var del_link = $('<a>x</a>');
				del_link.attr('id', box_id);
				del_link.attr('class', 'box_del');
				del_link.click(del_box);
	
				var del_span = $('<span></span>');
				del_span.append(del_link);
				
				var titleDom = $('<span class="block">' + fromDom[0].innerText + '</span>');
				titleDom.append(del_span);
				
				// if teacher or student
				if (class_name_draggable == "class_room" 
					|| class_name_draggable == "class_type" ) {
					toDom.find( "p" ).html('');
				}
				toDom.find( "p" ).append(titleDom);
				var statusDom = $('<span class="show_status">◯ 更新</span>');
			
			} else if (data["status"] == "duplicate") {
				var statusDom = $('<span class="show_status">Ｘ 重複</span>');
			} else if (data["status"] == "error") {
				var statusDom = $('<span class="show_status">Ｘ '+ data["mess"] +'</span>');
			}
			
			toDom.find( "p" ).append(statusDom);
			statusDom.fadeOut(10000);
			
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
		arg += "&" + post_type + "=" + post_id;
		arg += "&class_schedule_pid=" + schedule_id;
		arg += "&" + key + "=" + val;
		console.log(arg);
		$.ajax({
			url: "/wp-admin/admin-ajax.php" + arg,
			dataType: 'json'
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

	/*
	 * post type
	 */

	// undisplay selected post_type class
	$("." + post_type).css("display", "none");
	
	// when change select "post_type"
	$("#post_type_select").change( function() {
		var post_type = $(this).val();
		get_post_type_choices_by_ajax(post_type, "#choices_select");
	});
	$("#from").change( function() {
		var post_type = $("#post_type_select").val();
		get_post_type_choices_by_ajax(post_type);
	});
	$("#to").change( function() {
		var post_type = $("#post_type_select").val();
		get_post_type_choices_by_ajax(post_type);
	});

	// Get Choices by ajax
	function get_post_type_choices_by_ajax (post_type, target) {

		var stt_date = $("#from").val();
		var end_date = $("#to").val();
		
		var arg = "?action=get_choices";
		arg += "&stt_date=" + stt_date;
		arg += "&end_date=" + end_date;
		arg += "&post_type=" + post_type;
		console.log(arg);
		$.ajax({
			url: "/wp-admin/admin-ajax.php" + arg,
			dataType: 'json'
		}).done(function(data, status, xhr) {
			if (data["status"] != "ok") { return; }
			$(target).html("");
			for(key in data["res"]){
				var selected = "";
				if (key == post_id) {
					selected = "selected";
					if (target == "#choices_select") {
						$("#shown_target").html(data["res"][key]["display_name"]);
					}
				}
				var option = $('<option value="' + key + '" ' + selected + '>' + data["res"][key]["display_name"] + '</option>');
				$(target).append(option);
			}
		}).fail(function(xhr, status, error) {
			alert("通信エラーが発生しました。しばらく経って再度処理を行ってください。");
		}).always(function(arg1, status, arg2) {
		});
	}

	// make regst_box
	function make_regst_box(e) {
		var id   = $( this ).context.id;
		console.log(id);
		var post_type = id.split('--')[1];
		console.log(post_type);
		var selected_id = "#" + post_type + "_select option:selected";
		var post_id = $(selected_id).val();
		var text    = $(selected_id).text();
		console.log(post_id);
		var divDom = $('<div id="' + post_type + '--' + post_id + '" class="draggable ' + post_type + '">');
		console.log(divDom);
		var pDom = $('<p>' + text + '</p>')
		divDom.append(pDom);
		divDom.draggable({ revert: "valid" });
		$('#' + post_type +'_box_space').append(divDom);
	}
	
});})(jQuery);
</script>


<div id="search_form">
	<form action="" method="get">
		　＃日付：
		<input type="text" id="from" name="stt" value="<?php echo $_REQUEST["stt"];?>">
		<label for="to">〜</label>
		<input type="text" id="to" name="end" value="<?php echo $_REQUEST["end"];?>">
		
		　＃表示タイプ：
		<select name="post_type" id="post_type_select">
			<option value="student" <?php if ($post_type == "student") { echo "selected"; }?>><?php echo $p_typ_list["student"];?></option>
			<option value="teacher" <?php if ($post_type == "teacher") { echo "selected"; }?>><?php echo $p_typ_list["teacher"];?></option>
			<option value="class_room" <?php if ($post_type == "class_room") { echo "selected"; }?>><?php echo $p_typ_list["class_room"];?></option>
		</select>
		
		　＃絞り込み：
		<select name="post_id" id="choices_select">
		</select>
		
		<input type="submit" value="更新" />
		<input type="hidden" name="page" value="calendar" />
	</form>
</div>
<div>
表示タイプ：[<b><?php echo $p_typ_list[$post_type];?></b>]　　表示中：[<b><span id="shown_target"></span></b>]
</div>


<div id="regist_box">
<table>
	<tr>
		<th>
			教室：<select id="class_room_select"></select><button id="make_box--class_room" class="make_box">box表示</button>
		</th>
		<th>
			講座：<select id="class_type_select"></select><button id="make_box--class_type" class="make_box">box表示</button>
		</th>
		<th>
			講師：<select id="teacher_select"></select><button id="make_box--teacher" class="make_box">box表示</button>
		</th>
	</tr>
	<tr>
		<td>
			<div id="class_room_box_space"></div>
		</td>
		<td>
			<div id="class_type_box_space"></div>
		</td>
		<td>
			<div id="teacher_box_space"></div>
		</td>
	</tr>
</table>
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


