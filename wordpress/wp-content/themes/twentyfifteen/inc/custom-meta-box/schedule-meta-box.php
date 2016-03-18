<?php

function add_schedules_metaboxes() {
    //new eventsListMetaBox();
    add_meta_box('wpt_schedules', 'Schedules Information',  'create_schedules', 'test_schedule', 'normal', 'high');
    add_meta_box('wpt_schedules_populate', 'Schedules Information Populate',  'populate_schedules', 'test_schedule', 'normal', 'high');
}

function populate_schedules() {

    global $wpdb;
    global $post;


    $fivesdrafts = $wpdb->get_results("SELECT meta_value FROM $wpdb->postmeta WHERE post_id = ". $post->ID ." AND meta_key = '_test_student' ");


//    echo "<pre>";
//    print_r($fivesdrafts);
//    echo "</pre>";

//          print_r($f->meta_value);
//        echo "<br>";

        $fu = unserialize($fivesdrafts[0]->meta_value);
         echo "<pre>";
          print_r($fu);
        echo "</pre>";



//        for ($x = 1; $x <= count($fu); $x++) {
////            echo $fu[$x]["name"];
//            echo $fu[$x]["sched"][0];
////            foreach($fu[$x]["sched"] as $data) {
//////                echo $data;
//////                echo $data[0];
//////                echo $data["sched"][0];
////                echo "<pre>";
////                print_r($data);
////                echo "</pre>";
////                echo "<br/>";
////            }
//
//        }


?>

<?php for ($x = 1; $x <= count($fu); $x++) : ?>
    <div>
       <p>7:50〜8:00</p>
       <p>Student Name = <?php echo $fu[$x]["name"]; ?> </p>
        <p>Teacher = <?php echo $fu[$x]["sched"][0]; ?> </p>
        <p>Class = <?php echo $fu[$x]["sched"][1]; ?> </p>
        <p>Room = <?php echo $fu[$x]["sched"][2]; ?> </p>
   </div>
<?php endfor; ?>

<?php
}

/**
 * Render Form for Events date
 */
function create_schedules() {

    global $post;

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'check_schedule', 'check_schedule_nonce' );
    ?>

    <form method="post">
        <input type="text" name="counter" id="counter" value=""/>
        <input type="button" id="counter_value" name="counter_value" value="Display"/>

        <?php echo date('l jS F (Y-m-d)', strtotime('+5 days')); ?>
    </form>

    <div id="display_forms">

    </div>

    <script type="text/javascript"><!--//--><![CDATA[//><!--

        jQuery("#counter_value").click(function() {
            var counter = jQuery('#counter').val();

//            jQuery("#display_forms").prepend('<input type="hidden" name="other_counter">');

            for (var i= 1; i <= counter; i++) {
                jQuery("#display_forms").append('<input type="text" name="student['+ i +']" placeholder="Student Name"><hr/><label>7:50〜8:00</label><input type="text" name="teacher7508['+ i +']" placeholder="Teacher"> <input type="text" name="class_type7508['+ i +']" placeholder="Class Type"> <input type="text" name="room7508['+ i +']" placeholder="Room"> <br /><label>8:00〜8:50</label><input type="text" name="teacher8850['+ i +']" placeholder="Teacher"> <input type="text" name="class_type8850['+ i +']" placeholder="Class Type"> <input type="text" name="room8850['+ i +']" placeholder="Room"> <br /><label>9:00〜9:50</label><input type="text" name="teacher9950['+ i +']" placeholder="Teacher"> <input type="text" name="class_type9950['+ i +']" placeholder="Class Type"> <input type="text" name="room9950['+ i +']" placeholder="Room"> <br /><label>10:00〜10:50</label><input type="text" name="teacher101050['+ i +']" placeholder="Teacher"> <input type="text" name="class_type101050['+ i +']" placeholder="Class Type"> <input type="text" name="room101050['+ i +']" placeholder="Room"> <br /><label>11:00〜11:50</label><input type="text" name="teacher111150['+ i +']" placeholder="Teacher"> <input type="text" name="class_type111150['+ i +']" placeholder="Class Type"> <input type="text" name="room111150['+ i +']" placeholder="Room"> <br /> <label>1:30〜2:20</label><input type="text" name="teacher130220['+ i +']" placeholder="Teacher"> <input type="text" name="class_type130220['+ i +']" placeholder="Class Type"> <input type="text" name="room130220['+ i +']" placeholder="Room"> <br /> <label>2:30〜3:20</label><input type="text" name="teacher230320['+ i +']" placeholder="Teacher"> <input type="text" name="class_type230320['+ i +']" placeholder="Class Type"> <input type="text" name="room230320['+ i +']" placeholder="Room"> <br /> <label>3:30〜4:20</label><input type="text" name="teacher330420['+ i +']" placeholder="Teacher"> <input type="text" name="class_type330420['+ i +']" placeholder="Class Type"> <input type="text" name="room330420['+ i +']" placeholder="Room"> <br /> <label>4:30〜5:20</label><input type="text" name="teacher430520['+ i +']" placeholder="Teacher"> <input type="text" name="class_type430520['+ i +']" placeholder="Class Type"> <input type="text" name="room430520['+ i +']" placeholder="Room"> <br /><label>5:30〜6:20</label><input type="text" name="teacher530620['+ i +']" placeholder="Teacher"> <input type="text" name="class_type530620['+ i +']" placeholder="Class Type"> <input type="text" name="room530620['+ i +']" placeholder="Room"> <input type="hidden" name="date['+ i +']" value="<?php echo date("Y-m-d") ?>"><br /> <br/> <hr /> <br/>');
            }

            jQuery("#counter").hide();
            jQuery("#counter_value").hide();

        });
        //--><!]]></script>

