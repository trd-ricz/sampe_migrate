<?php

function add_schedule_v2_metaboxes() {
    add_meta_box('wpt_schedules_info', 'Schedule Information Test', 'pop_info', 'schedule_v2', 'normal', 'high');
    add_meta_box('wpt_schedules', 'How many students you want to create ? Pls. Input an integer',  'create_schedules', 'schedule_v2', 'normal', 'high');
    add_meta_box('wpt_schedules_populate', 'Schedule Information', 'populate_schedules', 'schedule_v2', 'normal', 'high');
}

function pop_info() {
    global $post;

    $schedules = get_post_meta($post->ID, '_schedule_v2');
    wp_nonce_field( 'check_schedule', 'check_schedule_nonce' );
?>

<style>
    .btn {
        padding: 6px 8px;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .schedule-parent {
        /*width: 760px;*/
        /*margin: auto;*/
    }

    .schedule-left, .schedule-right {
        border: 1px solid #333;
        padding: 10px;
    }

    .schedule-left {
        float: left;
        width: 40%;
    }

    .schedule-right {
        float: left;
        width: 40%;
        border-left: 0;
    }

    .box-left {
        float: left;
        width: 50%;

    }

    .box-right {
        float: left;
        width: 49%;
    }

    #clearit {
        clear: both;
        padding-top: 10px;
        border-top: 1px solid #333;
    }

    .hrbg {
        border-color: #333;
        border-top: 0;
    }

    #weekly {
        color: #337ab7;
    }

    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

     .text-right {
        text-align: right !important;
    }

    .text-deco {
        text-decoration: underline;
    }

    #buddyspan {
        display: block;
        margin-top: -15px;
    }

    .small {
        font-size: 13px;
        font-weight: bold;
        margin-right: 10px;
    }

    .skyblue {
        background-color: #337ab7;
        color: #fff;
    }


</style>

<button id='printView' class='btn btn-primary'>
    <span class="dashicons dashicons-image-flip-vertical"></span> Print
</button>

<div class="schedule-parent clearfix">
    <div class="schedule-left text-center">
       <h3 class="" id="weekly">Weekly Schedule</h3>
        <div class="text-right">
            <p class="text-deco">Buddy Teacher:</p>
            <span id="buddyspan">Ralph</span>
        </div>
        <hr class="hrbg" />
        <h2 class=""><span class="small">Student:</span>Ralph (1 WK/S. 5 MM 4 GC)</h2>
        <hr class="hrbg" />
        <p>7:50~8:00 WORD BUCKET TEST</p>
        <hr class="hrbg" />
        <p class="skyblue">8:00~8:50</p>
        <hr class="hrbg" />
        <input type="text" placeholder="CLASS TYPE" list="ctype">
        <input type="text" placeholder="TEACHER" list="intru">
        <input type="text" placeholder="ROOM" list="rooms">
        <hr class="hrbg" />
        <p class="skyblue">9:00~9:50 / Monday~Friday</p>
        <hr class="hrbg" />
        <input type="text" placeholder="CLASS TYPE" list="ctype">
        <input type="text" placeholder="TEACHER" list="intru">
        <input type="text" placeholder="ROOM" list="rooms">
        <hr class="hrbg" />
        <p class="skyblue">10:00~10:50 / Monday~Friday</p>
        <hr class="hrbg" />
        <input type="text" placeholder="CLASS TYPE" list="ctype">
        <input type="text" placeholder="TEACHER" list="intru">
        <input type="text" placeholder="ROOM" list="rooms">
        <hr class="hrbg" />
        <p class="skyblue">11:00~11:50 / Monday~Friday</p>
        <hr class="hrbg" />
        <input type="text" placeholder="CLASS TYPE" list="ctype">
        <input type="text" placeholder="TEACHER" list="intru">
        <input type="text" placeholder="ROOM" list="rooms">

    </div>
    <div class="schedule-right clearfix">
      <div class="box-left">
        <p>START: 01/01/2016</p>
        <p>NEW STUDENT</p>
        <p>END: 01/01/2016</p>
      </div>
      <div class="box-right">
        <h3>CUBICLE NO.</h3>
        <h3>37</h3>
      </div>

      <p class="skyblue" id="clearit">1:30~2:20</p>

      <input type="text" placeholder="CLASS TYPE" list="ctype">
      <input type="text" placeholder="TEACHER" list="intru">
      <input type="text" placeholder="ROOM" list="rooms">
      <hr class="hrbg" />
      <p class="skyblue">2:30~3:20 / Monday~Friday</p>
      <hr class="hrbg" />
      <input type="text" placeholder="CLASS TYPE" list="ctype">
      <input type="text" placeholder="TEACHER" list="intru">
      <input type="text" placeholder="ROOM" list="rooms">
      <hr class="hrbg" />
      <p class="skyblue">3:30~4:20 / Monday~Friday</p>
      <hr class="hrbg" />
      <input type="text" placeholder="CLASS TYPE" list="ctype">
      <input type="text" placeholder="TEACHER" list="intru">
      <input type="text" placeholder="ROOM" list="rooms">
      <hr class="hrbg" />
      <p class="skyblue">4:30~5:20 / Monday~Friday</p>
      <hr class="hrbg" />
      <input type="text" placeholder="CLASS TYPE" list="ctype">
      <input type="text" placeholder="TEACHER" list="intru">
      <input type="text" placeholder="ROOM" list="rooms">
      <hr class="hrbg" />
      <p class="skyblue">5:30~6:20 / Monday~Thursday/GRADUATION~Friday</p>
      <hr class="hrbg" />
      <input type="text" placeholder="CLASS TYPE" list="ctype">
      <input type="text" placeholder="TEACHER" list="intru">
      <input type="text" placeholder="ROOM" list="rooms">
    </div>
