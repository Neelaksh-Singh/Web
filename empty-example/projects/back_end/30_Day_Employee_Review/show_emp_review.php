<html>

	<head>
		
		<style>
			*{
				box-sizing:border-box;
			}
			body{
				margin:0;
				padding:0;
				
			}
			.body_content{
				
				text-align:center;
				
			}
			.input_content{
				margin:70px;
			}
			h2{
				text-align:center;
				font-size:30px;
				margin:50px;
			}
			
			.emp_review_info{
				
				margin:60px;
			}
			
			table{
				
				border:1px solid black;
			}
			table tr th{
				font-size:15px;
				border:1px solid black;
				padding:10px;
			}
		</style>
	</head>
	<body>
		<h2>Show Employee Review</h2>
		<div class="body_content">
			<div class="input_content">
			<form method="POST" action="show_emp_review.php" class="form">
				<input type="text" name="emp_name" placeholder="Employee Name" value="">
				<input type="submit" name="submit">
			</form>
			</div>
			<div class="emp_review_info">
				
			
		
		<?php
			if(isset($_POST['submit'])){
				$name = test_input($_POST["emp_name"]);
				
				
				showDetails($name);
				
			}
			function test_input($data){
			 $data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
			function showDetails($name){
				include('dbcon.php');
				$sql ="SELECT * FROM `review_database` WHERE `emp_name`='$name' ";
				$run = mysqli_query($con,$sql);
				if(mysqli_num_rows($run)>0){
					$data = mysqli_fetch_assoc($run);
					?>
						<table>
							<tr>
								<th>EMPLOYEE NAME</th>
								<th>EMPLOYEE HIRE DATE</th>
								<th>EMPLOYEE TITLE</th>
								<th>QUALITY OF WORK</th>
								<th>QUANTITY OF WORK</th>
								<th>ATTITUDE</th>
								<th>DEPENDABILITY</th>
								<th>WORK ETHIC</th>
								<th>RANK</th>
								<th>RANK DETAILS</th>
								<th>EMPLOYEE DEPARTMENT</th>
							</tr>
							<tr>
								<td><?php echo $data['emp_name'] ?></td>
								<td><?php echo $data['emp_hire_date'] ?></td>
							
								<td><?php echo $data['emp_title'] ?></td>
							
								<td><?php echo $data['attendence'] ?></td>
							
								<td><?php echo $data['quality_of_work'] ?></td>
							
								<td><?php echo $data['quantity_of_work'] ?></td>
							
								<td><?php echo $data['attitude'] ?></td>
							
								<td><?php echo $data['dependability'] ?></td>
							
								<td><?php echo $data['work_ethic'] ?></td>
							
								<td><?php echo $data['rank'] ?></td>
							
								<td><?php echo $data['rank_details'] ?></td>
							</tr>
						</table>
					<?php
				}
				else{
					?><script>alert("No record found");</script><?php
				}
				
			}
		?>
		</div>
			
		</div>
		
	</body>
</html>
