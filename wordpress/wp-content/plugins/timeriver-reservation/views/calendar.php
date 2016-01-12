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
		border: 2px solid red;
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
	
	.row_ctl_from {
		width: 20px;
		height: 200px;
		background-color: #8fbc8f;
		margin: 5px;
	}
	.row_ctl_to {
		width: 20px;
		height: 200px;
		background-color: #b0c4de;
		margin: 5px;
	}
	
	/* styling for printing by aaron */
	.left-txt {
		text-align: left;
	}
	.right-txt {
		text-align: right;
	}

	.rgb-blue-txt {
		color: rgb(51, 51, 153);
	}

	.rgb-blue-bg {
		background-color: rgb(51, 204, 204);
		-webkit-print-color-adjust: exact;
	}

	.rgb-gray-bg {
		background-color: rgb(192, 192, 192);
		-webkit-print-color-adjust: exact;
	}

	.rgb-red-txt {
		color: rgb(255, 0, 0);
	}

	.underline-txt {
		text-decoration: underline;
	}

	.bold-txt {
		font-weight: bold;
	}

	.fnt-8-txt {
		font-size: 8px;
	}

	.fnt-12-txt {
		font-size: 12px;
	}

	.fnt-24-txt {
		font-size: 24px;
	}

	.no-border-top {
		border-top: none !important;
	}

	.no-border-bottom {
		border-bottom: none !important;
	}

	#print_view_container, #teacher_printview {
		position: fixed;
		z-index: 500000;
		width: 100%;
		height: 100%;
		margin: auto;
		background-color: rgb(254,254,254);
		-webkit-print-color-adjust: exact;
		left: 0;
		top: 0;
		display: none;
	}

	.print_view {
		width: 650px;
		margin: auto;
		font-size: 11px;
		border-collapse: collapse;
		text-align: center;
		margin-bottom: 3px;
	}

	.print_view td {
		white-space: nowrap;
		height: 16px;
		width: 174px;
		border-top: 1px solid;
		border-right: 1px solid;
		border-bottom: 1px solid;
		border-left: 1px solid;
		border-color: #000;
		padding: 0 5px;
		margin: 0;
	}
	
	#buddyTeacher, #buddyTeacher-2 {
		font-size: 10px;
	}
	
	#studentName, #studentName-2 {
		font-size: 15px;
	}
	
	#teacherPrint {
		width: 100%;
		height: auto;
		padding: 0;
		border-collapse: collapse !important;
	}

	#teacherPrint td {
		max-width: 58px;
		min-width: 58px;
		text-align: left;
		border: 1px solid #000;
		padding: 0 1px;
		margin: 0;
		font-size: 10px;
	}
	
	.row-hide {
		display: none;
	}
	
	.widefat td,
	.widefat th {
		padding: 8px 0;
	}

	@media print {
		#printNextPage {
			display: none;
		}
	
		#make_box--teacher {
			z-index: 0;
			display: none;
		}
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

// tmpClassIds
var tmpClassIds = "";

//colToUpdate
var colToUpdate = "";

