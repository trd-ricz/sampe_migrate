jQuery("#counter_value").click(function() {
	var counter = jQuery('#counter').val();

	for (var i= 1; i <= counter; i++) {
		jQuery("#display_forms").append('<div class="create-parent"><input type="button" class="btn btn-warning btn-sm process-cnt-create" value="Process Duplicate"><table class="table borderless"> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdtop text-center" colspan=2>' +
		' <span id="tblSched">WEEKLY SCHEDULE</span> ' +
		'</td> ' +
		'<td class="tdtop tdright">' +
		'Start: <input type="text" class="start_date" name="start_date[]">' +
		'</td> ' +
		'<td id="cubicle-head" class="tdright tdtop">' +
		'CUBICLE NO.' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright text-right" colspan=2> ' +
		'<span id="bTeach">Buddy Teacher:</span> ' +
		'</td> ' +
		'<td class="tdright"><label class="lstudent_status">N/A</label>' +
		'<input type="hidden" class="student_status" name="student_status[]"></td>' +
		'<td class="tdright cubicle text-center" rowspan=2><input type="text" name="cubicle_no[]" class="cubicle_no" placeholder="Cubicle No."></td>' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright text-right" colspan=2><label class="lbuddy_teacher"></label>' +
		'<input type="hidden" class="buddy_teacher" name="buddy_teacher[]"></td> ' +
		'<td class="tdright tdbottom">End: <input type="text" class="end_date" name="end_date[]"></td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom" colspan=2>Student:</td> ' +
		'<td id="time" class="tdright tdbottom text-center" colspan="2">1:30~2:20</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom student text-center" colspan=2 rowspan="2">' +
		'<input type="text" class="student-name" name="student[]" placeholder="Student Name" list="schedule_students" required> ' +
		'( <input type="text" class="student-weeks" name="student_weeks[]"> WK/S.' +
		'<label class="lstudent-mm">0 MM</label> ' +
		'<input type="hidden" class="student-mm" name="student_mm[]">' +
		'<label class="lstudent-gc">0 GC )</label>' +
		'<input type="hidden" class="student-gc" name="student_gc[]">' +
		'<input type="hidden" name="student-time-1[]" class="student-time-1"><input type="hidden" name="student-time-11[]" class="student-time-11">' +
		'<input type="hidden" name="student-time-2[]" class="student-time-2"><input type="hidden" name="student-time-22[]" class="student-time-22">' +
		'<input type="hidden" name="student-time-3[]" class="student-time-3"><input type="hidden" name="student-time-33[]" class="student-time-33">' +
		'<input type="hidden" name="student-time-4[]" class="student-time-4"><input type="hidden" name="student-time-44[]" class="student-time-44">' +
		'<input type="hidden" name="student-time-5[]" class="student-time-5"><input type="hidden" name="student-time-55[]" class="student-time-55">' +
		'<input type="hidden" name="student-time-6[]" class="student-time-6"><input type="hidden" name="student-time-66[]" class="student-time-66">' +
		'<input type="hidden" name="student-time-7[]" class="student-time-7"><input type="hidden" name="student-time-77[]" class="student-time-77">' +
		'<input type="hidden" name="student-time-8[]" class="student-time-8"><input type="hidden" name="student-time-88[]" class="student-time-88">' +
		'<input type="hidden" name="student-time-9[]" class="student-time-9"><input type="hidden" name="student-time-99[]" class="student-time-99"></td> ' +
		'<td class="tdright tdbottom text-center" colspan="2"> ' +
		'<input type="text" id="time5'+ i +'" name="class_type130220[]" class="class_type130220" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered130220[]" class="transfered130220" value="" style="display: none">' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher5'+ i +'" name="teacher130220[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room130220[]" class="room130220" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2>7:50~8:00 WORD BUCKET TEST</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2>Monday~Friday</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>8:00~8:50</td> ' +
		'<td id="time" class="tdright tdbottom text-center" colspan=2>2:30~3:20</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time1'+ i +'" name="class_type8850[]" class="class_type8850" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered8850[]" class="transfered8850" value="" style="display: none">' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time6'+ i +'" name="class_type230320[]" class="class_type230320" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered230320[]" class="transfered230320" value="" style="display: none">' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher1'+ i +'" name="teacher8850[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room8850[]" class="room8850" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher6'+ i +'" name="teacher230320[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room230320[]" class="room230320" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2>Monday~Friday</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2>Monday~Friday</td> ' +
		'</tr> ' +
		'<tr>' +
		'<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>9:00~9:50</td> ' +
		'<td id="time" class="tdright tdbottom text-center" colspan=2>3:30~4:20</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time2'+ i +'" name="class_type9950[]" class="class_type9950" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered9950[]" class="transfered9950" value="" style="display: none">' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time7'+ i +'" name="class_type330420[]" class="class_type330420" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered330420[]" class="transfered330420" value="" style="display: none">' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher2'+ i +'" name="teacher9950[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room9950[]" class="room9950" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher7'+ i +'" name="teacher330420[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room330420[]" class="room330420" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2>Monday~Friday</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2>Monday~Friday</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>10:00~10:50</td> ' +
		'<td id="time" class="tdright tdbottom text-center" colspan=2>4:30~5:20</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time3'+ i +'" name="class_type101050[]" class="class_type101050" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered101050[]" class="transfered101050" value="" style="display: none">' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time8'+ i +'" class="for_buddy_teacher class_type430520" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered430520[]" class="transfered430520" value="" style="display: none">' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher3'+ i +'" name="teacher101050[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room101050[]" class="room101050" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher8'+ i +'" class="for_buddy_teacher_value" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room430520[]" class="room430520" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2>Monday~Friday</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2>Monday~Thursday/GRADUATION~Friday</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>11:00~11:50</td> ' +
		'<td id="time" class="tdright tdbottom text-center" colspan=2>5:30~6:20</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time4'+ i +'" name="class_type111150[]" class="class_type111150" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered111150[]" class="transfered111150" value="" style="display: none">' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" id="time9'+ i +'" name="class_type530620[]"  class="class_type530620" placeholder="Class Type" list="schedule_class_type"> ' +
		'<input type="text" name="transfered530620[]" class="transfered530620" value="" style="display: none">' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher4'+ i +'" name="teacher111150[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room111150[]" class="room111150" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" id="teacher9'+ i +'" name="teacher530620[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> <input type="text" name="room530620[]" class="room530620" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'</tr> ' +
		'</table></div>');
	}

	jQuery("#counter").hide();
	jQuery("#counter_value").hide();
});


function printTeacherWeeklySchedule() {
	var mywindow = window.open('', '#printTeacherWeeklySchedule');
	mywindow.document.write('<title>Print Preview</title>');
	mywindow.document.write('<style>' +
	'@page { size: letter landscape; }' +
	'body,html { -webkit-print-color-adjust: exact; margin:0 !important; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent;}' +
	'table, figure { border: solid #ddd !important; border-width: 1px 0 0 1px !important; border-collapse: collapse; width: 100%;margin:0 !important; padding:0 !important}' +
	//'table tr td { font-size: 8pt; text-transform: uppercase; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd} ' +
	'table tr td { font-size: 7pt; text-transform: uppercase; border: solid #ddd !important; border-width: 0 1px 1px 0 !important; } ' +
	'table tr th { font-size: 10pt; text-transform: uppercase; border: solid #ddd !important; border-width: 0 1px 1px 0 !important; } ' +
	//'tr { display: inline-block; page-break-inside: avoid; -webkit-region-break-inside: avoid;  }' +
	//'th { page-break-inside:avoid; page-break-after:auto }' +
	'thead {display: table-header-group;}' +
	'tbody {display: table-row-group;}' +
	//'table tr td:before, table tr td:after { content: ""; height: 4px; display: block; } ' +
	'.btn-success {display: none;} ' +
	'.yellow {background-color: yellow;} ' +
	'.orange {background-color: orange;} ' +
	//'.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th { border: 1px solid #ddd;}' +
	'</style>');
	mywindow.document.write(jQuery('#printTeacherWeeklySchedule').html());
	mywindow.document.close(); // necessary for IE >= 10
	mywindow.focus(); // necessary for IE >= 10

	mywindow.print();
	mywindow.close();
}

function printAllStudentWeeklySchedule() {
	var mywindow = window.open('', '.inside #print_preview');
	mywindow.document.write('<title>Print Preview</title>');
	mywindow.document.write('<style>' +
	'@page { size: A4; }' +
	'body { -webkit-print-color-adjust: exact; font-size: 11px;}' +
	'#tblSched {color: blue;font-weight: bold;}' +
	'.table {width: 100%; max-width: 100%; margin-bottom: 20%; border-spacing: 0; border-collapse: collapse; background-color: transparent;}' +
	'.table>tbody>tr>td, .table>tbody>tr>td, .table>tbody>tr>th, ' +
	'.table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, ' +
	'.table>thead>tr>th {border-top: none; padding:0 8px 0;}' +
	'.table>thead>tr>th {border-top: none; padding:0 8px 0;}' +
	'.tdleft{border-left:1px solid;}' +
	'.tdright{border-right:1px solid;}' +
	'.tdtop{border-top:1px solid !important;}' +
	'.tdbottom{border-bottom:1px solid;}' +
	'.table-holder{width:90%;margin-top:10px;}' +
	'.cubicle{font-size:30px;}' +
	'#cubicle-head{font-weight: bold;}' +
	'.student{vertical-align:middle !important;font-size:16px;}' +
	'#tblSched{color:#4682B4;font-weight: bold;}' +
	'#bTeach{text-decoration: underline;}' +
	'#time{background-color: skyblue;}' +
	'.text-right {text-align: right;}' +
	'.text-center {text-align: center;}' +
	'.text-left {text-align: left;}' +
	'#gray {background-color: #D3D3D3;}' +
	'.red {color: #CD5C5C;font-weight: bold;}' +
	'.blue {color: #4682B4;font-weight: bold;}' +
	'td {text-transform: uppercase; font-size: 13px;}' +
	'.capital {text-transform: capitalize !important;text-decoration: underline;}' +
	'.btn-sm, .modal {display:none;}' +
	'</style>');
	mywindow.document.write(jQuery('#print_preview').html());
	mywindow.document.close(); // necessary for IE >= 10
	mywindow.focus(); // necessary for IE >= 10

	mywindow.print();
	mywindow.close();
}

jQuery(document).on("click", ".singleclickprint", function() {
	var sinprint = jQuery(this).parents(".modal:first").find(".singleprint").eq(0);

	var mywindow = window.open('', sinprint);
	mywindow.document.write('<title>Print Preview</title>');
	mywindow.document.write('<style>' +
	'@page { size: A4; }' +
	'body { -webkit-print-color-adjust: exact;  margin: 5mm 0 5mm 0; font-size: 11px;}' +
	'#tblSched {color: blue;font-weight: bold;}' +
	'.table {width: 100%; max-width: 100%; margin-bottom: 20%; border-spacing: 0; border-collapse: collapse; background-color: transparent;}' +
	'.table>tbody>tr>td, .table>tbody>tr>td, .table>tbody>tr>th, ' +
	'.table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, ' +
	'.table>thead>tr>th {border-top: none; padding:0 8px 0;}' +
	'.table>thead>tr>th {border-top: none; padding:0 8px 0;}' +
	'.tdleft{border-left:1px solid;}' +
	'.tdright{border-right:1px solid;}' +
	'.tdtop{border-top:1px solid !important;}' +
	'.tdbottom{border-bottom:1px solid;}' +
	'.table-holder{width:90%;margin-top:10px;}' +
	'.cubicle{font-size:30px;}' +
	'#cubicle-head{font-weight: bold;}' +
	'.student{vertical-align:middle !important;font-size:16px;}' +
	'#tblSched{color:#4682B4;font-weight: bold;}' +
	'#bTeach{text-decoration: underline;}' +
	'#time{background-color: skyblue;}' +
	'.text-right {text-align: right;}' +
	'.text-center {text-align: center;}' +
	'.text-left {text-align: left;}' +
	'#gray {background-color: #D3D3D3;}' +
	'.red {color: #CD5C5C;font-weight: bold;}' +
	'.blue {color: #4682B4;font-weight: bold;}' +
	'td {text-transform: uppercase; font-size: 13px;}' +
	'.capital {text-transform: capitalize !important;text-decoration: underline;}' +
	'</style>');
	mywindow.document.write(jQuery(sinprint).html());
	mywindow.document.close(); // necessary for IE >= 10
	mywindow.focus(); // necessary for IE >= 10

	mywindow.print();
	mywindow.close();
});


//// Hide tr if tds are empty for Teacher Weekly Schedule Table
//jQuery(document).ready(function() {
//	jQuery('.tym-parent').each(function(e) {
//		var td_array = [];
//		jQuery(this).find('td').each(function(i) {
//			// default : first td has value
//			// 2nd : check if there are more tds that have value
//			if(jQuery(this).text() && i > 1) {
//				td_array.push("T");
//			} else {
//				td_array.push("F");
//			}
//		});
//
//		// if array doesnt have T then remove
//		if (jQuery.inArray("T",td_array) == -1 ) {
//			jQuery(this).remove();
//		}
//	});
//});

function count_arr(num,inps){
	var suffix = 1;
	for(i = 0 ; i < num.length;i++){
		if(num[i].indexOf(inps.val()) >= 0){
			suffix += 1;
		}
	}
	return suffix;
}

jQuery(document).on("click", ".process-cnt-create", function() {

	var input_storage = [];
	var input_display = [];
	var inputs = jQuery(this).parents(".create-parent:first").find("input[placeholder='Class Type']");

	inputs.each(function(i) {
		if(jQuery.inArray(jQuery(this).val(),input_storage) > -1 && jQuery(this).val().length > 0){
			var cnt = count_arr(input_storage,jQuery(this));
			input_storage.push(jQuery(this).val());
			input_display.push(jQuery(this).val()+" "+cnt);
		}else{
			input_storage.push(jQuery(this).val());
			input_display.push(jQuery(this).val());
		}
	});

	inputs.each(function(i) {
		jQuery(this).val(input_display[i]);
	});
});

jQuery(document).on("click", ".process-cnt", function() {

	var input_storage = [];
	var input_display = [];
	var inputs = jQuery(this).parents(".delete-parent:first").find("input[placeholder='Class Type']");
	inputs.each(function(i) {
		if(jQuery.inArray(jQuery(this).val(),input_storage) > -1 && jQuery(this).val().length > 0){
			var cnt = count_arr(input_storage,jQuery(this));
			input_storage.push(jQuery(this).val());
			input_display.push(jQuery(this).val()+" "+cnt);
		}else{
			input_storage.push(jQuery(this).val());
			input_display.push(jQuery(this).val());
		}
	});

	inputs.each(function(i) {
		jQuery(this).val(input_display[i]);
	});
});

jQuery(document).on("click", ".delete-schedule", function() {
	var result = confirm("Are you sure you want to delete this schedule ?");

	if (result) {
		jQuery(this).parents(".delete-parent:first").find(".start_date").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student_status").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".lstudent_status").eq(0).text("");
		jQuery(this).parents(".delete-parent:first").find(".buddy_teacher").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".lbuddy_teacher").eq(0).text("");
		jQuery(this).parents(".delete-parent:first").find(".cubicle_no").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".end_date").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-weeks").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-name").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-mm").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-gc").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-1").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-2").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-3").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-4").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-5").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-6").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-7").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-8").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-9").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-11").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-22").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-33").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-44").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-55").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-66").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-77").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-88").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-99").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".student-time-99").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type8850").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher8850").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room8850").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type9950").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher9950").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room9950").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type101050").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher101050").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room101050").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type111150").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher111150").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room111150").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type130220").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher130220").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room130220").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type230320").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher230320").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room230320").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type330420").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher330420").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room330420").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type430520").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher430520").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room430520").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".class_type530620").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".teacher530620").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".room530620").eq(0).val("");

		jQuery(this).parents(".delete-parent:first").find(".transfered8850").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered9950").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered101050").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered111150").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered130220").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered230320").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered330420").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered430520").eq(0).val("");
		jQuery(this).parents(".delete-parent:first").find(".transfered530620").eq(0).val("");


		jQuery(this).parents(".delete-parent:first").find(".delete-schedule").eq(0).hide();
		jQuery(this).parents(".delete-parent:first").find("table").eq(0).hide();
		jQuery(this).parents(".delete-parent:first").find(".process-cnt").eq(0).hide();
	}
});

