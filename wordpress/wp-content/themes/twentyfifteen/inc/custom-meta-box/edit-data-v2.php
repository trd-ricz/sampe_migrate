<table class="table borderless">
	<tr>
		<td class="tdleft tdright tdtop text-center" colspan=2>
			<span id="tblSched">WEEKLY SCHEDULE</span>
		</td>
		<td class="tdtop tdright">Start Date: <input type="text" class="start_date" name="start_date[]" value="<?php echo $schedules[0][$x]["start_date"] ?>"></td>
		<td id="cubicle-head" class="tdright tdtop">CUBICLE NO.</td>
	</tr>
	<tr>
		<td class="tdleft tdright text-right" colspan=2>
			<span id="bTeach">Buddy Teacher:</span>
		</td>
		<td class="tdright"><input type="text" class="student_status" name="student_status[]" value="<?php echo $schedules[0][$x]["status"] ?>"></td>
		<td class="tdright cubicle text-center" rowspan=2><input type="text" name="cubicle_no[]" placeholder="Cubicle No." value="<?php echo $schedules[0][$x]["cubicle_no"] ?>"></td>
	</tr>
	<tr>
		<td class="tdleft tdright text-right" colspan=2><input type="text" class="buddy_teacher" name="buddy_teacher[]" value="<?php echo $schedules[0][$x]["buddy_teacher"] ?>"></td>
		<td class="tdright tdbottom">End Date: <input type="text" class="end_date" name="end_date[]" value="<?php echo $schedules[0][$x]["end_date"] ?>"></td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom" colspan=2>Student:</td>
		<td id="time" class="tdright tdbottom text-center" colspan="2">1:30~2:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom student text-center" colspan=2 rowspan="2">
			<input type="text" class="student-name" name="student[]" placeholder="Student Name" value="<?php echo $schedules[0][$x]["name"] ?>" list="schedule_students">
			<input type="text" class="student-weeks" name="student_weeks[]" placeholder="Weeks" value="<?php echo $schedules[0][$x]["student_weeks"] ?>">
			<input type="text" class="student-mm" name="student_mm[]" placeholder="MM" value="<?php echo $schedules[0][$x]["student_mm"] ?>">
			<input type="text" class="student-gc" name="student_gc[]" placeholder="GC" value="<?php echo $schedules[0][$x]["student_gc"] ?>">

			<input type="hidden" class="student-time-1" name="student-time-1[]" value="<?php echo $schedules[0][$x]["student-time-1"] ?>"><input type="hidden" class="student-time-11" name="student-time-11[]" value="<?php echo $schedules[0][$x]["student-time-11"] ?>">
			<input type="hidden" class="student-time-2" name="student-time-2[]" value="<?php echo $schedules[0][$x]["student-time-2"] ?>"><input type="hidden" class="student-time-22" name="student-time-22[]" value="<?php echo $schedules[0][$x]["student-time-22"] ?>">
			<input type="hidden" class="student-time-3" name="student-time-3[]" value="<?php echo $schedules[0][$x]["student-time-3"] ?>"><input type="hidden" class="student-time-33" name="student-time-33[]" value="<?php echo $schedules[0][$x]["student-time-33"] ?>">
			<input type="hidden" class="student-time-4" name="student-time-4[]" value="<?php echo $schedules[0][$x]["student-time-4"] ?>"><input type="hidden" class="student-time-44" name="student-time-44[]" value="<?php echo $schedules[0][$x]["student-time-44"] ?>">
			<input type="hidden" class="student-time-5" name="student-time-5[]" value="<?php echo $schedules[0][$x]["student-time-5"] ?>"><input type="hidden" class="student-time-55" name="student-time-55[]" value="<?php echo $schedules[0][$x]["student-time-55"] ?>">
			<input type="hidden" class="student-time-6" name="student-time-6[]" value="<?php echo $schedules[0][$x]["student-time-6"] ?>"><input type="hidden" class="student-time-66" name="student-time-66[]" value="<?php echo $schedules[0][$x]["student-time-66"] ?>">
			<input type="hidden" class="student-time-7" name="student-time-7[]" value="<?php echo $schedules[0][$x]["student-time-7"] ?>"><input type="hidden" class="student-time-77" name="student-time-77[]" value="<?php echo $schedules[0][$x]["student-time-77"] ?>">
			<input type="hidden" class="student-time-8" name="student-time-8[]" value="<?php echo $schedules[0][$x]["student-time-8"] ?>"><input type="hidden" class="student-time-88" name="student-time-88[]" value="<?php echo $schedules[0][$x]["student-time-88"] ?>">
			<input type="hidden" class="student-time-9" name="student-time-9[]" value="<?php echo $schedules[0][$x]["student-time-9"] ?>"><input type="hidden" class="student-time-99" name="student-time-99[]" value="<?php echo $schedules[0][$x]["student-time-99"] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan="2">
			<input type="text" class="class_type130220" name="class_type130220[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time6"][1] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdright tdbottom text-center">
			<input type="text" name="teacher130220[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time6"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room130220[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time6"][2] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>7:50~8:00 WORD BUCKET TEST</td>
		<td class="tdright tdbottom text-center" colspan=2>Monday~Friday</td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>8:00~8:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>2:30~3:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type8850" name="class_type8850[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time2"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type230320" name="class_type230320[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time7"][1] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher8850[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time2"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room8850[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time2"][2] ?>">
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher230320[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time7"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room230320[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time7"][2] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>Monday~Friday</td>
		<td class="tdright tdbottom text-center" colspan=2>Monday~Friday</td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>9:00~9:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>3:30~4:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type9950" name="class_type9950[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time3"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type330420" name="class_type330420[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time8"][1] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher9950[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time3"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room9950[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time3"][2] ?>">
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher330420[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time8"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room330420[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time8"][2] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>Monday~Friday</td>
		<td class="tdright tdbottom text-center" colspan=2>Monday~Friday</td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>10:00~10:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>4:30~5:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type101050" name="class_type101050[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time4"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" class="for_buddy_teacher class_type430520" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time9"][1] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher101050[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time4"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room101050[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time4"][2] ?>">
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" class="for_buddy_teacher_value" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time9"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room430520[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time9"][2] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>Monday~Friday</td>
		<td class="tdright tdbottom text-center" colspan=2>Monday~Thursday/GRADUATION~Friday</td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>11:00~11:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>5:30~6:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type111150" name="class_type111150[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time5"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" class="class_type530620" name="class_type530620[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time10"][1] ?>">
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher111150[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time5"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room111150[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time5"][2] ?>">
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<input type="text" name="teacher530620[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time10"][0] ?>">
		</td>
		<td class="tdright tdbottom text-center">
			<input type="text" name="room530620[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time10"][2] ?>">
		</td>
	</tr>
</table>
