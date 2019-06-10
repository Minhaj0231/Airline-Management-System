<?php 

	session_start();

	$conn = mysqli_connect("localhost", "root",'',"airline");

	if(isset($_POST['btnHome'])){


		if(isset($_SESSION['AGID'])){

			unset($_SESSION['PID']);

			unset($_SESSION['flightId']);
			unset($_SESSION['class']);

			header('Location: AgentHome.php'); 
		}

		 else if(isset($_SESSION['PID'])){

		 	unset($_SESSION['flightId']);
			unset($_SESSION['class']);


			header('Location: PassengerHome.php'); 
		}

		


		
	}


	$fliId = $_SESSION['flightId'];
	$class = $_SESSION['class'];

	$PID = $_SESSION['PID'];

		echo $fliId;
		echo "<br>";

		echo $class;
		echo "<br>";

		echo $PID;
		echo "<br>";

		$zero = 0;

		$query = " SELECT  min(seatNO) as 'firstseat'
		            FROM ticket
		            WHERE sch_id = '$fliId' and class = '$class' and status = '$zero' ";

        $result  = mysqli_query($conn, $query);
         
        $row =    mysqli_fetch_assoc($result);


        $stNO = $row["firstseat"];

        echo $stNO;


        $query2 = " UPDATE ticket 
		        	SET p_id = '$PID'
		         	WHERE sch_id = '$fliId' and seatNO = '$stNO' ";


        $result2  = mysqli_query($conn, $query2);

        $query3 = " UPDATE ticket 
	         	SET status = 1
	         	WHERE sch_id = '$fliId' and seatNO = '$stNO' ";


         $result3  = mysqli_query($conn, $query3);

         $query4 = "SELECT * 
         			FROM ticket 
         			WHERE sch_id = '$fliId' and seatNO = '$stNO' ";


         $result4  = mysqli_query($conn, $query4);

         $row4 = mysqli_fetch_array($result4);


         $query5 = "SELECT  sch_id
         			FROM ticket 
         			WHERE sch_id = '$fliId' and seatNO = '$stNO' ";


         $result5 = mysqli_query($conn, $query5);

         $row5 = mysqli_fetch_array($result5);

         $fl_sc = $row5['sch_id'];

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
<body class="bg-dark" >

	<div class=" row  mt-4">
	 		
	 		<div class="col-10">
	 			
	 		</div>
	 		<div class=" col-1">
	 			<form method="post">
	 				 <button class="btn-sm" name="btnHome">Home</button>
	 			</form>
	 		</div>

	</div>


	<div class=" row mt-5">
		<div class="col-5">
			
		</div>
		<div class="col-2">
			<h1 class="text-light" > Ticket</h1>
		</div>

	</div>

	<div class="row">
		<div class="col-3">
			
		</div>
		<div class="col-5">
			<table class="table bg-success">
				  <thead>
				    <tr>
				      <th scope="col">Ticket Id</th>
				      <th scope="col">Price</th>
				      <th scope="col">Class</th>
				      <th scope="col">From</th>
				      <th scope="col">Destination</th>
				      <th scope="col">departure time</th>

				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				     
				      <td> <?php  echo $row4['tk_id'] ?></td>
				      <td><?php  echo $row4['price'] ?></td>
				      <td><?php  echo $row4['class'] ?></td>
				       <td><?php  echo $row7['source'] ?></td>
				      <td><?php  echo $row7['destination'] ?></td>
				      <td><?php  echo $row6['departureTime'] ?></td>
				    </tr>
				   
				  </tbody>
			</table>

		

		</div>
	</div>

 	

 	
 			 	
</body>
</html>