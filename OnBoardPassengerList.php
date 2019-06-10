<?php 
	
	session_start();

	$conn = mysqli_connect("localhost", "root",'',"airline");


	if(isset($_POST['btnHome'])){

		unset($_SESSION['tk_id']);
		header('Location: AgentHome.php');
				
		}

	$flid= $_SESSION['FTID'] ;



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
			<h3 class="text-center"><b> Passenger Lists</b></h3>
		</div>
		
		<div class="row">
			<div class="col-4"> </div>
			<div class="col-5"> 

				<table class="table bg-success">
					  <thead>
					    <tr>
					      <th >P-id</th>
					      <th >Passenger Name</th>
					      <th> Passport Number</th>
					      <th> Seat Number </th>
					    

					    </tr>
					  </thead>


					  <?php

					  	$query = " SELECT  *
	           			FROM ticket
	            		WHERE sch_id = '$flid' and status = 1 ";

         		$result  = mysqli_query($conn, $query);
	 				

					 	 while($row = mysqli_fetch_array($result)){

					 	 		$fl_sc = $row['p_id'];	


					 	 	$query6 = "SELECT  *
		         			FROM passenger 
		         			WHERE p_id = '$fl_sc' ";


		         $result6 = mysqli_query($conn, $query6);
			
		          $row6 = mysqli_fetch_array($result6);

						 	echo '<tbody>
					    <tr>
					     
					      <td>'.$row['tk_id'].'</td>
					      <td>'.$row6['name'].'</td>
					      <td>'.$row6['passport_number'].'</td>
					      <td>'.$row['seatNo'].'</td>					     					      
					    </tr>					   
					  </tbody>';
					 	 			
					 	 			}					

				?>
					  
				</table>
		
			 </div>
		</div>
	</div>

</body>
</html>
