<?php /* DISPLAY IF NOT SUBMIT  */
	if(!isset($_POST['submit'])) : ?>
	<form method="post">
		<input type="number" name="num_sched" placeholder="Number of Students"/>
		<input type="submit" name="submit" value="Create"/>
	</form>
<?php endif ?>

<?php if(isset($_POST['submit'])) : ?>
	<button id='printView' class='btn btn-primary'>
		<span class='fa fa-print fa-2x'></span> Print 
	</button>
	<div id='myCarousel' class='table-holder'>
		<table class='table borderless'>
			<tr>
				<td class='tdleft tdright tdtop text-center' colspan=2>
					<span id='tblSched' >WEEKLY SCHEDULE</span>
				</td>
				<td class='tdtop tdright'>START: 01/01/2016</td>
				<td id='cubicle-head' class='tdright tdtop'>CUBICLE NO.</td>
			</tr>
			<tr>
				<td class='tdleft tdright text-right' colspan=2>
					<span id='bTeach'>Buddy Teacher:</span>
				</td>
				<td class='tdright'>NEW STUDENT</td>
				<td class='tdright cubicle text-center' rowspan=2>37</td>
			</tr>
			<tr>
				<td class='tdleft tdright text-right' colspan=2>Ralph</td>
				<td class='tdright tdbottom'>END: 01/01/2016</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom' colspan=2>Student:</td>
				<td id='time' class='tdright tdbottom text-center' colspan='2'>1:30~2:20</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom student text-center' colspan=2 rowspan='2'>Ralph (1 WK/S. 5 MM 4 GC)</td>
				<td class='tdright tdbottom text-center' colspan='2'>
					<input type='text' name='ctype5[]' placeholder='CLASS TYPE' list='ctype'/>
				</td>
			</tr>
			<tr>
				<td class='tdright tdbottom text-center'>
					<input type='text' name='teacher5[]' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' name='room5[]' placeholder='ROOM' list='rooms'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>7:50~8:00 WORD BUCKET TEST</td>
				<td class='tdright tdbottom text-center' colspan=2>Monday~Friday</td>
			</tr>
			<tr>
				<td id='time' class='tdleft tdright tdbottom text-center' colspan=2>8:00~8:50</td>
				<td id='time' class='tdright tdbottom text-center' colspan=2>2:30~3:20</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
				<td class='tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>Monday~Friday</td>
				<td class='tdright tdbottom text-center' colspan=2>Monday~Friday</td>
			</tr>
			<tr>
				<td id='time' class='tdleft tdright tdbottom text-center' colspan=2>9:00~9:50</td>
				<td id='time' class='tdright tdbottom text-center' colspan=2>3:30~4:20</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
				<td class='tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>Monday~Friday</td>
				<td class='tdright tdbottom text-center' colspan=2>Monday~Friday</td>
			</tr>
			<tr>
				<td id='time' class='tdleft tdright tdbottom text-center' colspan=2>10:00~10:50</td>
				<td id='time' class='tdright tdbottom text-center' colspan=2>4:30~5:20</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
				<td class='tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>Monday~Friday</td>
				<td class='tdright tdbottom text-center' colspan=2>Monday~Thursday/GRADUATION~Friday</td>
			</tr>
			<tr>
				<td id='time' class='tdleft tdright tdbottom text-center' colspan=2>11:00~11:50</td>
				<td id='time' class='tdright tdbottom text-center' colspan=2>5:30~6:20</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
				<td class='tdright tdbottom text-center' colspan=2>
					<input type='text' placeholder='CLASS TYPE' list='ctype'/>
				</td>
			</tr>
			<tr>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
				<td class='tdleft tdright tdbottom text-center'>
					<input type='text' placeholder='TEACHER' list='intru'/>
				</td>
				<td class='tdright tdbottom text-center'>
					<input type='text' placeholder='ROOM' list='rooms'/>
				</td>
			</tr>
		</table>
	</div>
<?php endif ?>

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
