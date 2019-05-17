<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		
	
		<div class="logo" style='text-align:center; padding:20px; font-size:2.5rem'><p>Scholarship Application Form</p></div>
		
		<form method="POST" action="upload.php">
			
		<div class ="form">
			<div style="text-align:center;"><img src="image_crest.png"></div>
			<p>Instructions for Application - Academic Year 2018-2019</p>
		
			<ol>
				<li>The deadline for 2018-2019 scholarship application: March 30, 2018. Applications received after March 30 will be considered on a funds available basis.</li>
				<li>Only completed applications will be considered. Do Not Leave Items Blank.</li>
				<li>Attach a current copy of your high school and/or college transcripts.</li>
				<li>Two signed letters of recommendation (from non-relatives) must be attached to this application.</li>
			</ol>
		
			<p align="justify">Consideration for any scholarship award is based on a point system including GPA, participation in extra-curricular activities, school organizations and community service. This will be a four semester scholarship, and you must maintain criteria set in the guidelines. </p>
			
		
		
			<div class="applicant_data">
				
				<div><p>Applicant Data</p></div>
				
				
				<div class="input_block">
					<div>
						<p>Last Name, First Name, MI </p>
						<input type="text" placeholder="name" name="name" required>
					</div>
					<div>
						<p>Address</p>
						<input type="text" placeholder="address" name="address">
					</div>
				</div>
				
				<div class="input_block">
					<div><p>Permanent Home Phone </p>
					<input type="text" placeholder="phone no." name="phone"></div>
					<div><p>Intended major at University </p>
					<input type="text" placeholder="" name="detail"></div>
				</div>
				
				<div class="input_block">
					<div><p>At which location will you be attending?</p>
					<input type="text" placeholder="location" name="location"></div>
				</div>
			</div>
			
			
			
			
			
			
			<div class="high_School_education">
				
				<div><p>High School Education</p></div>
				
				
				<div class="input_block">
					<div><p>High school attended</p>
					<input type="text"  name="high_school_name"></div>
					<div><p>Graduation date</p>
					<input type="text"  name="graduation_date"></div>
				</div>
				
				<div class="input_block">
					<div><p>Current cumulative GPA / Scale</p>
					<input type="text"name="gpa"></div>
					<div><p>Ranking in graduating class (%) </p>
					<input type="text" name="ranking"></div>
				</div>
				
		
			<div class="button" style=" justify-content: right; margin-right:40px;"><button>next</button></div>
		
			</div>
		
		</form>
		
	</body>
</html>
