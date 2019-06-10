<?php

	 session_start();

	 $conn = mysqli_connect("localhost", "root",'',"airline");

	 if(mysqli_connect_errno()){
    echo 'connction Failed';
  }



	if(isset($_POST['btnHome'])){



		if(isset($_SESSION['AGID'])){

			unset($_SESSION['PID']);

			header('Location: AgentHome.php'); 
		}

		 else if(isset($_SESSION['PID'])){
			header('Location: PassengerHome.php'); 
		}

		else{
			header('Location: Home.php'); 
		}
		

	}

	if(isset($_POST['btnLogIn'])){


		header('Location: PassengerLogIn.php'); 

	}



	if(isset($_POST['Buyticket'])){

		// echo "button pressed<br>";

		$_SESSION['flightId'] = $_POST["SelectedFlight"] ;
		
		echo " flight selected ".$_SESSION['flightId']." ";


		if(isset($_SESSION['PID'])){


			header('Location: Ticket.php'); 
		}
		else{

			header('Location: PassengerLogIn.php'); 
		}
		
	}




?>


<!DOCTYPE html>
<html  >
<head>
	<title> booking ticket</title>
	<link href="css/bootstrap.css" rel="stylesheet" />

	
</head>
<body >


 	<div class="container-fluid bg-dark">
 		
 		 <div class=" row">
	 		<div class=" col-1"></div>
	 		<div class="col-9">
	 			 <h1  class="text-center text-light"  ><b>Book Your Ticket</b></h1>
	 		</div>

	 		<div class=" col-1 mt-4">
	 			<form method="post">
	 				<button class="btn-sm" name="btnHome">Home</button> 
	 			</form>
	 		</div>
	 		<div class=" col-1 mt-4">


	 			
	 				<form method="post">
	 					<?php 
	 					
	 			if( !isset($_SESSION['PID'])){

	 					echo ' <button class="btn-sm" name="btnLogIn">LogIn</button>  ' ;

	 				}
	 					 			 ?>

	 				 
	 				</form> 

	 			
	 		</div>

	 	</div>


 	</div >
 	

 	<div class="mt-4 ml-5">

 		<form method="post">
 			<!-- from city block starts -->
 			<div class="row">
	 	 		<div class="col-2"> <h3>From City </h3> </div>
	 	 		<div class="col-10 pt-2" >

	 	 			<select name="src">

			 	 		<?php

			 	 			$query = "SELECT DISTINCT source
							            FROM way";
							             
							$result = mysqli_query($conn, $query);

			 	 			while($row = mysqli_fetch_array($result)){

			 	 			$s = $row['source'];
			 	 			echo "<option value= ".$s."> ".$row['source']." </option>";

			 	 			}

	 	 		 		?>
	 	 		
	 	 			</select>

	 	 		 </div>
 	 		
 	 		</div>
 	 		<!-- form city block ends -->


 	 		<!-- to city block starts -->
 	 		<div class="row mt-3" >
	 	 		<div class="col-2"> <h3>To City </h3> </div>
	 	 		<div class="col-10 pt-2" >

	 	 			<select name="dest">

			 	 		<?php

			 	 			$query = "SELECT DISTINCT destination
							            FROM way";
							             
							$result = mysqli_query($conn, $query);

			 	 			while($row = mysqli_fetch_array($result)){

			 	 			$v = $row['destination'];
			 	 			echo "<option value=".$v."> ".$row['destination']." </option>";

			 	 			}

	 	 		 		?>
	 	 		
	 	 			</select>

	 	 		 </div>
 	 		
 	 		</div>

 	 		<!-- to city block starts -->

 	 		<!-- date block starts -->
	 	 	<div class="row mt-3">
		 	 	<div class="col-2"> <h3>Date </h3> </div>
		 	 	<div class="col-10 pt-2" >

		 	 		<input type="date" name="date">

		 	 	</div>
	 	 		
	 	 	</div>

	 	 	<!-- date block ends -->
	 	 	
	 	 	<!-- Class bocks starts -->
	 	 	<div class="row mt-3" >
	 	 		<div class="col-2"> <h3>Class </h3> </div>
	 	 		<div class="col-10 pt-2" >

	 	 			<input type="radio" name="class" value="bcs" checked> Business
 					 <input type="radio" name="class" value="ecs"> Economy
 					 <input type="radio" name="class" value="fcs"> First Class
	 	 		 </div>
 	 		
 	 		</div>

 	 		<!-- Class bocks ends -->

 	 		<!-- Submit button  starts-->
	 	 	<p class="mt-5"> <button class="btn btn-sm btn-primary ml-5" name="Search">Search</button></p>
	 	 	<!-- Submit button  ends-->

 		</form>


 		<!-- showing available flights block starts -->

 		<div class="mt-4 ml-5 mr-5 mb-5">

 			
 			<h3 class="text-center">Select a flight </h3>
			<form method="post"> 
 				<select  name="SelectedFlight"  style="width: 80%"  required="">
 				
 					<?php

		 				if(isset($_POST['Search']))
		 				{


 					

		 					$src = $_POST["src"];
		 					$dest =  $_POST["dest"];
		 					$date = $_POST["date"];
		 					$class = $_POST["class"];

		 					$_SESSION['class'] = $_POST["class"] ;



			 				 $query = "SELECT f.sch_id  as 'sc_id', Count(*) as 'Lticket', f.departureTime as 'Dtime'
			 							from flight_schedule f, ticket t

			 							where f.sch_id = t.sch_id and f.departureDate = '$date' and t.class = '$class' 
			 							and t.status = 0 and f.w_id = (SELECT w_id
											 							from way
											 							where source = '$src' and destination = '$dest')



			 							  group by sc_id ";				           
							             
					

							$result = mysqli_query($conn, $query);




							while($row = mysqli_fetch_array($result) ){

								
									
								echo "<option value=".$row['sc_id']."><h6 class='bg-primary'> Flight Id: ".$row['sc_id']."  Ticket Left: ".$row['Lticket']."  departure time: ".$row['Dtime']."  <h6>  </option>";
				 	 			
							}				
					
						}


					?>

				</select>
 

				<div class="row mt-5">
					<div class="col-4"></div>
					<div > <button class="btn btn-sm btn-primary ml-5" 
						name="Buyticket">Bye ticket</button></div>
				</div>



			</form>
		</div>

		
 		
 	</div>


	 
 	 
</div>


		 			 	
</body>
</html>