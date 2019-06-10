<?php
   
	session_start();

	$conn = mysqli_connect("localhost", "root",'',"airline");

	if(mysqli_connect_errno()){
		echo 'connction Failed';
	}

	  
	if(isset($_POST['btnLogOut'])){
	  	 	unset($_SESSION['PID']);
			
			header('Location: PassengerLogIn.php');

	}

	if(isset($_POST['btnUpInf'])){
  	 			
		header('Location: PassengerUpdate.php');

	}

	if(isset($_POST['btnBookTick'])){
  	 			
		header('Location: FlightSearch.php');

	}

	if(isset($_POST['btnBookedTick'])){
  	 		
		header('Location: PassengerTicketHistory.php');

	}


  $id = $_SESSION['PID'];


  $query = " SELECT  *
            FROM passenger
             WHERE p_id = '$id' ";


    $result =$result = mysqli_query($conn, $query);
         
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html  >
<head>
	<title>  UserPage</title>
	<link href="css/bootstrap.css" rel="stylesheet" />

	
</head>
<body>

	<div class=" row">
	 		<div class=" col-1"></div>
	 		<div class="col-10">
	 			 <p ><h1 class="text-center">Welcome to our airline system</h1></p>
	 		</div>
	 		<div class=" col-1 mt-4">
	 			<form method="post">
	 				 <button class="btn-sm" name="btnLogOut">Logout</button>
	 			</form>
	 		</div>

	 	</div>



	   <!-- passenger information div starts -->
	 <div class="mt-5">
	 	
	 	<div class=" row">
	 		<div class=" col-5"></div>
	 		<div class="col-2">
	 			<h3><b>Information</b></h3>
	 		</div>

	 	</div>

	 	<div class=" row mt-3">
		 		<div class="col-4">
		 			
		 		</div>
	 			<div class=" col-1">
	 				<table class="table">
					 
					  <tbody>
					  	 <tr>
					     
					      <td> Passenger Id</td>
					       <?php 


					       echo  " <td> " . $row["p_id"].  "  </td> ";
					        ?> 
					    </tr>
					    <tr>

					    <tr>
					     
					      <td> Name</td>
					       <?php 


					       echo  " <td> " . $row["name"].  "  </td> ";
					        ?> 
					    </tr>
					    <tr>
					      
					      <td>Email </td>
					     
					       <?php 


					       echo  " <td> " . $row["Email"].  "  </td> ";
					        ?>
					     
					    </tr>
					    <tr>
					     
					      <td>Passport_Id</td>
					     
					     
					       <?php 


					       echo  " <td> " . $row["passport_number"].  "  </td> ";
					        ?>
					     
					    </tr>

					     <tr>
					     
					      <td>Mobile Number</td>
					      <?php 


					       echo  " <td> " . $row["mobileNumber"].  "  </td> ";
					        ?>
					     
					    </tr>
					     <tr>
					     
					      <td>Adress</td>
					     <?php 


					       echo  " <td> " . $row["address"].  "  </td> ";
					        ?>
					     
					    </tr>

					     <tr>
					     
					      <td>Country</td>
					      <?php 


					       echo  " <td> " . $row["Country"].  "  </td> ";
					        ?>
					     
					     
					    </tr>

					    <tr>
					     
					      <td>Password</td>
					      <?php 


					       echo  " <td> " . $row["password"].  "  </td> ";
					        ?>
					     
					     
					    </tr>

					    
					  </tbody>
					</table>
	 			</div>


	 		</div>
	 </div>

	  <!-- passenger information div ends -->


	<div class="mt-5 mb-5">
		
		 <form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3">
 					 <button  class="btn btn-primary" name="btnUpInf">Update Information </button>
 				</div>
 				
 			</div>

 		</form>


 		 <form method="post" class="mt-3">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3">
 					 <button  class="btn btn-primary" name="btnBookTick">Book ticket </button>
 				</div>
 				
 			</div>

 		</form>

 		 <form method="post" class="mt-3">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3">
 					 <button  class="btn btn-primary" name="btnBookedTick"> Booked tickets </button>
 				</div>
 				
 			</div>

 		</form>

	</div>
		 	
</body>
</html>