</div><!-- end parent-->

<datalist id="rooms">
    <option>RM #1</option>
    <option>RM #2</option>
    <option>RM #3</option>
    <option>RM #4</option>
    <option>RM #5</option>
    <option>RM #6</option>
</datalist>

<datalist id="intru">
    <option>RALPH</option>
    <option>BRYLLE</option>
    <option>JEROME</option>
    <option>ANA</option>
    <option>ANNE</option>
    <option>HANILIN</option>
</datalist>

<datalist id="ctype">
    <option>IT MM</option>
    <option>IT GC</option>
    <option>TED GC</option>
    <option>TED MM</option>
    <option>REVIEW MM</option>
    <option>REVIEW GC</option>
</datalist>

<?php
}

function populate_schedules() {

    global $post;

    $schedules = get_post_meta($post->ID, '_schedule_v2');
    wp_nonce_field( 'check_schedule', 'check_schedule_nonce' );
?>

<?php for ($x = 0; $x < count($schedules[0]); $x++) : ?>
    <input type="text" name="student[]" placeholder="Student Name" value="<?php echo $schedules[0][$x]["name"] ?>">
    <input type="text" name="start_date[]" value="<?php echo $schedules[0][$x]["start_date"] ?>">
    <input type="text" name="end_date[]" value="<?php echo $schedules[0][$x]["end_date"] ?>">
    <hr/>
    <label>8:00〜8:50</label>
    <input type="text" name="teacher8850[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time2"][0] ?>">
    <input type="text" name="class_type8850[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time2"][1] ?>">
    <input type="text" name="room8850[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time2"][2] ?>">
    <br />
    <label>9:00〜9:50</label>
    <input type="text" name="teacher9950[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time3"][0] ?>">
    <input type="text" name="class_type9950[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time3"][1] ?>">
    <input type="text" name="room9950[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time3"][2] ?>">
    <br />
    <label>10:00〜10:50</label><input type="text" name="teacher101050[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time4"][0] ?>">
    <input type="text" name="class_type101050[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time4"][1] ?>">
    <input type="text" name="room101050[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time4"][2] ?>">
    <br />
    <label>11:00〜11:50</label>
    <input type="text" name="teacher111150[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time5"][0] ?>">
    <input type="text" name="class_type111150[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time5"][1] ?>">
    <input type="text" name="room111150[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time5"][2] ?>">
    <br />
    <label>1:30〜2:20</label>
    <input type="text" name="teacher130220[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time6"][0] ?>">
    <input type="text" name="class_type130220[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time6"][1] ?>">
    <input type="text" name="room130220[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time6"][2] ?>">
    <br />
    <label>2:30〜3:20</label>
    <input type="text" name="teacher230320[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time7"][0] ?>">
    <input type="text" name="class_type230320[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time7"][1] ?>">
    <input type="text" name="room230320[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time7"][2] ?>">
    <br />
    <label>3:30〜4:20</label>
    <input type="text" name="teacher330420[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time8"][0] ?>">
    <input type="text" name="class_type330420[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time8"][1] ?>">
    <input type="text" name="room330420[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time8"][2] ?>">
    <br />
    <label>4:30〜5:20</label>
    <input type="text" name="teacher430520[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time9"][0] ?>">
    <input type="text" name="class_type430520[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time9"][1] ?>">
    <input type="text" name="room430520[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time9"][2] ?>">
    <br />
    <label>5:30〜6:20</label>
    <input type="text" name="teacher530620[]" placeholder="Teacher" value="<?php echo $schedules[0][$x]["sched"]["time10"][0] ?>">
    <input type="text" name="class_type530620[]" placeholder="Class Type" value="<?php echo $schedules[0][$x]["sched"]["time10"][1] ?>">
    <input type="text" name="room530620[]" placeholder="Room" value="<?php echo $schedules[0][$x]["sched"]["time10"][2] ?>">
    <hr/>
    <br/>