//allowClassInc
var allowClassInc = true;

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
			} else if (change_target == "row_ctl") {
				copy_week_by_ajax(from_id, to_id);
			} else {
				update_box_single(from_id, to_id);
			}
			
		}
	});

	$(".box_del").click(del_box);
	$(".make_box").click(make_regst_box);
	
	// update row_ctl
	function update_row_ctl(from_id, to_id) {
		console.log(from_id);
		console.log(to_id);
	}
	
	// Update to Col
	function update_box_col(from_id, to_id) {
		var from_class_key = from_id.split('--')[0];
		var time = to_id.split('--')[1];
// 		var ymd            = to_id.split('--')[1];

		/* switch date & time  */
		var index_exist = false;
		for ( var i=0; i < date_array.length; i++ ) {
			var to_id = time + '--' + date_array[i] + '--' + from_class_key;
			//check if class already exist
			for (var index in incClassList) {
				if (from_id.split("--")[1] == index) {
					index_exist = true;
					break;
				}
			}
		
			update_box_single(from_id, to_id);
		}
		if (!index_exist) {
			incClassList[from_id.split("--")[1]] = 0;
		} else {
			++incClassList[from_id.split("--")[1]];
			$(".increment-"+from_id.split("--")[1]).css("display", "inline");
		}
	
		/* original code*/
// 		for ( var i=0; i < schedule_ids.length; i++ ) {
// 			console.log("schedule id: "+schedule_ids[i]+"\n");
// 			var to_id = schedule_ids[i] + '--' + ymd + '--' + from_class_key;
// 			update_box_single(from_id, to_id);
// 		}
	}

	// Update to Row
	function update_box_row(from_id, to_id) {
		var from_class_key = from_id.split('--')[0];
		var ymd            = to_id.split('--')[1];
// 		var schedule_id    = to_id.split('--')[2];

		/*switch date & time*/
		for ( var i=0; i < schedule_ids.length; i++ ) {
			var to_id = schedule_ids[i] + '--' + ymd + '--' + from_class_key;
			update_box_single(from_id, to_id);
		}
	
		/*Original Code*/
// 		for ( var i=0; i < days_list[ymd].length; i++ ) {
// 			var to_id = schedule_id + '--' + days_list[ymd][i] + '--' + from_class_key;
// 			update_box_single(from_id, to_id);
// 		}
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
			update_box_info(data);
		}).fail(function(xhr, status, error) {
			alert("通信エラーが発生しました。しばらく経って再度処理を行ってください。");
		}).always(function(arg1, status, arg2) {
		});
	}

	/*
	*
	*/
	function copy_week_by_ajax(from_id, to_id) {
		var from_ymd = from_id.split('--')[1];
		var to_ymd   = to_id.split('--')[1];
		var arg = "?action=copy_week";
		arg += "&from_ymd=" + from_ymd;
		arg += "&to_ymd=" + to_ymd;
		arg += "&student_id=" + post_id;
		$.ajax({
			url: "/wp-admin/admin-ajax.php" + arg,
			dataType: 'json'
		}).done(function(data, status, xhr) {
			if (data["status"] != "ok") {
				alert("処理が正常に完了しませんでした。ページを更新して最新の情報を確認ください。");
			}
			for ( var id in data["result"]) {
				update_box_info(data["result"][id]);
			}
		}).fail(function(xhr, status, error) {
			alert("通信エラーが発生しました。しばらく経って再度処理を行ってください。");
		}).always(function(arg1, status, arg2) {
		});
	}

	/*
	*  update box info
	*/
	function update_box_info(data) {
		console.log(data["to_id"]);
		
		var toDom = $("#" + data["to_id"]);
		if (data["status"] == "ok") { 
			// delete
			var box_id = 'del--' + data["to_id"] + '--' + data["post_id"];
			var del_link = $('<a>x</a>');
			del_link.attr('id', box_id);
			del_link.attr('class', 'box_del');
			del_link.click(del_box);
			var del_span = $('<span></span>');
			del_span.append(del_link);
			//for same class incrementation
			var box_text = data["box_text"];
			//checks if class id is already in incClassList
			for (var index in incClassList) {
				if (index == data["post_id"] && incClassList[index] > 0) {
					//creates the span for increment number for class & display it
					var spanIncNumber = '<span class="increment-'+data["post_id"]+'"> '+incNumber[data["to_id"].split('--')[0]]+' </span>';
					break;
				} else {
					//create the span for increment number for class but hidden
					var spanIncNumber = '<span class="increment-'+data["post_id"]+'" style="display: none;"> '+incNumber[data["to_id"].split('--')[0]]+' </span>';
				}
			}
			
			//end for same class incrementation
			var titleDom = $('<span class="block">' + box_text + spanIncNumber +'</span>');
			titleDom.append(del_span);
			// if teacher or student
			if (data["post_type"] == "class_room" 
				|| data["post_type"] == "class_type" ) {
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
	}
	
	/*
	*  del
	*/
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
			var statusDom = $('<span class="show_status">Delete</span>');
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
			console.log(data["res"]);
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

	/* 
	* handling & processing for printing here
	* by aaron
	*/

	//set Print Schedule date
	function setSchedDate(strDate, endDate, booleanForSecondData) {
		var mText = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", 
		"SEP", "OCT", "NOV", "DEC"];
		strDate = Date.parse(strDate);
		strDate = new Date(strDate);
		endDate = Date.parse(endDate);
		endDate = new Date(endDate);
		var secondData = "";
		var nxtMonth = "";

		if (booleanForSecondData == true) {
			secondData = "-2";
		}

		if (strDate.getDate() > endDate.getDate() && strDate.getMonth() < 11) {
			nxtMonth = mText[strDate.getMonth() + 1];
		} else {
			nxtMonth = mText[0];
		}

		$("#schedDate" + secondData).text(mText[strDate.getMonth()] + " " + strDate.getDate() +
		" TO " + nxtMonth + " " + endDate.getDate() + ", '" + endDate.getYear().toString().slice(-2) +
		" WEEKLY SCHEDULE");
	}

	//get single day class schedule
	function getDaySchedule(classSched, booleanForSecondData) {
		console.log("get day schedule: ");

		var sched = [], y = 0, x = 0, stop = false;
		var cubeNum =  0, budteach = "";

		//get schedule for one day
		for (var date in classSched) {
			for (var time in classSched[date]) {
				var idArr = classSched[date][time];
				idArr["class-room"] = $("#"+idArr["class-room"]+" .block").text().match(/(.*[^\sx])/);
				idArr["class-type"] = $("#"+idArr["class-type"]+" .block").text().match(/(.*[^\sx])/);
				idArr["teacher"] = $("#"+idArr["teacher"]+" .block").text().match(/(.*[^\sx])/);

				//checks if data is not null && get data while removing the unecessary space and character
				if (idArr["class-room"] != null) {
					idArr["class-room"] = idArr["class-room"][0];
				}
				if (idArr["class-type"] != null) {
					idArr["class-type"] = idArr["class-type"][0];
				}
				if (idArr["teacher"] != null) {
					idArr["teacher"] = idArr["teacher"][0];
				}
				//check if current day schedule has class or not empty
				if (idArr["class-room"] != null && idArr["class-room"].match(/[a-zA-Z]/) != null) {
					stop = true;
				}

				//get cubicle number
				if (idArr["class-room"] != null && idArr["class-room"].indexOf("Cubicle") > -1 && cubeNum == 0) {
					cubeNum = idArr["class-room"].replace(/[a-zA-Z]*\s/,"");	
				}
				//get buddy teacher
				var tmpStr = idArr["class-type"];
				//idArr["class-type"] == "REVIEW" || idArr["class-type"] == "REVIEW MM"
				if (tmpStr != null) {
					if (tmpStr.toLowerCase().indexOf("review") > -1) {
						budteach = idArr["teacher"];
					}
				}

				if (idArr["class-room"] != null && idArr["class-type"] != null && idArr["teacher"] != null) {
					sched[y++] = idArr;
				}
			}
			console.log("stop: "+stop);
			//if stop is true, it will stop looking for a class schedule
			if (stop) {
				break;
			} else {
				y = 0;
				sched = new Array();
			}
		}

		if (booleanForSecondData != true) {
			console.log("get day schedule not que:");
			console.log(sched);
			$("#cubicleNum").text(cubeNum);
			$("#buddyTeacher").text(budteach);
		} else {
			var tmpObj = {};
			tmpObj["cubicle_number"] = cubeNum;
			tmpObj["buddy_teacher"] = budteach;
			localStorage.tmpObj = JSON.stringify(tmpObj);
		}

		return sched;
	}

	//handles the setting of data for printing
	function setPrintContent(sched, booleanForSecondData) {
		//assigns value to print view table
		var mmc = 0, gcc = 0, studentId = $("#choices_select").val();
		if (booleanForSecondData != true) {
			var classStartDate = new Date($("#from").val());
			var startDate = new Date(student_meta[studentId]['start-date']);
			var endDate = new Date(student_meta[studentId]['end-date']);
		} else {
			var schedData = JSON.parse(localStorage.schedData);
			var classStartDate = new Date();
			var startDate = new Date(schedData["meta"]['start-date']);
			var endDate = new Date(schedData["meta"]['end-date']);
		}
		var monthString = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
		var msDay =  86400000;
		var secondData = "";

		if (booleanForSecondData) {
			secondData = "-2";
		}

		$("#stdStartDate" + secondData).text(startDate.getDate() + " " + monthString[startDate.getMonth()] + 
		" " + startDate.getFullYear().toString().slice(-2));
		$("#stdEndDate" + secondData).text(endDate.getDate() + " " + monthString[endDate.getMonth()] + 
		" " + endDate.getFullYear().toString().slice(-2));

		if ( (((classStartDate.getTime() - startDate.getTime()) / msDay) + startDate.getDay()) <= 7 ) {
			$("#stdType" + secondData).text("NEW STUDENT");
		} else {
			$("#stdType" + secondData).text("OLD STUDENT");
		}

		var y = 1, add = 1;
		if (sched[0] != null) {
			y = 0;
			add = 2;
		}

		var tmpStrClass = "", classOccurence = 0;
		while( y < sched.length ) {
			if (sched[y]["class-type"] != null && sched[y]["class-type"].indexOf(" GC") > -1) {
				++gcc;
			} else {
				++mmc;
			}

			if (sched[y]["class-type"] != null) {
				$("#class-"+(y+add)+"-type" + secondData).text(sched[y]["class-type"]);
			}

			if (sched[y]["teacher"] != null) {
				$("#class-"+(y+add)+"-teacher" + secondData).text(sched[y]["teacher"]);
			}

			if (sched[y]["class-room"] != null && sched[y]["class-room"].indexOf("Cubicle") == -1) {
				$("#class-"+(y+add)+"-gc-room" + secondData).text(sched[y]["class-room"]);
			}

			y++;
		}

		var totalWeeks = ((endDate.getTime() - startDate.getTime()) / msDay) / 7;
		var classCount = "<span class='rgb-red-txt'> "+mmc+" MM "+gcc+" GC </span> )";
		if (booleanForSecondData != true) {
			var studName = $("#choices_select option:selected").text();
			$("#studentName").text(studName + " ( " + Math.round(totalWeeks) + " WKS.").append(classCount);
		} else {
			var studName = schedData["student_name"];
			$("#studentName-2").text(studName + " ( " + Math.round(totalWeeks) + " WKS.").append(classCount);
			$("#cubicleNum-2").text(schedData["cubicle_number"]);
			$("#buddyTeacher-2").text(schedData["buddy_teacher"]);
		}
	}

	$("#printPreview").on("click", function() {
		$("#search_form").hide();
		$("#searchLabel").hide();
		$("#regist_box").hide();
		$(".wp-list-table").hide();
		setSchedDate($("#from").val(), $("#to").val(), false);
		/*
		*call function that gets single day class schedule
		*assign data to new variable sched
		*/

		var sched = getDaySchedule(class_sched, false);

		//calls the handler for data assigning in print view
		setPrintContent(sched, false);

		if (localStorage.getItem("schedData") != null) {
			var schedData = JSON.parse(localStorage.schedData);
			//var sched = getDaySchedule(schedData["class"], true);
			setSchedDate(schedData["schedule-start"], schedData["schedule-end"], true);
			setPrintContent(schedData["class"], true);
		}

		$("#print_view_container").css("display", "block");
		//console.log(sched);
		setTimeout(function() {
			window.print()
			$("#search_form").show();
			$("#searchLabel").show();
			$("#regist_box").show();
			$(".wp-list-table").show();
			$("#print_view_container").hide();
		}, 300);
	});

	$("#printQueue").on('click', function () {
		var tmpObj, student_id = $("#choices_select").val();
		//localStorage.removeItem("schedData");
		tmpObj = {};
		tmpObj["student_name"] = $("#choices_select option:selected").text();
		tmpObj["class"] = getDaySchedule(class_sched, true);
		tmpObj["meta"] = student_meta[student_id];
		tmpObj["schedule-start"] = $("#from").val();
		tmpObj["schedule-end"] = $("#to").val();
		localStorage.schedData = JSON.stringify(tmpObj);

		if (localStorage.tmpObj != null) {
			tmpObj = JSON.parse(localStorage.schedData);
			tmpObj["cubicle_number"] = JSON.parse(localStorage.tmpObj)["cubicle_number"];
			tmpObj["buddy_teacher"] = JSON.parse(localStorage.tmpObj)["buddy_teacher"];
			localStorage.schedData = JSON.stringify(tmpObj);
			localStorage.removeItem("tmpObj");
		}
	});

	$("#printTeacherSched").on('click', function() {
		localStorage.print = "teacher";
		location.reload();
	});

	$("#teacher_printview").css("display", "none");

	if ( localStorage.print == "teacher" ) {
		$("#search_form").hide();
		$("#searchLabel").hide();
		$("#regist_box").hide();
		$(".wp-list-table").hide();
		$("#print_view_container").hide();
	
		$("#teacher_printview").css("display", "block");
		window.print();
	
		localStorage.print = "null";

		//$("#printNextPage").css("display", "block");
	
		
	}

	$("#printNextPage").on('click', function() {
		$(".row-hide").show();
		$(".row-show").hide();

		window.print();
	});

	console.log("incClassList: ");
	console.log(incClassList);
	for (var index in incClassList) {
		if (incClassList[index] > 0) {
			$(".increment-"+index).css("display", "inline");
		}
	}

});})(jQuery);
</script>