<?php

}



/**
 * Meta key actual database insertion
 */
function schedules_save($post_id) {

    /**
     * Check if nonce is not set
     */
    if (! isset($_POST['check_schedule_nonce']))
        return $post_id;

    $nonce = $_POST['check_schedule_nonce'];

    /**
     * Verify that the request came from our screen with the proper authorization
     */
    if(! wp_verify_nonce($nonce,'check_schedule'))
        return $post_id;

    //Check the user's permission
    if(! current_user_can('edit_post',$post_id) )
        return $post_id;


//    $studenta = array();
//    $studenta[] = $_POST['student'];
    $studenta = $_POST['student'];
    $teacher78 = $_POST['teacher7508'];
    $class78 = $_POST['class_type7508'];
    $room78 = $_POST['room7508'];

    $sched = array();
    for ($x = 1; $x <= count($studenta); $x++) {
        $data = array(
            $teacher78[$x],
            $class78[$x],
            $room78[$x]
        );

        $sched[$x] = array(
           "name" => $studenta[$x],
            "sched" => $data
        );
    }

    add_post_meta($post_id, '_test_student', $sched);
//    foreach ( $studenta as $student) {
//        if ($student[0]) {
//            add_post_meta($post_id, '_test_student', $studenta);
//        } else {
//            foreach($student as $a) {
//            add_post_meta($post_id++, '_test_student', $a);
//            }
//        }
//    }

//    $teacher78 = array();
//    $teacher78[] = $_POST['teacher7508'];
//
//    foreach ( $teacher78 as $teacher7508) {
//        unset($post_id);
//        global $post;
//        $post_id = $post->ID;
//
//        if ($teacher7508[0]) {
//            add_post_meta($post_id, '_test_teacher_7', $teacher7508[0]);
//        } else {
//            foreach($teacher7508 as $b) {
//                add_post_meta($post_id++, '_test_teacher_7', $b);
//            }
//        }
//    }
//
//    $class_type78 = array();
//    $class_type78[] = $_POST['class_type7508'];
//
//    foreach ($class_type78 as $class_type7508) {
//        unset($post_id);
//        global $post;
//        $post_id = $post->ID;
//
//        if ($class_type7508[0]) {
//            add_post_meta($post_id, '_test_class_type_7', $class_type7508[0]);
//        } else {
//            foreach($class_type7508 as $c) {
//                add_post_meta($post_id++, '_test_class_type_7', $c);
//            }
//        }
//    }
//
//    $room78 = array();
//    $room78[] = $_POST['room7508'];
//
//    foreach ($room78 as $room7508) {
//        unset($post_id);
//        global $post;
//        $post_id = $post->ID;
//
//        if ($room7508[0]) {
//            add_post_meta($post_id, '_test_room_7', $room7508[0]);
//        } else {
//            foreach($room7508 as $d) {
//                add_post_meta($post_id++, '_test_room_7', $d);
//            }
//        }
//    }
//
//    $datea = array();
//    $datea[] = $_POST['date'];
//
//    foreach ($datea as $dateaa) {
//        unset($post_id);
//        global $post;
//        $post_id = $post->ID;
//
//        if ($dateaa[0]) {
//            add_post_meta($post_id, '_start_date', $dateaa[0]);
//        } else {
//            foreach($dateaa as $e) {
//                add_post_meta($post_id++, '_start_date', $e);
//            }
//        }
//    }



//     add_post_meta($post_id, '_test_teacher_8', $teacher);
//    add_post_meta($post_id, '_test_class_type_8',$class_type );
//    add_post_meta($post_id, '_test_room_8', $room);
//
//     add_post_meta($post_id, '_test_teacher_9', $teacher);
//    add_post_meta($post_id, '_test_class_type_9',$class_type );
//    add_post_meta($post_id, '_test_room_9', $room);
//
//     add_post_meta($post_id, '_test_teacher_10', $teacher);
//    add_post_meta($post_id, '_test_class_type_10',$class_type );
//    add_post_meta($post_id, '_test_room_10', $room);
//
//     add_post_meta($post_id, '_test_teacher_11', $teacher);
//    add_post_meta($post_id, '_test_class_type_11',$class_type );
//    add_post_meta($post_id, '_test_room_11', $room);
//
//     add_post_meta($post_id, '_test_teacher_1', $teacher);
//    add_post_meta($post_id, '_test_class_type_1',$class_type );
//    add_post_meta($post_id, '_test_room_1', $room);
//
//     add_post_meta($post_id, '_test_teacher_2', $teacher);
//    add_post_meta($post_id, '_test_class_type_2',$class_type );
//    add_post_meta($post_id, '_test_room_2', $room);
//
//     add_post_meta($post_id, '_test_teacher_3', $teacher);
//    add_post_meta($post_id, '_test_class_type_3',$class_type );
//    add_post_meta($post_id, '_test_room_3', $room);
//
//     add_post_meta($post_id, '_test_teacher_4', $teacher);
//    add_post_meta($post_id, '_test_class_type_4',$class_type );
//    add_post_meta($post_id, '_test_room_4', $room);
//
//     add_post_meta($post_id, '_test_teacher_5', $teacher);
//    add_post_meta($post_id, '_test_class_type_5',$class_type );
//    add_post_meta($post_id, '_test_room_5', $room);

}

add_action('save_post','schedules_save');