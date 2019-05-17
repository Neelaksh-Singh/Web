<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		
	
		<div class="logo"><h2>University Name</h2></div>
		
	<form method="POST" action="upload.php">
			
		<div class ="enroll_form">
			<p style="font-size:30px;">University Enrollment Form</p>
			
			<p>Please fill in your details below.</p>
			<h4 style="margin:40px 0px;">Student Information:</h4>
			
			<div class="date">
				<p>Anticipated Start Date*</p>
				<select class="month">
					<option value="month">Month</option>
					<option value="january">January</option>
					<option value="february">February</option>
				</select>
				<select class="days">
					<option value="days">Days</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<select class="year">
					<option value="year">Year</option>
					<option value="1122">1212</option>
					<option value="2212">2212</option>
				</select>
			</div>
			<p style="margin-top:25px;">Name</p>
			<div class="std_name input_block">
				
				<input type="text" placeholder="first_name" name="first_name" required>
				<input type="text" placeholder="last_name" name="last_name" required>
			
			</div>
			<p>Phone</p>
			<div class="phone input_block">
				
				<input type="text" placeholder="mobile_number" name="mobile_number">
			</div>
			<p>Email</p>
			<div class="email input_block">
				
				<input type="text" placeholder="email" name="email">
			</div>
			<p>Address</p>
			<div class="address input_block ">
				
				<input type="text" placeholder="address" name="address">
				<input type="text" placeholder="address" name="address">
			</div>
			
			<div class="info  ">
				<input type="text" placeholder="city" name="city">
				<input type="text" placeholder="state" name="state">
				<input type="text" placeholder="ZIP_code" name="zip_code">
			</div>
			
			<div class="date">
				<p>Birthday</p>
				<select class="month">
					<option value="month">Month</option>
					<option value="january">January</option>
					<option value="february">February</option>
				</select>
				<select class="days">
					<option value="days">Days</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<select class="year">
					<option value="year">Year</option>
					<option value="1122">1212</option>
					<option value="2212">2212</option>
				</select>
			</div>
			<p>Proof of identity (e.g. birth certificate, Medicare card, health care card)*</p>
				
			
			<div class="identity ">
				<input type="file" name="identity">
			</div>
			
			
			<h4>Background Information:</h4>
			
			
			<p>Enrollment Status*</p>
				
			<div class="enroll_status ">
				<input type="radio" name="time" value="full_time">Full Time<br>
				<input type="radio" name="time" value="part_time">Part Time
				
			</div>
				<p>High School Name*</p>
			<div class="high_school_name input_block">
			
				<input type="text" placeholder="high_school_name" name="high_school_name">
			</div>
			<p>High School Address*</p>
			<div class="address input_block">
				
				<input type="text" placeholder="address" name="address">
				<input type="text" placeholder="address" name="address">
			</div>
			
			<div class="info">
				<input type="text" placeholder="city" name="city">
				<input type="text" placeholder="state" name="state">
				<input type="text" placeholder="ZIP_code" name="zip_code">
			</div>
			
			<p>GPA*</p>
			<div class="gpa input_block">
				
				<input type="text" placeholder="gpa" name="gpa">
			</div>
			<p>Diploma Type*</p>
			<div class="diploma_type input_block">
				
				<input type="text" placeholder="diploma_type" name="diploma_type">
			</div>
				<p>High School Transcripts*</p>
			<div class="identity">
			
				<input type="file" name="identity">
			</div>
			<p>Medical Allergies*</p>
			<div class="medical_allergies* input_block">
				
				<input type="text" placeholder="medical_allergies*" name="dmedical_allergies*">
			</div>
			<p>Parent/Guardian Name*</p>
			<div class="parent_name input_block">
				
				<input type="text" placeholder="first_name" name="first_name">
				<input type="text" placeholder="last_name" name="last_name">
			</div>
			
			<p>Parent/Guardian Company*</p>
			<div class="parent_company input_block">
				
				<input type="text" placeholder="parent_company" name="parent_company">
			</div>
				<p>Parent/Guardian Phone*</p>
			<div class="parent_phone input_block">
			
				<input type="text" placeholder="parent_phone" name="parent_phone">
			</div>
				<p>Parent/Guardian Email*</p>
			<div class="parent_email input_block">
			
				<input type="text" placeholder="parent_email" name="parent_email">
			</div>
			
			<div class="submit">
				<input type="submit" value="Submit Form" name="submit">
			</div>
		</div>
	</form>
	
		
	</body>
</html>
