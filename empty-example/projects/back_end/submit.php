<?php 
		if(isset($_POST['submit'])){
		
		include('dbcon.php');
		$supervisor_first_name=$supervisor_last_name=$first_name = $last_name = $attendence =$quality_of_work =$attitude =$dependability =$work_ethic =$overall ="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
				
			
				$first_name = test_input($_POST["first_name"]);
			
				$last_name = test_input($_POST["last_name"]);
				
				$emp_name = $first_name." ".$last_name;
				
				$month = test_input($_POST["month"]);
				$days =  test_input($_POST["days"]);
				$year =  test_input($_POST["year"]);
				
				$emp_hire_date = $month." ".$days." ".$year;
				
				$emp_title = test_input($_POST["emp_title"]);
				
				$emp_department= test_input($_POST["emp_department"]);
				
				$attendence = test_input($_POST["attendence"]);
				
				$quality_of_work = test_input($_POST["quality_of_work"]);
				
				$quantity_of_work = test_input($_POST["quantity_of_work"]);
				
				$attitude = test_input($_POST["attitude"]);
				
				$dependability = test_input($_POST["dependability"]);
				
				$work_ethic = test_input($_POST["work_ethic"]);
				
				$overall = test_input($_POST["overall"]);
				
				$rank =  test_input($_POST["overall"]);
				
				$rank_details =  test_input($_POST["comment"]);
				
				$supervisor_first_name = test_input($_POST["supervisor_first_name"]);
							
				$supervisor_last_name = test_input($_POST["supervisor_last_name"]);
				
				$supervisor_name = $supervisor_first_name." ".$supervisor_last_name;
			
				
				$qry = "INSERT INTO `review_database` (`emp_name`, `emp_hire_date`, `emp_title`, `attendence`, `quality_of_work`, `quantity_of_work`, `attitude`, `dependability`, `work_ethic`, `rank`, `rank_details`, `supervisor_name`, `emp_department`) VALUES ('$emp_name', '$emp_hire_date', '$emp_title', '$attendence','$quality_of_work','$quantity_of_work','$attitude','$dependability','$work_ethic','$rank','$rank_details','$supervisor_name','$emp_department')";
				$run = mysqli_query($con,$qry);
				
				if($run == true){
					?><script>alert("inserted")</script><?php
				}
				
			}
			else{
				echo "wrong request method";
			}

	}
	else echo "not submitted";
	
				
		function test_input($data){
			 $data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
?>
