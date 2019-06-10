<?php  

	session_start();

	$conn = mysqli_connect("localhost", "root",'',"airline");

	$tkId = $_SESSION['tk_id'] ;

	echo  $tkId;


	if(isset($_POST['btnHome'])){

		unset($_SESSION['tk_id']);
		header('Location: AgentHome.php');

		}


		$query = " UPDATE ticket 
         		SET OnBoard = 1
         		WHERE tk_id = '$tkId' ";


         $result  = mysqli_query($conn, $query);

		$query2 = " SELECT  *
            FROM ticket
             WHERE tk_id = '$tkId' ";
             

         $result2  = mysqli_query($conn, $query2);

         $row = mysqli_fetch_array($result2);

         $fl_sc = $row['sch_id'];


         $query6 = "SELECT  *
         			FROM flight_schedule 
         			WHERE sch_id = '$fl_sc' ";


         $result6 = mysqli_query($conn, $query6);
	
          $row6 = mysqli_fetch_array($result6);


         $waId = $row6['w_id'];


          $query7 = "SELECT  *
         			FROM way
         			WHERE w_id = '$waId' ";


         $result7 =mysqli_query($conn, $query7);

         $row7 = mysqli_fetch_array($result7);










?>

<!DOCTYPE html>
<html  >
<head>
	<title>  ticket page</title>
	<link href="css/bootstrap.css" rel="stylesheet" />

	
</head>
<body class="bg-dark"  >

	<div class=" row">
	 		
	 		<div class="col-11">
	 			
	 		</div>
	 		<div class=" col-1 mt-4">
	 			<form method="post">
	 				 <button class="btn-sm btn-primary" name="btnHome">Home</button>
	 			</form>
	 		</div>

	</div>


	<div class=" row mt-5">
		<div class="col-4">
			
		</div>
		<div class="col-3">
			<h1 class="text-light" > Boarding Pass</h1>
		</div>

	</div>

	<div class="row">
		<div class="col-3">
			
		</div>
		<div class="col-5">




			<table class="table bg-success">
				  <thead>
				    <tr>
				      <th>Ticket Id</th>
				      <th >Price</th>
				      <th >Class</th>
				      <th>From</th>
				      <th >Destination</th>
				      <th >departure time</th>
				      <th>Seat no </th>

				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				     
				      <td><?php  echo $row['tk_id'] ?></td>
				      <td><?php  echo $row['price'] ?></td>
				      <td><?php  echo $row['class'] ?></td>
				      <td><?php  echo $row7['source'] ?></td>
				      <td><?php  echo $row7['destination'] ?></td>
				      <td><?php  echo $row6['departureTime'] ?></td>
				      <td><?php  echo $row['seatNo'] ?></td>

				    </tr>
				   
				  </tbody>
			</table>

		

		</div>
	</div>

 	

 	
 			 	
</body>
</html>