<div id="search_form">
	<form action="" method="get">
		　＃DATE：
		<input type="text" id="from" name="stt" value="<?php echo $_REQUEST["stt"];?>">
		<label for="to">〜</label>
		<input type="text" id="to" name="end" value="<?php echo $_REQUEST["end"];?>">
		
		　＃ViewType：
		<select name="post_type" id="post_type_select">
			<option value="student" <?php if ($post_type == "student") { echo "selected"; }?>><?php echo $p_typ_list["student"];?></option>
			<option value="teacher" <?php if ($post_type == "teacher") { echo "selected"; }?>><?php echo $p_typ_list["teacher"];?></option>
			<option value="class_room" <?php if ($post_type == "class_room") { echo "selected"; }?>><?php echo $p_typ_list["class_room"];?></option>
		</select>
		
		　＃Select：
		<select name="post_id" id="choices_select">
		</select>
		
		<input type="submit" value="更新" />
		<input type="hidden" name="page" value="calendar" />
</form>
</div>
<div id="searchLabel">
ViewType：[<b class="now_display"><?php echo $p_typ_list[$post_type];?></b>]　　Now：[<b class="now_display"><span id="shown_target"></span></b>]
<button id="printPreview"> Print </button>
<button id="printQueue"> Add to Print Queue </button>
<button id="printTeacherSched"> Print Teacher Schedule </button>
</div>


