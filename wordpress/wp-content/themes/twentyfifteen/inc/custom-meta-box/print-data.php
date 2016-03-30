<table class="table borderless">
	<tr>
		<td class="tdleft tdright tdtop text-center" colspan=2>
			<span id="tblSched">WEEKLY SCHEDULE</span>
		</td>
		<td class="tdtop tdright">START: <span class="blue"><?php echo date("d M y", strtotime($schedules[0][$x]["start_date"]))?></span></td>
		<td id="cubicle-head" class="tdright tdtop">CUBICLE NO.</td>
	</tr>
	<tr>
		<td class="tdleft tdright text-right" colspan=2>
			<span id="bTeach" class="capital">Buddy Teacher:</span>
		</td>
		<td class="tdright"><span class="red"><?php echo $schedules[0][$x]["status"] ?></span></td>
		<td class="tdright cubicle text-center" rowspan=2><?php echo $schedules[0][$x]["cubicle_no"] ?></td>
	</tr>
	<tr>
		<td class="tdleft tdright text-right" colspan=2><span class="red"><?php echo $schedules[0][$x]["buddy_teacher"] ?></span></td>
		<td class="tdright tdbottom">END: <span class="blue"><?php echo date("d M y", strtotime($schedules[0][$x]["end_date"]))?></span></td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom capital" colspan=2>Student:</td>
		<td id="time" class="tdright tdbottom text-center" colspan="2">1:30~2:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom student text-center" colspan=2 rowspan="2">
			<strong><?php echo $schedules[0][$x]["name"] ?>
			( <?php echo $schedules[0][$x]["student_weeks"] ?> WK/S.
			<span class="red"><?php echo $schedules[0][$x]["student_mm"] ?> MM
			<?php echo $schedules[0][$x]["student_gc"] ?> GC</span> )</strong>
		</td>
		<td class="tdright tdbottom text-center" colspan="2">
			<?php echo $schedules[0][$x]["sched"]["time6"][1] ?>
		</td>
	</tr>
	<tr>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time6"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time6"][2] ?>
		</td>
	</tr>
	<tr>
		<td id="gray" class="tdleft tdright tdbottom text-center" colspan=2>7:50~8:00 WORD BUCKET TEST</td>
		<td class="tdright tdbottom text-center" colspan=2><span class="red">Monday~Friday</span></td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>8:00~8:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>2:30~3:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time2"][1] ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time7"][1] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time2"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time2"][2] ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time7"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time7"][2] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2><span class="red">Monday~Friday</span></td>
		<td class="tdright tdbottom text-center" colspan=2><span class="red">Monday~Friday</span></td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>9:00~9:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>3:30~4:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time3"][1] ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time8"][1] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time3"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time3"][2] ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time8"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time8"][2] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2><span class="red">Monday~Friday</span></td>
		<td class="tdright tdbottom text-center" colspan=2><span class="red">Monday~Friday</span></td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>10:00~10:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>4:30~5:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time4"][1] ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time9"][1] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time4"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time4"][2] ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time9"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time9"][2] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2><span class="red">Monday~Friday</span></td>
		<td class="tdright tdbottom text-center" colspan=2><span class="red">Monday~Thursday/GRADUATION~Friday</span></td>
	</tr>
	<tr>
		<td id="time" class="tdleft tdright tdbottom text-center" colspan=2>11:00~11:50</td>
		<td id="time" class="tdright tdbottom text-center" colspan=2>5:30~6:20</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time5"][1] ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo $schedules[0][$x]["sched"]["time10"][1] ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time5"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time5"][2] ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time10"][0] ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo $schedules[0][$x]["sched"]["time10"][2] ?>
		</td>
	</tr>
</table>
