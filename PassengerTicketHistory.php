<?php  

		session_start();


	 $conn = mysqli_connect("localhost", "root",'',"airline");


	if(isset($_POST['btnHome'])){

			header('Location: PassengerHome.php'); 
	}

	$pid = $_SESSION['PID'];




?>

<!DOCTYPE html>
<html>
<head>
	<title>User Ticket History</title>

	<link href="css/bootstrap.css" rel="stylesheet" />

</head>
<body class="mb-5">

	<div class=" row">
	 		
	 		<div class="col-11">
	 			
	 		</div>
	 		<div class=" col-1 mt-4">
	 			<form method="post">
	 				 <button class="btn-sm btn-primary" name="btnHome">Home</button>
	 			</form>
	 		</div>

	</div>


	<div class="mt-5" >
		<div class="mt-5 mb-5">
			<h3 class="text-center"><b> Booked Tickets</b></h3>
		</div>
		
		<div class="row">
			<div class="col-4"> </div>
			<div class="col-5"> 

				<table class="table bg-success">
					  <thead>
					    <tr>
					      <th scope="col">Ticket Id</th>
					      <th scope="col">Price</th>
					      <th scope="col">Class</th>
					      <th scope="col">Departure Date</th>
					      <th scope="col">departure time</th>
					      

					    </tr>
					  </thead>


					  <?php

	 					
	 					$query = " SELECT  *
	           			FROM ticket
	            		WHERE p_id = '$pid' ";

         		$result  = mysqli_query($conn, $query);


				while($row = mysqli_fetch_array($result)){



					$fl_sc = $row['sch_id'];

					$query6 = "SELECT  *
         			FROM flight_schedule 
         			WHERE sch_id = '$fl_sc' ";


		         $result6 = mysqli_query($conn, $query6);
			
		          $row6 = mysqli_fetch_array($result6);




					 	 			

						 	echo 
					   ' <tr>
					     
					      <td>'.$row['tk_id'].'</td>
					      <td>'.$row["price"].'</td>
					      <td>'.$row["class"].'</td>
					       <td>'.$row6["departureDate"].'</td>
					      <td>'.$row6["departureTime"].'</td>
					 
					    </tr>
					   
					  ';
					 	 			

					 	 			}
					

				?>
					  
				</table>


		
			 </div>
		</div>
	</div>




</body>
</html>