jQuery(document).on("change", ".student-name", function() {

	var $this = jQuery(this), str = $this.val();

	if (str == "") {
		// do nothing
	} else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var result = JSON.parse(xmlhttp.responseText);

				$this.parents("table:first").find(".start_date").eq(0).val(result.start_date);
				$this.parents("table:first").find(".end_date").eq(0).val(result.end_date);
				$this.parents("table:first").find(".student_status").eq(0).val(result.student_status);
				$this.parents("table:first").find(".lstudent_status").eq(0).text(result.student_status);
				$this.parents("table:first").find(".student-weeks").eq(0).val(result.count_weeks);
				//$this.parents("table:first").find(".lstudent-weeks").eq(0).text("( " + result.count_weeks + " WK/S.");
			}
		};
		xmlhttp.open("GET", "<?php echo get_template_directory_uri().'/inc/custom-meta-box/getuser.php?q='?>"+str,true);
		xmlhttp.send();
	}
});

jQuery(document).on("change", ".student-weeks", function() {

	var $this = jQuery(this), str = $this.val();

	var sttd = $this.parents("table:first").find(".start_date").eq(0).val();

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var result = JSON.parse(xmlhttp.responseText);

			$this.parents("table:first").find(".end_date").eq(0).val(result.end_date);
		}
	};
	xmlhttp.open("GET", "<?php echo get_template_directory_uri().'/inc/custom-meta-box/get_end_date.php?q='?>"+str + "&sttd=" + sttd,true);
	xmlhttp.send();

});


