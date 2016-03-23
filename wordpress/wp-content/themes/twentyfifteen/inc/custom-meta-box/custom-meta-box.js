jQuery("#counter_value").click(function() {
	var counter = jQuery('#counter').val();

	for (var i= 1; i <= counter; i++) {
		jQuery("#display_forms").append('<div class="schedule-parent clearfix"> <div class="schedule-left text-center"> <h3 class="" id="weekly">Weekly Schedule</h3> <div class="text-right"> <p class="text-deco">Buddy Teacher:</p> <span id="buddyspan">N/A</span> </div> <hr class="hrbg" /> <h2> <span class="small">Student:</span> <input type="text" id="student_input" name="student[]" placeholder="Student Name" list="schedule_students"> </h2> <hr class="hrbg" /> <p>7:50~8:00 WORD BUCKET TEST</p> <hr class="hrbg" /> <p class="skyblue">8:00~8:50</p> <hr class="hrbg" /> <input type="text" name="class_type8850[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher8850[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room8850[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue">9:00~9:50 / Monday~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type9950[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher9950[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room9950[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue">10:00~10:50 / Monday~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type101050[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher101050[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room101050[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue">11:00~11:50 / Monday~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type111150[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher111150[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room111150[]" placeholder="Room" list="schedule_rooms"> </div> <div class="schedule-right clearfix"> <div class="parent-box clearfix"> <div class="box-left">Start Date: <input type="text" name="start_date[]" value="<?php echo date("m-d-Y"); ?>"> <p>NEW STUDENT</p> End Date: <input type="text" name="end_date[]" value="<?php echo date("m-d-Y", strtotime("+5 days")); ?>"> </div> <div class="box-right"> <h3>CUBICLE NO.</h3> <h3></h3> </div> </div> <p class="skyblue text-center" id="clearit">1:30~2:20</p> <input type="text" name="class_type130220[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher130220[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room130220[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue text-center">2:30~3:20 / Monday~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type230320[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher230320[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room230320[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue text-center">3:30~4:20 / Monday~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type330420[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher330420[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room330420[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue text-center">4:30~5:20 / Monday~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room430520[]" placeholder="Room" list="schedule_rooms"> <hr class="hrbg" /> <p class="skyblue text-center">5:30~6:20 / Monday~Thursday/GRADUATION~Friday</p> <hr class="hrbg" /> <input type="text" name="class_type530620[]" placeholder="Class Type" list="schedule_class_type"> <input type="text" name="teacher530620[]" placeholder="Teacher" list="schedule_teachers"> <input type="text" name="room530620[]" placeholder="Room" list="schedule_rooms"> </div></div>');
	}

	jQuery("#counter").hide();
	jQuery("#counter_value").hide();
});

function myFunction() {
	var mywindow = window.open('', '.inside #print_preview');
	mywindow.document.write('<title>Print Preview</title>');
	mywindow.document.write('<style>' +
	'body { -webkit-print-color-adjust: exact;}' +
	'#tblSched {color: blue;font-weight: bold;}' +
	'.table {width: 100%; max-width: 100%; margin-bottom: 20px; border-spacing: 0; border-collapse: collapse; background-color: transparent;}' +
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
	'.student{vertical-align:middle !important;font-size:20px;}' +
	'#tblSched{color:blue;font-weight: bold;}' +
	'#bTeach{text-decoration: underline;}' +
	'#time{background-color: skyblue;}' +
	'.text-right {text-align: right;}' +
	'.text-center {text-align: center;}' +
	'.text-left {text-align: left;}' +
	'</style>');
	//mywindow.document.write('<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/bootstrap.min.css">');
	//mywindow.document.write('<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-meta-box/css/schedule.css">');
	//mywindow.document.write('<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-admin/load-styles.php?c=1&dir=ltr&load=dashicons,admin-bar,wp-admin,buttons,wp-auth-check,media-views,wp-color-picker&ver=4.3">');
	//mywindow.document.write('<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/plugins/advanced-custom-fields/css/global.css?ver=4.4.3">');
	mywindow.document.write(jQuery('.inside #print_preview').html());
	mywindow.document.close(); // necessary for IE >= 10
	mywindow.focus(); // necessary for IE >= 10

			mywindow.print();
			mywindow.close();
}

//jQuery('#schedule_students option').each(function(index) {
//	var id = jQuery(this).val();
//	var name = jQuery(this).text();
//
//	// Do something with the id and name
//	alert('Found ' + name + ' with id ' + id);
//});

jQuery("#student_input[list]").each( function () {
	jQuery(this).val( jQuery(this).attr("list") );
	alert('bitch');
});

//jQuery(document).on('click', '#student_input[list]', function(){
//	var id = jQuery("#student_input").attr("list").val();
//
//	alert(id);
//});

//jQuery(document).on('keypress', '#student_input', function(){
//	alert("hey!");
//});

