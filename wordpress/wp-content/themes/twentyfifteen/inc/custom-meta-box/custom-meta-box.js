jQuery("#counter_value").click(function() {
	var counter = jQuery('#counter').val();

	for (var i= 1; i <= counter; i++) {
		jQuery("#display_forms").append('<table class="table borderless"> ' +
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
		'<td class="tdright cubicle text-center" rowspan=2><input type="text" name="cubicle_no[]" placeholder="Cubicle No."></td>' +
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
		'<input type="text" name="class_type130220[]" class="class_type130220" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher130220[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room130220[]" placeholder="Room" list="schedule_rooms"> ' +
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
		'<input type="text" name="class_type8850[]" class="class_type8850" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" name="class_type230320[]" class="class_type230320" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher8850[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room8850[]" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher230320[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room230320[]" placeholder="Room" list="schedule_rooms"> ' +
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
		'<input type="text" name="class_type9950[]" class="class_type9950" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" name="class_type330420[]" class="class_type330420" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher9950[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room9950[]" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher330420[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room330420[]" placeholder="Room" list="schedule_rooms"> ' +
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
		'<input type="text" name="class_type101050[]" class="class_type101050" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" class="for_buddy_teacher class_type430520" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher101050[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room101050[]" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" class="for_buddy_teacher_value" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room430520[]" placeholder="Room" list="schedule_rooms"> ' +
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
		'<input type="text" name="class_type111150[]" class="class_type111150" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center" colspan=2> ' +
		'<input type="text" name="class_type530620[]"  class="class_type530620" placeholder="Class Type" list="schedule_class_type"> ' +
		'</td> ' +
		'</tr> ' +
		'<tr> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher111150[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> ' +
		'<input type="text" name="room111150[]" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'<td class="tdleft tdright tdbottom text-center"> ' +
		'<input type="text" name="teacher530620[]" placeholder="Teacher" list="schedule_teachers"> ' +
		'</td> ' +
		'<td class="tdright tdbottom text-center"> <input type="text" name="room530620[]" placeholder="Room" list="schedule_rooms"> ' +
		'</td> ' +
		'</tr> ' +
		'</table>');
	}

	jQuery("#counter").hide();
	jQuery("#counter_value").hide();
});


function printTeacherWeeklySchedule() {

}

function printAllStudentWeeklySchedule() {
	var mywindow = window.open('', '.inside #print_preview');
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

// Hide tr if tds are empty for Teacher Weekly Schedule Table
jQuery(document).ready(function() {
	jQuery('.tym-parent').each(function(e) {
		var td_array = [];
		jQuery(this).find('td').each(function(i) {
			// default : first td has value
			// 2nd : check if there are more tds that have value
			if(jQuery(this).text() && i > 1) {
				td_array.push("T");
			} else {
				td_array.push("F");
			}
		});

		// if array doesnt have T then remove
		if (jQuery.inArray("T",td_array) == -1 ) {
			jQuery(this).remove();
		}
	});
});

//function mySinglePrintFunction() {
//
//}


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

		jQuery(this).parents(".delete-parent:first").find(".delete-schedule").eq(0).hide();
		jQuery(this).parents(".delete-parent:first").find("table").eq(0).hide();
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
	xmlhttp.open("GET", "<?php echo get_template_directory_uri().'/inc/custom-meta-box/get_end_date.php?q='?>"+str,true);
	xmlhttp.send();

});


jQuery(document).on('change', '.for_buddy_teacher_value', function() {
	var str = jQuery(this).parents("table:first").find(".for_buddy_teacher").eq(0).val();
	var test = jQuery(this).val();

	if (str.toLowerCase().indexOf("review") >= 0) {
		jQuery(this).parents("table:first").find(".buddy_teacher").eq(0).val(test);
		jQuery(this).parents("table:first").find(".lbuddy_teacher").eq(0).text(test);
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-11").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-11").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-1").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-22").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-22").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-2").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-33").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-33").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-3").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-44").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-44").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-4").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-55").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-55").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-5").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-66").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-66").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-6").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-77").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-77").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-7").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-88").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-88").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-8").eq(0).val("");
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
	} else if (countGC == 1) {
		if (jQuery(this).parents("table:first").find(".student-time-99").eq(0).val().length < 1) {
			jQuery(this).parents("table:first").find(".student-time-99").eq(0).val(newGC);
		}

		jQuery(this).parents("table:first").find(".student-time-9").eq(0).val("");
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