jQuery(document).on('change', 'input[name*="class"]', function(e) {
	var cID = ("" + e.target.id).replace("time","teacher");
	if(jQuery(this).val().toLowerCase().indexOf("review") == 0){
		jQuery(this).parents("table:first").find(".buddy_teacher").eq(0).val(jQuery('#' + cID).val());
		jQuery(this).parents("table:first").find(".lbuddy_teacher").eq(0).text(jQuery('#' + cID).val());
        console.log("true");
	}
});


jQuery(document).on('change', '.for_buddy_teacher', function() {
	var str = jQuery(this).parents("table:first").find(".for_buddy_teacher_value").eq(0).val();
	var test = jQuery(this).val();

	if (test.toLowerCase().indexOf("review") < 0) {
		jQuery(this).parents("table:first").find(".buddy_teacher").eq(0).val("");
		jQuery(this).parents("table:first").find(".lbuddy_teacher").eq(0).text("");
	} else {
		jQuery(this).parents("table:first").find(".buddy_teacher").eq(0).val(str);
		jQuery(this).parents("table:first").find(".lbuddy_teacher").eq(0).text(str);
	}
});


jQuery(document).on('change', '.class_type8850', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-1").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-11").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-1").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-11").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-1").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-1").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-11").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room8850").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-11").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-11").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-1").eq(0).val("");

		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room8850").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");


});

