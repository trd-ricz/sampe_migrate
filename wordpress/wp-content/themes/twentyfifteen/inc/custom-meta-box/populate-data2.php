<table class="table borderless">
	<tr>
		<td class="tdleft tdright tdtop text-center" colspan=2>
			<span id="tblSched">WEEKLY SCHEDULE</span>
		</td>
		<td class="tdtop tdright">Start Date: <input type="text" name="start_date[]" value="<?php echo $schedules[0][$x]["start_date"] ?>"></td>
		<td id="cubicle-head" class="tdright tdtop">CUBICLE NO.</td>
	</tr>
	<tr>
		<td class="tdleft tdright text-right" colspan=2>
			<span id="bTeach">Buddy Teacher:</span>
		</td>
		<td class="tdright"><input type="text" id="student_status" name="student_status[]" value="<?php echo $schedules[0][$x]["status"] ?>"></td>
		<td class="tdright cubicle text-center" rowspan=2>37</td>
	</tr>
	<tr>
		<td class="tdleft tdright text-right" colspan=2>Ralph</td>
		<td class="tdright tdbottom">End Date: <input type="text" name="end_date[]" value="<?php echo $schedules[0][$x]["end_date"] ?>"></td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom" colspan=2>Student:</td>
		<td id="time" class="tdright tdbottom text-center" colspan="2">1:30~2:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom student text-center" colspan=2 rowspan="2"><input type="text" name="student[]" placeholder="Student Name" value="<?php echo $schedules[0][$x]["name"] ?>"></td>
		<td class="tdright tdbottom text-center" colspan="2">
			<input type="text" name="class_type130220[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time6"][1] ?>">
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
			<input type="text" name="class_type8850[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time2"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" name="class_type230320[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time7"][1] ?>">
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
			<input type="text" name="class_type9950[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time3"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" name="class_type330420[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time8"][1] ?>">
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
			<input type="text" name="class_type101050[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time4"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time9"][1] ?>">
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
			<input type="text" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time9"][0] ?>">
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
			<input type="text" name="class_type111150[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time5"][1] ?>">
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<input type="text" name="class_type530620[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time10"][1] ?>">
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