<?php endfor; ?>

<?php
}

function create_schedules() {

    global $post;

    wp_nonce_field( 'check_schedule', 'check_schedule_nonce' );
    ?>

    <form method="post">
        <input type="text" name="counter" id="counter" value=""/>
        <input type="button" id="counter_value" name="counter_value" value="Display"/>
    </form>

    <div id="display_forms">
    <!--this is where we append the forms by user integer input-->
    </div>

    <script type="text/javascript"><!--//--><![CDATA[//><!--
        jQuery("#counter_value").click(function() {
            var counter = jQuery('#counter').val();

            for (var i= 1; i <= counter; i++) {
                jQuery("#display_forms").append('<input type="text" name="student[]" placeholder="Student Name"> <input type="text" name="start_date[]" value="<?php echo date('m-d-Y'); ?>"> <input type="text" name="end_date[]" value="<?php echo date('m-d-Y', strtotime('+5 days')); ?>"><hr/><label>8:00〜8:50</label><input type="text" name="teacher8850[]" placeholder="Teacher"> <input type="text" name="class_type8850[]" placeholder="Class Type"> <input type="text" name="room8850[]" placeholder="Room"> <br /><label>9:00〜9:50</label><input type="text" name="teacher9950[]" placeholder="Teacher"> <input type="text" name="class_type9950[]" placeholder="Class Type"> <input type="text" name="room9950[]" placeholder="Room"> <br /><label>10:00〜10:50</label><input type="text" name="teacher101050[]" placeholder="Teacher"> <input type="text" name="class_type101050[]" placeholder="Class Type"> <input type="text" name="room101050[]" placeholder="Room"> <br /><label>11:00〜11:50</label><input type="text" name="teacher111150[]" placeholder="Teacher"> <input type="text" name="class_type111150[]" placeholder="Class Type"> <input type="text" name="room111150[]" placeholder="Room"> <br /> <label>1:30〜2:20</label><input type="text" name="teacher130220[]" placeholder="Teacher"> <input type="text" name="class_type130220[]" placeholder="Class Type"> <input type="text" name="room130220[]" placeholder="Room"> <br /> <label>2:30〜3:20</label><input type="text" name="teacher230320[]" placeholder="Teacher"> <input type="text" name="class_type230320[]" placeholder="Class Type"> <input type="text" name="room230320[]" placeholder="Room"> <br /> <label>3:30〜4:20</label><input type="text" name="teacher330420[]" placeholder="Teacher"> <input type="text" name="class_type330420[]" placeholder="Class Type"> <input type="text" name="room330420[]" placeholder="Room"> <br /> <label>4:30〜5:20</label><input type="text" name="teacher430520[]" placeholder="Teacher"> <input type="text" name="class_type430520[]" placeholder="Class Type"> <input type="text" name="room430520[]" placeholder="Room"> <br /><label>5:30〜6:20</label><input type="text" name="teacher530620[]" placeholder="Teacher"> <input type="text" name="class_type530620[]" placeholder="Class Type"> <input type="text" name="room530620[]" placeholder="Room"> <br /> <br/> <hr /> <br/>');
            }

            jQuery("#counter").hide();
            jQuery("#counter_value").hide();

        });
        //--><!]]></script>
<?php
}