jQuery(document).on('change', '.class_type9950', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-2").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-22").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-2").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-22").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-2").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-2").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-22").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room9950").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-22").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-22").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-2").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room9950").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type101050', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-3").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-33").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-3").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-33").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-3").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-3").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-33").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room101050").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-33").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-33").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-3").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room101050").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type111150', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-4").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-44").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-4").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-44").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-4").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-4").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-44").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room111150").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-44").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-44").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-4").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room111150").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type130220', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-5").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-55").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-5").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-55").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-5").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-5").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-55").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room130220").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-55").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-55").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-5").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room130220").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type230320', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-6").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-66").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-6").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-66").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-6").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-6").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-66").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room230320").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-66").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-66").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-6").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room230320").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type330420', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-7").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-77").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-7").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-77").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-7").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-7").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-77").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room330420").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-77").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-77").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-7").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room330420").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type430520', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-8").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-88").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-8").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-88").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-8").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-8").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-88").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room430520").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-88").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-88").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-8").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room430520").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});

jQuery(document).on('change', '.class_type530620', function() {
	var temp = jQuery(this).val();

	var countMM = (temp.match(/ MM/g) || []).length;
	var countGC = (temp.match(/ GC/g) || []).length;

	var newMM = +jQuery(this).parents("table:first").find(".student-time-9").eq(0).val() + countMM;
	var newGC = +jQuery(this).parents("table:first").find(".student-time-99").eq(0).val() + countGC;

	var newMM1 = +jQuery(this).parents("table:first").find(".student-time-9").eq(0).val() - 1;
	var newGC1 = +jQuery(this).parents("table:first").find(".student-time-99").eq(0).val() - 1;

	if (countMM == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-9").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-9").eq(0).val(newMM);
		}

		jQuery(this).parents("table:first").find(".student-time-99").eq(0).val("");

		// get cubicle no. value
		var cubicle_val = jQuery(this).parents("table:first").find(".cubicle_no").eq(0).val();
		// put value on room input
		jQuery(this).parents("table:first").find(".room530620").eq(0).val(cubicle_val);
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-99").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-99").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-9").eq(0).val("");
		// remove value if change to gc or class type is gc
		jQuery(this).parents("table:first").find(".room530620").eq(0).val("");
	}

	var a = jQuery(this).parents("table:first").find(".student-time-1").eq(0).val();
	var b = jQuery(this).parents("table:first").find(".student-time-2").eq(0).val();
	var c = jQuery(this).parents("table:first").find(".student-time-3").eq(0).val();
	var d = jQuery(this).parents("table:first").find(".student-time-4").eq(0).val();
	var e = jQuery(this).parents("table:first").find(".student-time-5").eq(0).val();
	var f = jQuery(this).parents("table:first").find(".student-time-6").eq(0).val();
	var g = jQuery(this).parents("table:first").find(".student-time-7").eq(0).val();
	var h = jQuery(this).parents("table:first").find(".student-time-8").eq(0).val();
	var i = jQuery(this).parents("table:first").find(".student-time-9").eq(0).val();

	var j = jQuery(this).parents("table:first").find(".student-time-11").eq(0).val();
	var k = jQuery(this).parents("table:first").find(".student-time-22").eq(0).val();
	var l = jQuery(this).parents("table:first").find(".student-time-33").eq(0).val();
	var m = jQuery(this).parents("table:first").find(".student-time-44").eq(0).val();
	var n = jQuery(this).parents("table:first").find(".student-time-55").eq(0).val();
	var o = jQuery(this).parents("table:first").find(".student-time-66").eq(0).val();
	var p = jQuery(this).parents("table:first").find(".student-time-77").eq(0).val();
	var q = jQuery(this).parents("table:first").find(".student-time-88").eq(0).val();
	var r = jQuery(this).parents("table:first").find(".student-time-99").eq(0).val();

	var total_mm = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
	var total_gc = Number(j) + Number(k) + Number(l) + Number(m) + Number(n) + Number(o) + Number(p) + Number(q) + Number(r);

	jQuery(this).parents("table:first").find(".student-mm").eq(0).val(total_mm);
	jQuery(this).parents("table:first").find(".student-gc").eq(0).val(total_gc);

	jQuery(this).parents("table:first").find(".lstudent-mm").eq(0).text(total_mm + " MM ");
	jQuery(this).parents("table:first").find(".lstudent-gc").eq(0).text(total_gc + " GC )");
});


