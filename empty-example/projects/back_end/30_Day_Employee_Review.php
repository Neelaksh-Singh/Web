<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		
		<form method="POST" action="submit.php">
		
		<div class ="emp_form">
			<div class="form_content">
			<p style="font-size:35px; text-align:center; color:#121212">30 Day Employee Review</p>
			<p>Employee's Name</p>
			<div class="emp_name text">
				<input type="text" class="input_text" placeholder="First Name" name="first_name" required>
				<input type="text" class="input_text" placeholder="Last Name" name="last_name" required>
			</div>
			
			<div class="date">
				<p style="margin-top:40px;">Employee's Hire Date</p>
				
			
				
				<select class="month" name="month">
					<option value="month">Month</option>
					<option value="january">January</option>
					<option value="february">February</option>
				</select>
				
					<select class="days" name="days">
					<option value="days">Days</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				
				
				<select class="year" name="year">
					<option value="year">Year</option>
					<option value="1122">1212</option>
					<option value="2212">2212</option>
				</select>
			</div>
			<p style="margin-top:40px;">Employee's Title </p>
			<div class="title text">
				
				<input type="text"  name="emp_title">
			</div>
			<div class="department">
				<p style="margin-top:40px;">Employee's Department </p>
				<select class="year" name="emp_department">
					<option value="year">Year</option>
					<option value="1122">1212</option>
					<option value="2212">2212</option>
				</select>
			</div>
			<p style="margin-top:40px;">Performance Evaluation</p>
			<div class="performance">
				
				<table class="content_table">
					<tr>
						<th>     </th>
						<th>Very Good</th>
						<th> Good </th>
						<th>Fair </th>	
						<th>Poor</th> 	
						<th>Very Poor</th>
					</tr>
					<tr>
						<td>Attendence</td>
						<td><input type="radio" name="attendence" value="very_good"></td>
						<td><input type="radio" name="attendence" value="good"></td>
						<td><input type="radio" name="attendence" value="fair"></td>
						<td><input type="radio" name="attendence" value="poor"></td>
						<td><input type="radio" name="attendence" value="very_poor"></td>
					</tr>
					<tr>
						<td>Quality of work</td>
						<td><input type="radio" name="quality_of_work" value="very_good"></td>
						<td><input type="radio" name="quality_of_work" value="good"></td>
						<td><input type="radio" name="quality_of_work" value="fair"></td>
						<td><input type="radio" name="quality_of_work" value="poor"></td>
						<td><input type="radio" name="quality_of_work" value="very_poor"></td>
					</tr>
					<tr>
						<td>Quantity of work</td>
						<td><input type="radio" name="quantity_of_work" value="very_good"></td>
						<td><input type="radio" name="quantity_of_work" value="good"></td>
						<td><input type="radio" name="quantity_of_work" value="fair"></td>
						<td><input type="radio" name="quantity_of_work" value="poor"></td>
						<td><input type="radio" name="quantity_of_work" value="very_poor"></td>
					</tr>
					<tr>
						<td>Attitude</td>
						<td><input type="radio" name="attitude" value="very_good"></td>
						<td><input type="radio" name="attitude" value="good"></td>
						<td><input type="radio" name="attitude" value="fair"></td>
						<td><input type="radio" name="attitude" value="poor"></td>
						<td><input type="radio" name="attitude" value="very_poor"></td>
					</tr>
					<tr>
						<td>Dependability</td>
						<td><input type="radio" name="dependability" value="very_good"></td>
						<td><input type="radio" name="dependability" value="good"></td>
						<td><input type="radio" name="dependability" value="fair"></td>
						<td><input type="radio" name="dependability" value="poor"></td>
						<td><input type="radio" name="dependability" value="very_poor"></td>
					</tr>
					<tr>
						<td>Work ethic</td>
						<td><input type="radio" name="work_ethic" value="very_good"></td>
						<td><input type="radio" name="work_ethic" value="good"></td>
						<td><input type="radio" name="work_ethic" value="fair"></td>
						<td><input type="radio" name="work_ethic" value="poor"></td>
						<td><input type="radio" name="work_ethic" value="very_poor"></td>
					</tr>
				</table>
				
			</div>
			<div class="overall_performance">
				<p style="margin-top:40px;">Overall, I would rank this employee's performance as:</p>
				<input type="radio" name="overall" value="very_good">Very good
				<input type="radio" name="overall" value="good"> Good
				<input type="radio" name="overall" value="fair">Fair
				<input type="radio" name="overall" value="poor">Poor
				<input type="radio" name="overall" value="very_poor">Very Poor
			</div>
			<div class="detail">
				<p style="margin-top:40px;">Please go into more detail on why you chose this ranking. </p>
				<textarea name="comment" rows="5" cols="50"></textarea>
			</div>
			
			<p style="margin-top:40px;">Supervisor's Name</p>
			<div class="supervisor_name text">
				
				<input type="text" placeholder="Supervisor First Name" name="supervisor_first_name">
				<input type="text" placeholder="Supervisor Last Name" name="supervisor_last_name">
			
			</div>
			<div class="sigature">
				
			</div>
			<div class="submit">
				<input type="submit" value="Submit Form" name="submit">
			</div>
		</div></div>
		</form>
		<?php 
			
			if(isset($_POST['submit'])){
				
				include('dbcon.php');
				
			}
		
		?>
		
	</body>
</html>