<div id="regist_box">
<table>
	<tr>
		<th>
			ClassRoom：<select id="class_room_select"></select><button id="make_box--class_room" class="make_box">ShowBox</button>
		</th>
		<th>
			ClassType：<select id="class_type_select"></select><button id="make_box--class_type" class="make_box">ShowBox</button>
		</th>
		<th>
			Teacher：<select id="teacher_select"></select><button id="make_box--teacher" class="make_box">ShowBox</button>
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
<?php $new_schedule = array(); $class_time = array(); $data_id = array(); $tmpClassList = array();
$date_arr = array(); $incNumber = array(); $y=0; $stime; $etime; $allowAddClassList = 1; ?>
<?php foreach ($cal_data as $week_key => $class_schedule_data) { ?>
	<?php 
	$week_stt_time = strtotime($week_key);
	?>

	<table class="wp-list-table widefat striped">
		<tr>
			<th rowspan="11">
				<div id="row_ctl--<?php echo $week_key?>" class="draggable row_ctl_from">from</div>
				<div id="row_ctl--<?php echo $week_key?>" class="droppable row_ctl_to">to</div>
			</th>
			<th>コマ</th>
			<!-- display time / switch date time -->
			<?php $incCount = 1; ?>
			<?php foreach ($class_schedule_data as $class_schedule => $class_date_data) { ?>
				<?php if ($class_schedule != 11) {
					$incNumber[$class_schedule] = $incCount++;
				} ?>
			<th> 
				<div id="col--<?php echo $class_schedule; ?>" class="droppable" >
					<?php echo $mt_class_schedule[$class_schedule]["stt"]
					."〜" .$mt_class_schedule[$class_schedule]["end"]; ?>
				</div>
			</th>
			<?php } ?>
		</tr>
		<!-- re-order data / switch date & time -->
		<?php foreach ($class_schedule_data as $class_schedule => $class_date_data) {
			$class_time[] = $time = $mt_class_schedule[$class_schedule];
			foreach ($class_date_data as $date => $data) {
				$new_schedule[$date][$class_schedule] = $data;
			}
		} ?>
	
		<!-- display data / switch date & time -->	
		<?php foreach ($new_schedule as $date_key => $schedule) { ?>
		<?php $date_arr[] = $date_key; ?>
		<?php if (count($tmpClassList) > 0) { $allowAddClassList = 0; } ?>
		<tr>
			<td>
				<div id="row--<?php echo $date_key; ?>" class="droppable">
					<?php echo $date_key; ?>
				</div>
			</td>
			<?php foreach ($schedule as $key_d => $d) { ?>
				<?php $index = 0; ?>
				<?php $box_prefix = $key_d."--".$date_key; ?>
				<?php /* for printing */ ?>
				<?php $ctime = "{$key_d}"; $cdate = "{$date_key}"; ?>
				<?php $data_id[$cdate][$y."-".$ctime]["class-room"] = "{$box_prefix}--class_room"; ?>
				<?php $data_id[$cdate][$y."-".$ctime]["class-type"] = "{$box_prefix}--class_type"; ?>
				<?php $data_id[$cdate][$y."-".$ctime]["teacher"] = "{$box_prefix}--teacher"; ?>
				<?php $y++; ?>
			<td>
				<div id="<?php echo $box_prefix; ?>--class_room" class="droppable class_room">
					<p>
						<span class="block"><?php echo $mt_class_room[$d['class_room']]['post_title']; ?>
						<?php if ($mt_class_room[$d['class_room']]['post_title']) {?>
							<span><a class="box_del" id="<?php echo "del--{$box_prefix}--class_room--".$d['class_room'];?>">x</a></span>
						<?php } ?>
						</span>
					</p>
				</div>
				<div id="<?php echo $box_prefix; ?>--class_type" class="droppable class_type">
					<p>
						<span class="block"><?php echo $mt_class_type[$d['class_type']]['post_title']; ?>
							<?php if ($mt_class_type[$d['class_type']]['post_title']) {?>
								<?php if ($allowAddClassList == 1) { ?>
									<?php $index = $d['class_type']; $index_exist = false; ?>
									<?php foreach ($tmpClassList as $i => $i_val) {
										if ($i == $index) {
											$tmpClassList[$i] = ++$tmpClassList[$i];
											$index_exist = true;
											break;
										}
									} 
									if ($index_exist == false) { $tmpClassList[$index] = 0; } ?>
								<?php } ?>
							<span class="increment-<?php echo $d['class_type']; ?>" style="display: none;"> <?php $incIndex = explode("--", $box_prefix)[0]; echo $incNumber[$incIndex]; ?> </span>
							<span><a class="box_del" id="<?php echo "del--{$box_prefix}--class_type--".$class_data['class_type'];?>">x</a></span>
							<?php } ?>
						</span>
					</p>
				</div>
				<div id="<?php echo $box_prefix; ?>--teacher" class="droppable teacher">
					<p>
					<?php
					foreach ((array)$d['teacher'] as $id) { 
						?>
						<span class="block"><?php echo $mt_teacher[$id]['display_name']; ?>
							<span><a class="box_del" id="<?php echo "del--{$box_prefix}--teacher--".$id;?>">x</a></span>
						</span>
						<?php
					}
					?>
					</p>
				</div>
				<div id="<?php echo $box_prefix; ?>--student" class="droppable student">
					<p>
						<?php 
						foreach ((array)$d['student'] as $id) {
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

<!-- php code to get students meta values -->
<?php
$studentIdArr = get_users(array('role' => 'student', 'fields' => 'id'));
$studentMetaArr = [];

foreach ($studentIdArr as $id) {
	$studentMetaArr[$id]["start-date"] = get_user_meta($id, "stt_date", true);
	$studentMetaArr[$id]["end-date"] = get_user_meta($id, "end_date", true);
}
?>
<!-- html code for printing display -->
<div id="print_view_container">
	<table class="print_view">
		<tr>
			<td id="schedDate"colspan="2" class="bold-txt no-border-bottom center-txt rgb-blue-txt"> </td>
			<td class="no-border-bottom left-txt"> START: <span id="stdStartDate" class="rgb-blue-txt"></span> </td>
			<td class="no-border-bottom left-txt bold-txt fnt-12-txt"> CUBICLE NO. </td>
		</tr>
		<tr>
			<td colspan="2" class="no-border-top no-border-bottom right-txt"> <span class="underline-txt"> Buddy Teacher: </span> </td>
			<td class="no-border-top no-border-bottom left-txt"> <span id="stdType" class="rgb-red-txt">  </span> </td>
			<td id="cubicleNum" rowspan="2" class="no-border-top no-border-bottom center-txt fnt-24-txt"> </td>
		</tr>
		<tr>
			<td colspan="2" class="no-border-top no-border-bottom right-txt"> 
				<span id="buddyTeacher" class="rgb-red-txt fnt-8-txt bold-txt"> </span> 
			</td>
			<td class="no-border-top left-txt"> END: <span id="stdEndDate" class="rgb-blue-txt"> </span> </td>
		</tr>
		<tr>
			<td colspan="2" class="no-border-top left-txt"> <span class="underline-txt"> Student: </span> </td>
			<td colspan="2" class="rgb-blue-bg"> <?php echo $class_time[5]["stt"]." - ".$class_time[5]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="studentName" colspan="2" rowspan="2" class="bold-txt"> TAKURO </td>
			<td id="class-6-type" class="class-6" colspan="2">  </td>
		</tr>
		<tr>
			<td id="class-6-teacher" class="class-6"> </td>
			<td id="class-6-gc-room" class="class-6"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-gray-bg"> <?php echo $class_time[0]["stt"]." - ".$class_time[0]["end"]; ?> - WORD BUCKET TEST </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
		</tr>
		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[1]["stt"]." - ".$class_time[1]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[6]["stt"]." - ".$class_time[6]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-2-type" class="class-2" colspan="2"> </td>
			<td id="class-7-type" class="class-7" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-2-teacher" class="class-2"> </td>
			<td id="class-2-gc-room" class="class-2"> </td>
			<td id="class-7-teacher" class="class-7"> </td>
			<td id="class-7-gc-room" class="class-7"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
		</tr>
		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[2]["stt"]." - ".$class_time[2]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[7]["stt"]." - ".$class_time[7]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-3-type" class="class-3" colspan="2"> </td>
			<td id="class-8-type" class="class-8" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-3-teacher" class="class-3"> </td>
			<td id="class-3-gc-room" class="class-3"> </td>
			<td id="class-8-teacher" class="class-8"> </td>
			<td id="class-8-gc-room" class="class-8"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
		</tr>

		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[3]["stt"]." - ".$class_time[3]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[8]["stt"]." - ".$class_time[8]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-4-type" class="class-4" colspan="2"> </td>
			<td id="class-9-type" class="class-9" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-4-teacher" class="class-4"> </td>
			<td id="class-4-gc-room" class="class-4"> </td>
			<td id="class-9-teacher" class="class-9"> </td>
			<td id="class-9-gc-room" class="class-9"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Thursday/GRADUATION-Friday </td>
		</tr>
		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[4]["stt"]." - ".$class_time[4]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[9]["stt"]." - ".$class_time[9]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-5-type" class="class-5" colspan="2"> </td>
			<td id="class-10-type" class="class-10" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-5-teacher" class="class-5"> </td>
			<td id="class-5-gc-room" class="class-5"> </td>
			<td id="class-10-teacher" class="class-10"> </td>
			<td id="class-10-gc-room" class="class-10"> </td>
		</tr>
	</table>
	<!-- second print data -->
	<table class="print_view">
		<tr>
			<td id="schedDate-2"colspan="2" class="bold-txt no-border-bottom center-txt rgb-blue-txt"> </td>
			<td class="no-border-bottom left-txt"> START: <span id="stdStartDate-2" class="rgb-blue-txt"></span> </td>
			<td class="no-border-bottom left-txt bold-txt fnt-12-txt"> CUBICLE NO. </td>
		</tr>
		<tr>
			<td colspan="2" class="no-border-top no-border-bottom right-txt"> <span class="underline-txt"> Buddy Teacher: </span> </td>
			<td class="no-border-top no-border-bottom left-txt"> <span id="stdType-2" class="rgb-red-txt">  </span> </td>
			<td id="cubicleNum-2" rowspan="2" class="no-border-top no-border-bottom center-txt fnt-24-txt"> </td>
		</tr>
		<tr>
			<td colspan="2" class="no-border-top no-border-bottom right-txt"> 
				<span id="buddyTeacher-2" class="rgb-red-txt fnt-8-txt bold-txt"> </span> 
			</td>
			<td class="no-border-top left-txt"> END: <span id="stdEndDate-2" class="rgb-blue-txt"> </span> </td>
		</tr>
		<tr>
			<td colspan="2" class="no-border-top left-txt"> <span class="underline-txt"> Student: </span> </td>
			<td colspan="2" class="rgb-blue-bg"> <?php echo $class_time[5]["stt"]." - ".$class_time[5]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="studentName-2" colspan="2" rowspan="2" class="bold-txt"> TAKURO </td>
			<td id="class-6-type-2" class="class-6" colspan="2">  </td>
		</tr>
		<tr>
			<td id="class-6-teacher-2" class="class-6"> </td>
			<td id="class-6-gc-room-2" class="class-6"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-gray-bg"> <?php echo $class_time[0]["stt"]." - ".$class_time[0]["end"]; ?> - WORD BUCKET TEST </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
		</tr>
		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[1]["stt"]." - ".$class_time[1]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[6]["stt"]." - ".$class_time[6]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-2-type-2" class="class-2" colspan="2"> </td>
			<td id="class-7-type-2" class="class-7" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-2-teacher-2" class="class-2"> </td>
			<td id="class-2-gc-room-2" class="class-2"> </td>
			<td id="class-7-teacher-2" class="class-7"> </td>
			<td id="class-7-gc-room-2" class="class-7"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
		</tr>
		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[2]["stt"]." - ".$class_time[2]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[7]["stt"]." - ".$class_time[7]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-3-type-2" class="class-3" colspan="2"> </td>
			<td id="class-8-type-2" class="class-8" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-3-teacher-2" class="class-3"> </td>
			<td id="class-3-gc-room-2" class="class-3"> </td>
			<td id="class-8-teacher-2" class="class-8"> </td>
			<td id="class-8-gc-room-2" class="class-8"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
		</tr>

		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[3]["stt"]." - ".$class_time[3]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[8]["stt"]." - ".$class_time[8]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-4-type-2" class="class-4" colspan="2"> </td>
			<td id="class-9-type-2" class="class-9" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-4-teacher-2" class="class-4"> </td>
			<td id="class-4-gc-room-2" class="class-4"> </td>
			<td id="class-9-teacher-2" class="class-9"> </td>
			<td id="class-9-gc-room-2" class="class-9"> </td>
		</tr>
		<tr>
			<td colspan="2" class="rgb-red-txt"> Monday-Friday </td>
			<td colspan="2" class="rgb-red-txt"> Monday-Thursday/GRADUATION-Friday </td>
		</tr>
		<tr class="rgb-blue-bg">
			<td colspan="2"> <?php echo $class_time[4]["stt"]." - ".$class_time[4]["end"]; ?> </td>
			<td colspan="2"> <?php echo $class_time[9]["stt"]." - ".$class_time[9]["end"]; ?> </td>
		</tr>
		<tr>
			<td id="class-5-type-2" class="class-5" colspan="2"> </td>
			<td id="class-10-type-2" class="class-10" colspan="2"> </td>
		</tr>
		<tr>
			<td id="class-5-teacher-2" class="class-5"> </td>
			<td id="class-5-gc-room-2" class="class-5"> </td>
			<td id="class-10-teacher-2" class="class-10"> </td>
			<td id="class-10-gc-room-2" class="class-10"> </td>
		</tr>
	</table>
</div>
<!-- get teacher schedule data -->
<?php
$sttDate = $_REQUEST["stt"];
$dateStt = date_create();
$dateStt = strtotime($sttDate);

$endDate = $_REQUEST["end"];
$dateEnd = date_create();
$dateEnd = strtotime($endDate);

$monthStt = date("F", $dateStt);
$dayStt = date("d", $dateStt);

$monthEnd = date("F", $dateEnd);;
$dayEnd = date("d", $dateEnd);
$year = date("Y", $dateEnd);

if ($dayStt > $dayEnd) {
	$toMonth = $monthEnd." ";
}

$args = array(
	"posts_per_page" => 20000,
	"order" => "post_date",
	"order_by" => "DESC",
	"post_type" => "reservation",
	"post_status" => "publish"
);

//get reservation posts
$posts = get_posts( $args );

$scheduleArr = array();

//get the teacher schedules from post
foreach ($posts as $post) {
	//get date from post title
	$tmpArr = array();
	$postDate = explode("_", $post->post_title)[0];
	$teacherCount = count( get_post_meta($post->ID, "teacher") );

	//process posts that has teachers
	if ( $postDate == $sttDate && $teacherCount > 0 ) {
		$tmp = explode("_", $post->post_title);
		$teacher_name = $tmp[3];
		$schedule_time = $tmp[1];
		$student = array();
		
		//get students name
		for ( $x = 4; $x < count( $tmp ); $x++ ) {
			$student[] = $tmp[$x];
		}
	
		//assign schedule to teacher & class time
		$tmpArr["teacher_name"] = $teacher_name;
		$tmpArr[$schedule_time] = array( "class_time" => $schedule_time, 
		"room" => $tmp[2], "student" => $student);
	
		//get class type
		$class_type_id = get_post_meta($post->ID, "class_type")[0];
		$args["post_type"] = "class_type";
		$classtype_post = get_posts($args);
	
		//get class type name
		foreach ( $classtype_post as $ct_post ) {
			if ( $ct_post->ID == $class_type_id ) {
				if ( strpos($ct_post->post_title, " GC") > 0 ) {
					$tmpArr["class_type"] = $ct_post->post_title;
					$tmpArr["class_room"] = $tmp[2];
				} else {
					$tmpArr[$schedule_time]["class_type"] = $ct_post->post_title;
					$tmpArr[$schedule_time]["class_room"] = $tmp[2];
				}
				break;
			}
		}
	
		//check if teacher sched already exists
		$exist = 0;
		foreach ($scheduleArr as $key => $sched) {
			$tmpTeacherName = $sched["teacher_name"];
			$tmpClassTime = $sched[$schedule_time]["class_time"];
		
			/* checks if teacher has record & if class time schedule exist or not
			 * condition: checks if teacher has record & if class time schedule does not exist
			 * [true]: add schedule to existing teacher but with different time
			 */
			if ( $tmpTeacherName == $teacher_name ) {
				$exist = 1;
			
				if ( $schedule_time != $tmpClassTime ) {
					$scheduleArr[$key][$schedule_time] = $tmpArr[$schedule_time];
				}
			
				break;
			}
		}
	
		//add teacher sched to array automatically if array is empty
		if ( count( $scheduleArr ) == 0 || $exist == 0) {
			$scheduleArr[] = $tmpArr;
		}
	}
}

$args = array(
	"posts_per_page" => 20000,
	"order" => "post_title",
	"order_by" => "ASC",
	"post_type" => "class_schedule"
);

$classTime = array();
$tmpClassTime = get_posts( $args );

foreach ( $tmpClassTime as $time ) {
	if ($time->ID != 11) {
		$tmpArr = array();
		$tmpArr["stt"] = get_post_meta($time->ID, "stt")[0];
		$tmpArr["end"] = get_post_meta($time->ID, "end")[0];
		$classTime[$time->ID] = $tmpArr;
	}
}
?>

<!-- teacher print view -->
<?php 
$rowCount = 0;
$teacherList = get_users( array('role' => 'teacher') );
?>
<div id="teacher_printview">
	<div style="text-align: center; font-size: 15px; padding: 5px 0;">
		TEACHERS' SCHEDULE <?php echo strtoupper( $monthStt )." ".$dayStt." - ".strtoupper( $toMonth ).$dayEnd.
		", ".$year; ?> 
	</div>
	<table id="teacherPrint">
		<tr>
			<td style="padding-left: 5px;"> Name </td>
			<?php foreach ( $classTime as $time ) { ?>
				<td style="text-align: center; height: 18px !important;"> <?php echo $time['stt']."-".$time['end'] ?> </td>
				<td style="text-align: center; height: 18px;"> class </td>
			<?php } ?>
		</tr>
		<?php foreach ( $teacherList as $teacher ) { ?>
			<?php $display = true; ?>
			<?php if ( $rowCount < 15 ) { ?>
				<tr class="row-show">
			<?php } else { ?>
				<tr class="row-hide">
			<?php } ?>
			<?php foreach ( $scheduleArr as $sched ) { ?>
				<?php if ( $teacher->user_login == $sched["teacher_name"] && $sched["class_type"] == "") { ?>
					<?php $display = false; ?>
					<td style="padding-left: 5px;" > <?php echo $sched["teacher_name"]; ?> </td> 
					<?php for ( $x = 2; $x < 11; $x++ ) { ?>
					<?php $room = $sched[$x]["class_room"]; 
						$room = str_replace("cubicle ", " #", strtolower( $room )); 
						$room = str_replace("rm", "", strtolower( $room )); 
						$room = str_replace("# ", "#", $room); ?>
					<td style="text-align: center;"> <?php echo $sched[$x]["student"][0].$room; ?> </td>
					<td style="text-align: center;"> <?php echo $sched[$x]["class_type"]; ?> </td>
					<?php } ?>
					<?php break; ?>
				<?php } elseif ( $teacher->user_login == $sched["teacher_name"] ) { ?>
					<?php $display = false; break; ?>
				<?php } ?>
			<?php } ?>
			<?php if ( $display ) { ?>
				<td style="padding-left: 5px;"> <?php echo $teacher->user_login; ?> </td>
				<?php for ( $x = 2; $x < 11; $x++ ) { ?>
					<td> </td>
					<td> </td>
				<?php } ?>
			<?php } ?>
			<?php $rowCount++; ?>
			</tr>
		<?php } ?>
		<?php foreach ( $scheduleArr as $sched ) { ?>
			<tr class="row-hide">
			<?php if ( $sched["class_type"] != "" ) { ?>
				<td style="padding-left: 5px;"> <?php echo $sched["teacher_name"]." ".$sched["class_type"]." ".$sched["class_room"]; ?> </td> 
				<?php for ( $x = 2; $x < 11; $x++ ) { ?>
				<td colspan="2" style="text-align: center;"> 
					<?php for ( $x2 = 0; $x2 < count($sched[$x]["student"]); $x2++ ) {
						if ( $x2 > 0 ) { echo "; "; }
						echo $sched[$x]["student"][$x2]; 
					} ?> 
				</td>
				<?php } ?>
			<?php } ?>
			</tr>
		<?php } ?>
	</table>
	<div style="text-align: right;">
		<button id="printNextPage"> Print Next Page </button>
	</div>
</div>

<!-- expose php arrays to javascript -->
<script>
	var class_sched = <?php echo json_encode($data_id); $data_id = null; ?>;
	var student_meta = <?php echo json_encode($studentMetaArr); $studentMetaArr = null;?>;
	var date_array = <?php echo json_encode($date_arr); $date_arr = null; ?>;
	var incClassList = <?php echo json_encode($tmpClassList); $tmpClassList = null; ?>;
	var incNumber = <?php echo json_encode($incNumber); $incNumber = null; ?>;
</script>