jQuery(document).on("click", ".transfered8850btn", function() {
	jQuery(this).parents("table:first").find(".transfered8850").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered8850btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered8850btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered8850").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered8850btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered9950btn", function() {
	jQuery(this).parents("table:first").find(".transfered9950").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered9950btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered9950btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered9950").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered9950btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered101050btn", function() {
	jQuery(this).parents("table:first").find(".transfered101050").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered101050btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered101050btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered101050").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered101050btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered111150btn", function() {
	jQuery(this).parents("table:first").find(".transfered111150").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered111150btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered111150btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered111150").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered111150btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered130220btn", function() {
	jQuery(this).parents("table:first").find(".transfered130220").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered130220btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered130220btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered130220").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered130220btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered230320btn", function() {
	jQuery(this).parents("table:first").find(".transfered230320").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered230320btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered230320btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered230320").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered230320btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered330420btn", function() {
	jQuery(this).parents("table:first").find(".transfered330420").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered330420btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered330420btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered330420").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered330420btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered430520btn", function() {
	jQuery(this).parents("table:first").find(".transfered430520").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered430520btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered430520btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered430520").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered430520btn").eq(0).show();
	jQuery(this).hide();
});

jQuery(document).on("click", ".transfered530620btn", function() {
	jQuery(this).parents("table:first").find(".transfered530620").eq(0).val("transferred");

	jQuery(this).parents("table:first").find(".transfered530620btncancel").eq(0).show();
	jQuery(this).hide();
});
jQuery(document).on("click", ".transfered530620btncancel", function() {
	jQuery(this).parents("table:first").find(".transfered530620").eq(0).val("");

	jQuery(this).parents("table:first").find(".transfered530620btn").eq(0).show();
	jQuery(this).hide();
});
