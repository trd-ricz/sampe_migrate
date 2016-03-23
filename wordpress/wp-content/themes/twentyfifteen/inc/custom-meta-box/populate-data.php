<div class="schedule-parent clearfix">
	<div class="schedule-left text-center">
		<h3 class="" id="weekly">Weekly Schedule</h3>
		<div class="text-right">
			<p class="text-deco">Buddy Teacher:</p>
			<span id="buddyspan">Ralph</span>
		</div>
		<hr class="hrbg" />
		<h2>
			<span class="small">Student:</span>
			<input type="text" name="student[]" placeholder="Student Name" value="<?php echo $schedules[0][$x]["name"] ?>">
			(1 WK/S. 5 MM 4 GC)
		</h2>
		<hr class="hrbg" />
		<p>7:50~8:00 WORD BUCKET TEST</p>
		<hr class="hrbg" />
		<p class="skyblue">8:00~8:50</p>
		<hr class="hrbg" />
		<input type="text" name="class_type8850[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time2"][1] ?>">
		<input type="text" name="teacher8850[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time2"][0] ?>">
		<input type="text" name="room8850[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time2"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue">9:00~9:50 / Monday~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type9950[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time3"][1] ?>">
		<input type="text" name="teacher9950[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time3"][0] ?>">
		<input type="text" name="room9950[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time3"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue">10:00~10:50 / Monday~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type101050[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time4"][1] ?>">
		<input type="text" name="teacher101050[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time4"][0] ?>">
		<input type="text" name="room101050[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time4"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue">11:00~11:50 / Monday~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type111150[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time5"][1] ?>">
		<input type="text" name="teacher111150[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time5"][0] ?>">
		<input type="text" name="room111150[]" placeholder="Room" list="schedule_rooms" value="<?php echo $schedules[0][$x]["sched"]["time5"][2] ?>">

	</div>
	<div class="schedule-right clearfix">
		<div class="parent-box clearfix">
			<div class="box-left">
				Start Date: <input type="text" name="start_date[]" value="<?php echo $schedules[0][$x]["start_date"] ?>">
				<p>NEW STUDENT</p>
				End Date: <input type="text" name="end_date[]" value="<?php echo $schedules[0][$x]["end_date"] ?>">
			</div>
			<div class="box-right">
				<h3>CUBICLE NO.</h3>
				<h3>37</h3>
			</div>
		</div>

		<p class="skyblue text-center" id="clearit">1:30~2:20</p>

		<input type="text" name="class_type130220[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time6"][1] ?>">
		<input type="text" name="teacher130220[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time6"][0] ?>">
		<input type="text" name="room130220[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time6"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue text-center">2:30~3:20 / Monday~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type230320[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time7"][1] ?>">
		<input type="text" name="teacher230320[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time7"][0] ?>">
		<input type="text" name="room230320[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time7"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue text-center">3:30~4:20 / Monday~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type330420[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time8"][1] ?>">
		<input type="text" name="teacher330420[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time8"][0] ?>">
		<input type="text" name="room330420[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time8"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue text-center">4:30~5:20 / Monday~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type430520[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time9"][1] ?>">
		<input type="text" name="teacher430520[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time9"][0] ?>">
		<input type="text" name="room430520[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time9"][2] ?>">
		<hr class="hrbg" />
		<p class="skyblue text-center">5:30~6:20 / Monday~Thursday/GRADUATION~Friday</p>
		<hr class="hrbg" />
		<input type="text" name="class_type530620[]" placeholder="Class Type" list="schedule_class_type" value="<?php echo $schedules[0][$x]["sched"]["time10"][1] ?>">
		<input type="text" name="teacher530620[]" placeholder="Teacher" list="schedule_teachers" value="<?php echo $schedules[0][$x]["sched"]["time10"][0] ?>">
		<input type="text" name="room530620[]" placeholder="Room" list="schedule_rooms"  value="<?php echo $schedules[0][$x]["sched"]["time10"][2] ?>">
	</div>
</div><!-- end parent-->