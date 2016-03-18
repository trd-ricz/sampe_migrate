<?php

if (isset($_POST['submit'])) {
    $list = array();

    for($i = 0; $i <= count($_POST['teacher7508']); $i++) {
        $list[$i] = array($_POST['teacher7508'][$i], $_POST['class_type7508'][$i], $_POST['room7508'][$i],
            $_POST['teacher8850'][$i], $_POST['class_type8850'][$i], $_POST['room8850'][$i],
            $_POST['teacher9950'][$i], $_POST['class_type9950'][$i], $_POST['room9950'][$i],
            $_POST['teacher101050'][$i], $_POST['class_type101050'][$i], $_POST['room101050'][$i],
            $_POST['teacher111150'][$i], $_POST['class_type111150'][$i], $_POST['room111150'][$i],
            $_POST['teacher130220'][$i], $_POST['class_type130220'][$i], $_POST['room130220'][$i],
            $_POST['teacher230320'][$i], $_POST['class_type230320'][$i], $_POST['room230320'][$i],
            $_POST['teacher330420'][$i], $_POST['class_type330420'][$i], $_POST['room330420'][$i],
            $_POST['teacher430520'][$i], $_POST['class_type430520'][$i], $_POST['room430520'][$i],
            $_POST['teacher530620'][$i], $_POST['class_type530620'][$i], $_POST['room530620'][$i]);
    }

    foreach ($list as $fields) {
        echo "<pre>";
        var_dump($fields);
        echo "</pre>";
        die();
    }
}
?>

<form method="post">
    <label>7:50〜8:00</label><input type="text" name="teacher7508[]" placeholder="Teacher"> <input type="text" name="class_type7508[]" placeholder="Class Type"> <input type="text" name="room7508[]" placeholder="Room"> <br /><label>8:00〜8:50</label><input type="text" name="teacher8850[]" placeholder="Teacher"> <input type="text" name="class_type8850[]" placeholder="Class Type"> <input type="text" name="room8850[]" placeholder="Room"> <br /><label>9:00〜9:50</label><input type="text" name="teacher9950[]" placeholder="Teacher"> <input type="text" name="class_type9950[]" placeholder="Class Type"> <input type="text" name="room9950[]" placeholder="Room"> <br /><label>10:00〜10:50</label><input type="text" name="teacher101050[]" placeholder="Teacher"> <input type="text" name="class_type101050[]" placeholder="Class Type"> <input type="text" name="room101050[]" placeholder="Room"> <br /><label>11:00〜11:50</label><input type="text" name="teacher111150[]" placeholder="Teacher"> <input type="text" name="class_type111150[]" placeholder="Class Type"> <input type="text" name="room111150[]" placeholder="Room"> <br /><label>1:30〜2:20</label><input type="text" name="teacher130220[]" placeholder="Teacher"> <input type="text" name="class_type130220[]" placeholder="Class Type"> <input type="text" name="room130220[]" placeholder="Room"> <br /><label>2:30〜3:20</label><input type="text" name="teacher230320[]" placeholder="Teacher"> <input type="text" name="class_type230320[]" placeholder="Class Type"> <input type="text" name="room230320[]" placeholder="Room"> <br /><label>3:30〜4:20</label><input type="text" name="teacher330420[]" placeholder="Teacher"> <input type="text" name="class_type330420[]" placeholder="Class Type"> <input type="text" name="room330420[]" placeholder="Room"> <br /><label>4:30〜5:20</label><input type="text" name="teacher430520[]" placeholder="Teacher"> <input type="text" name="class_type430520[]" placeholder="Class Type"> <input type="text" name="room430520[]" placeholder="Room"> <br /> <label>5:30〜6:20</label><input type="text" name="teacher530620[]" placeholder="Teacher"> <input type="text" name="class_type530620[]" placeholder="Class Type"> <input type="text" name="room530620[]" placeholder="Room"
        >er="Room">

    <input type="submit" name="submit">
</form>



<label>7:50〜8:00</label><input type="text" name="teacher7508[]" placeholder="Teacher"> <input type="text" name="class_type7508[]" placeholder="Class Type"> <input type="text" name="room7508[]" placeholder="Room"> <br /><label>8:00〜8:50</label><input type="text" name="teacher8850[]" placeholder="Teacher"> <input type="text" name="class_type8850[]" placeholder="Class Type"> <input type="text" name="room8850[]" placeholder="Room"> <br /><label>9:00〜9:50</label><input type="text" name="teacher9950[]" placeholder="Teacher"> <input type="text" name="class_type9950[]" placeholder="Class Type"> <input type="text" name="room9950[]" placeholder="Room"> <br />10:00〜10:50</label><input type="text" name="teacher101050[]" placeholder="Teacher"> <input type="text" name="class_type101050[]" placeholder="Class Type"> <input type="text" name="room101050[]" placeholder="Room"> <br />11:00〜11:50</label><input type="text" name="teacher111150[]" placeholder="Teacher"> <input type="text" name="class_type111150[]" placeholder="Class Type"> <input type="text" name="room111150[]" placeholder="Room"> <br />1:30〜2:20</label><input type="text" name="teacher130220[]" placeholder="Teacher"> <input type="text" name="class_type130220[]" placeholder="Class Type"> <input type="text" name="room130220[]" placeholder="Room"> <br />2:30〜3:20</label><input type="text" name="teacher230320[]" placeholder="Teacher"> <input type="text" name="class_type230320[]" placeholder="Class Type"> <input type="text" name="room230320[]" placeholder="Room"> <br />3:30〜4:20</label><input type="text" name="teacher330420[]" placeholder="Teacher"> <input type="text" name="class_type330420[]" placeholder="Class Type"> <input type="text" name="room330420[]" placeholder="Room"> <br />4:30〜5:20	</label><input type="text" name="teacher430520[]" placeholder="Teacher"> <input type="text" name="class_type430520[]" placeholder="Class Type"> <input type="text" name="room430520[]" placeholder="Room"> <br />5:30〜6:20</label><input type="text" name="teacher530620[]" placeholder="Teacher"> <input type="text" name="class_type530620[]" placeholder="Class Type"> <input type="text" name="room530620[]" placeholder="Room">
