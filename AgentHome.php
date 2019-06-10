<?php

session_start();

$id = $_SESSION['AGID'];



	if(isset($_POST['btnLogOut'])){

		unset($_SESSION['AGID']);
				
		header('Location: AgentLogIn.php');

	}



	if(isset($_POST['btnUpInf'])){
	  	 				
		header('Location: AgentUpdate.php');

	}

	if(isset($_POST['BookTicket'])){

		$_SESSION['PID'] = $_POST['PassengerId'];
	  	 			
		header('Location: FlightSearch.php');

	}


	if(isset($_POST['Boardpass'])){

			$_SESSION['tk_id'] = $_POST['tkId'];
	  			
			header('Location: BoardingPass.php');

	}

	if(isset($_POST['OBPL'])){

			$_SESSION['FTID'] = $_POST['FlighId'];	  	 	
			
			header('Location: OnBoardPassengerList.php');

	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Agent Home</title>
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

	<div class="mt-5">
		<h3 class="text-center" ><b>AGent Id :  <?php echo " $id "; ?></b></h3>

		<div class="row mt-5">
			<div class="col-5"></div>
			
		</div>

	</div >


	 <form method="post" class="mt-5">
 			<div class="row">
 				<div class="col-5"></div>
 				<div class="col-3">
 					 <button  class="btn btn-primary" name="btnUpInf">Update Information </button>
 				</div>
 				
 			</div>

 		</form>


	<div class=" mt-5">
		<form method="post">
 			<div class="row">
 				<div class="col-5"></div>
 				<div class="col-2"><h3><b>Passenger-Id</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="PassengerId" placeholder="Passenger-Id" required="" autofocus="" />
 				</div>
 				
 			</div>

 			<div class="row">
 				<div class="col-6"></div>
 				<div class="col-2">
 					<button class="btn btn-sm btn-primary" name="BookTicket" >Book Ticket</button>

 				</div>
 				
 				
 			</div>
 			
 		</form>

	</div>

	<div class="mt-5">

		<form method="post">
 			<div class="row">
 				<div class="col-5"></div>
 				<div class="col-2"><h3><b>Ticket-Id</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="tkId" placeholder="Ticket-Id" required="" autofocus="" />
 				</div>
 				
 			</div>

 			<div class="row">
 				<div class="col-6"></div>
 				<div class="col-2">
 					<button class="btn btn-sm btn-primary" name="Boardpass" >Boarding Pass</button>

 				</div>
 				
 				
 			</div>
 			
 		</form>

		
	</div>

	<div class="mt-5">

		<form method="post">
 			<div class="row">
 				<div class="col-5"></div>
 				<div class="col-2"><h3><b>On-board Passenger List</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="FlighId" placeholder="Flight Id" required="" autofocus="" />
 				</div>
 				
 			</div>

 			<div class="row">
 				<div class="col-6"></div>
 				<div class="col-2">
 					<button class="btn btn-sm btn-primary" name="OBPL" >Passenger List</button>

 				</div>
 				
 				
 			</div>
 			
 		</form>

		
	</div>







</body>
</html>