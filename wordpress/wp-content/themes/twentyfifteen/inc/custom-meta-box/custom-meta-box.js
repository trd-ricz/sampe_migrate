jQuery("#counter_value").click(function() {
	var counter = jQuery('#counter').val();

	for (var i= 1; i <= counter; i++) {
		jQuery("#display_forms").append('<table class="table borderless"> ' +
        '<tr> ' +
        '<td class="tdleft tdright tdtop text-center" colspan=2>' +
        ' <span id="tblSched">WEEKLY SCHEDULE</span> ' +
        '</td> ' +
        '<td class="tdtop tdright">' +
        'Start Date: <input type="text" id="start_date" name="start_date[]" value="<?php echo date("m-d-Y"); ?>">' +
        '</td> ' +
        '<td id="cubicle-head" class="tdright tdtop">' +
        'CUBICLE NO.' +
        '</td> ' +
        '</tr> ' +
        '<tr> ' +
        '<td class="tdleft tdright text-right" colspan=2> ' +
        '<span id="bTeach">Buddy Teacher:</span> ' +
        '</td> ' +
        '<td class="tdright"><input type="text" id="student_status" name="student_status[]" value="NEW STUDENT"></td>' +
        '<td class="tdright cubicle text-center" rowspan=2>37</td>' +
        '</tr> ' +
        '<tr> ' +
        '<td class="tdleft tdright text-right" colspan=2>Ralph</td> ' +
        '<td class="tdright tdbottom">End Date: <input type="text" id="end_date" name="end_date[]" value="<?php echo date("m-d-Y", strtotime("+5 days")); ?>"></td> ' +
        '</tr> ' +
        '<tr> ' +
        '<td class="tdleft tdright tdbottom" colspan=2>Student:</td> ' +
        '<td id="time" class="tdright tdbottom text-center" colspan="2">1:30~2:20</td> ' +
        '</tr> ' +
        '<tr> ' +
        '<td class="tdleft tdright tdbottom student text-center" colspan=2 rowspan="2">' +
        '<input type="text" name="student[]" placeholder="Student Name" list="schedule_students" onchange="showUser(this.value)"></td> ' +
        '<td class="tdright tdbottom text-center" colspan="2"> ' +
        '<input type="text" name="class_type130220[]" placeholder="Class Type" list="schedule_class_type"> ' +
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
        '<input type="text" name="class_type8850[]" placeholder="Class Type" list="schedule_class_type"> ' +
        '</td> ' +
        '<td class="tdright tdbottom text-center" colspan=2> ' +
        '<input type="text" name="class_type230320[]" placeholder="Class Type" list="schedule_class_type"> ' +
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
        '<input type="text" name="class_type9950[]" placeholder="Class Type" list="schedule_class_type"> ' +
        '</td> ' +
        '<td class="tdright tdbottom text-center" colspan=2> ' +
        '<input type="text" name="class_type330420[]" placeholder="Class Type" list="schedule_class_type"> ' +
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
        '<input type="text" name="class_type101050[]" placeholder="Class Type" list="schedule_class_type"> ' +
        '</td> ' +
        '<td class="tdright tdbottom text-center" colspan=2> ' +
        '<input type="text" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type"> ' +
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
        '<input type="text" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers"> ' +
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
        '<input type="text" name="class_type111150[]" placeholder="Class Type" list="schedule_class_type"> ' +
        '</td> ' +
        '<td class="tdright tdbottom text-center" colspan=2> ' +
        '<input type="text" name="class_type530620[]" placeholder="Class Type" list="schedule_class_type"> ' +
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
	mywindow.document.write(jQuery('#print_preview').html());
	mywindow.document.close(); // necessary for IE >= 10
	mywindow.focus(); // necessary for IE >= 10

			mywindow.print();
			mywindow.close();
}

function showUser(str) {
    if (str == "") {
        //jQuery("#start_date").val("");
        //jQuery("#end_date").val("");
        //return;
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

                    jQuery("#start_date").val(result.start_date);
                    jQuery("#end_date").val(result.end_date);
                    jQuery("#student_status").val(result.student_status);
                    //jQuery("#end_date").val(result.end_date).trigger("change");
                }
            };
            xmlhttp.open("GET", "<?php echo get_template_directory_uri().'/inc/custom-meta-box/getuser.php?q='?>"+str,true);
            xmlhttp.send();
    }
}

//jQuery(document).on('change', '#end_date', function() {
//    jQuery("#student_status").val("OLD STUDENT");
//});