function save_schedules($post_id) {

    if (! isset($_POST['check_schedule_nonce']))
        return $post_id;

    $nonce = $_POST['check_schedule_nonce'];

    if(! wp_verify_nonce($nonce, 'check_schedule'))
        return $post_id;

    //Check the user's permission
    if(! current_user_can('edit_post', $post_id) )
        return $post_id;

    $studenta = $_POST['student'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $teacher88 = $_POST['teacher8850'];
    $class88 = $_POST['class_type8850'];
    $room88 = $_POST['room8850'];

    $teacher99 = $_POST['teacher9950'];
    $class99 = $_POST['class_type9950'];
    $room99 = $_POST['room9950'];

    $teacher1010 = $_POST['teacher101050'];
    $class1010 = $_POST['class_type101050'];
    $room1010 = $_POST['room101050'];

    $teacher1111 = $_POST['teacher111150'];
    $class1111 = $_POST['class_type111150'];
    $room1111 = $_POST['room111150'];

    $teacher1302 = $_POST['teacher130220'];
    $class1302 = $_POST['class_type130220'];
    $room1302 = $_POST['room130220'];

    $teacher2303 = $_POST['teacher230320'];
    $class2303 = $_POST['class_type230320'];
    $room2303 = $_POST['room230320'];

    $teacher3304 = $_POST['teacher330420'];
    $class3304 = $_POST['class_type330420'];
    $room3304 = $_POST['room330420'];

    $teacher4305 = $_POST['teacher430520'];
    $class4305 = $_POST['class_type430520'];
    $room4305 = $_POST['room430520'];

    $teacher5306 = $_POST['teacher530620'];
    $class5306 = $_POST['class_type530620'];
    $room5306 = $_POST['room530620'];


    $sched = array();

    // if use [] / then use $x = 0;
    for ($x = 0; $x < count($studenta); $x++) {

        $data2 = array(
            $teacher88[$x],
            $class88[$x],
            $room88[$x]
        );

        $data3 = array(
            $teacher99[$x],
            $class99[$x],
            $room99[$x]
        );

        $data4 = array(
            $teacher1010[$x],
            $class1010[$x],
            $room1010[$x]
        );

        $data5 = array(
            $teacher1111[$x],
            $class1111[$x],
            $room1111[$x]
        );

        $data6 = array(
            $teacher1302[$x],
            $class1302[$x],
            $room1302[$x]
        );

        $data7 = array(
            $teacher2303[$x],
            $class2303[$x],
            $room2303[$x]
        );

        $data8 = array(
            $teacher3304[$x],
            $class3304[$x],
            $room3304[$x]
        );

        $data9 = array(
            $teacher4305[$x],
            $class4305[$x],
            $room4305[$x]
        );

        $data10 = array(
            $teacher5306[$x],
            $class5306[$x],
            $room5306[$x]
        );


        $sched[$x] = array(
           "name" => $studenta[$x],
           "start_date" => $start_date[$x],
           "end_date" => $end_date[$x],
            "sched" => array(
                "time2" => $data2,
                "time3" => $data3,
                "time4" => $data4,
                "time5" => $data5,
                "time6" => $data6,
                "time7" => $data7,
                "time8" => $data8,
                "time9" => $data9,
                "time10" => $data10
            )
        );
    }

    update_post_meta($post_id, '_schedule_v2', $sched);
}

add_action('save_post', 'save_schedules');