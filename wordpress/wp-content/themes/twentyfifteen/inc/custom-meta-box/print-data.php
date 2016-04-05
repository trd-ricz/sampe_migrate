<?php if ( empty($schedules[0][$x]["start_date"]) && empty($schedules[0][$x]["status"]) && empty($schedules[0][$x]["buddy_teacher"])
&& empty($schedules[0][$x]["cubicle_no"]) && empty($schedules[0][$x]["end_date"]) && empty($schedules[0][$x]["name"])
&& empty($schedules[0][$x]["student_weeks"]) && empty($schedules[0][$x]["student_mm"]) && empty($schedules[0][$x]["student_gc"])
&& empty($schedules[0][$x]["student-time-1"]) && empty($schedules[0][$x]["student-time-2"]) && empty($schedules[0][$x]["student-time-3"])
&& empty($schedules[0][$x]["student-time-4"]) && empty($schedules[0][$x]["student-time-5"]) && empty($schedules[0][$x]["student-time-6"])
&& empty($schedules[0][$x]["student-time-7"]) && empty($schedules[0][$x]["student-time-8"]) && empty($schedules[0][$x]["student-time-9"])
&& empty($schedules[0][$x]["student-time-11"]) && empty($schedules[0][$x]["student-time-22"]) && empty($schedules[0][$x]["student-time-33"])
&& empty($schedules[0][$x]["student-time-44"]) && empty($schedules[0][$x]["student-time-55"]) && empty($schedules[0][$x]["student-time-66"])
&& empty($schedules[0][$x]["student-time-77"]) && empty($schedules[0][$x]["student-time-88"]) && empty($schedules[0][$x]["student-time-99"])
&& empty($schedules[0][$x]["sched"]["time6"][1]) && empty($schedules[0][$x]["sched"]["time6"][0]) && empty($schedules[0][$x]["sched"]["time6"][2])
&& empty($schedules[0][$x]["sched"]["time2"][1]) && empty($schedules[0][$x]["sched"]["time7"][1]) && empty($schedules[0][$x]["sched"]["time2"][0])
&& empty($schedules[0][$x]["sched"]["time2"][2]) && empty($schedules[0][$x]["sched"]["time7"][0]) && empty($schedules[0][$x]["sched"]["time7"][2])
&& empty($schedules[0][$x]["sched"]["time3"][1]) && empty($schedules[0][$x]["sched"]["time8"][1]) && empty($schedules[0][$x]["sched"]["time3"][0])
&& empty($schedules[0][$x]["sched"]["time3"][2]) && empty($schedules[0][$x]["sched"]["time8"][0]) && empty($schedules[0][$x]["sched"]["time8"][2])
&& empty($schedules[0][$x]["sched"]["time4"][1]) && empty($schedules[0][$x]["sched"]["time9"][1]) && empty($schedules[0][$x]["sched"]["time4"][0])
&& empty($schedules[0][$x]["sched"]["time4"][2]) && empty($schedules[0][$x]["sched"]["time9"][0]) && empty($schedules[0][$x]["sched"]["time9"][2])
&& empty($schedules[0][$x]["sched"]["time5"][1]) && empty($schedules[0][$x]["sched"]["time10"][1]) && empty($schedules[0][$x]["sched"]["time5"][0])
&& empty($schedules[0][$x]["sched"]["time5"][2]) && empty($schedules[0][$x]["sched"]["time10"][0]) && empty($schedules[0][$x]["sched"]["time10"][2]) ) : ?>

<?php else: ?>
<table class="table borderless">
	<tr>
		<td class="tdleft tdright tdtop text-center" colspan=2>
			<span id="tblSched"><?php echo $post->post_title; ?> WEEKLY SCHEDULE</span>
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
			<span class="red"><?php echo ($schedules[0][$x]["student_mm"]) ? $schedules[0][$x]["student_mm"] : 0 ?> MM
			<?php echo ($schedules[0][$x]["student_gc"]) ? $schedules[0][$x]["student_gc"] : 0 ?> GC</span> )</strong>
		</td>
		<td class="tdright tdbottom text-center" colspan="2">
			<?php echo ($schedules[0][$x]["sched"]["time6"][1]) ? $schedules[0][$x]["sched"]["time6"][1] : "&nbsp;" ?>
		</td>
	</tr>
	<tr>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time6"][0]) ? $schedules[0][$x]["sched"]["time6"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time6"][2]) ? $schedules[0][$x]["sched"]["time6"][2] : "&nbsp;" ?>
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
			<?php echo ($schedules[0][$x]["sched"]["time2"][1]) ? $schedules[0][$x]["sched"]["time2"][1] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo ($schedules[0][$x]["sched"]["time7"][1]) ? $schedules[0][$x]["sched"]["time7"][1] : "&nbsp;" ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time2"][0]) ? $schedules[0][$x]["sched"]["time2"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time2"][2]) ? $schedules[0][$x]["sched"]["time2"][2] : "&nbsp;" ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time7"][0]) ? $schedules[0][$x]["sched"]["time7"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time7"][2]) ? $schedules[0][$x]["sched"]["time7"][2] : "&nbsp;" ?>
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
			<?php echo ($schedules[0][$x]["sched"]["time3"][1]) ? $schedules[0][$x]["sched"]["time3"][1] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo ($schedules[0][$x]["sched"]["time8"][1]) ? $schedules[0][$x]["sched"]["time8"][1] : "&nbsp;" ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time3"][0]) ? $schedules[0][$x]["sched"]["time3"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time3"][2]) ? $schedules[0][$x]["sched"]["time3"][2] : "&nbsp;" ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time8"][0]) ? $schedules[0][$x]["sched"]["time8"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time8"][2]) ? $schedules[0][$x]["sched"]["time8"][2] : "&nbsp;" ?>
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
			<?php echo ($schedules[0][$x]["sched"]["time4"][1]) ? $schedules[0][$x]["sched"]["time4"][1] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo ($schedules[0][$x]["sched"]["time9"][1]) ? $schedules[0][$x]["sched"]["time9"][1] : "&nbsp;" ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time4"][0]) ? $schedules[0][$x]["sched"]["time4"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time4"][2]) ? $schedules[0][$x]["sched"]["time4"][2] : "&nbsp;" ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time9"][0]) ? $schedules[0][$x]["sched"]["time9"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time9"][2]) ? $schedules[0][$x]["sched"]["time9"][2] : "&nbsp;" ?>
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
			<?php echo ($schedules[0][$x]["sched"]["time5"][1]) ? $schedules[0][$x]["sched"]["time5"][1] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center" colspan=2>
			<?php echo ($schedules[0][$x]["sched"]["time10"][1]) ? $schedules[0][$x]["sched"]["time10"][1] : "&nbsp;" ?>
		</td>
	</tr>
	<tr>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time5"][0]) ? $schedules[0][$x]["sched"]["time5"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time5"][2]) ? $schedules[0][$x]["sched"]["time5"][2] : "&nbsp;" ?>
		</td>
		<td class="tdleft tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time10"][0]) ? $schedules[0][$x]["sched"]["time10"][0] : "&nbsp;" ?>
		</td>
		<td class="tdright tdbottom text-center">
			<?php echo ($schedules[0][$x]["sched"]["time10"][2]) ? $schedules[0][$x]["sched"]["time10"][2] : "&nbsp;" ?>
		</td>
	</tr>
</table>
<?php endif; ?>