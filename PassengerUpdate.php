<?php

  session_start();

	$conn = mysqli_connect("localhost", "root",'',"airline");


  if(mysqli_connect_errno()){
    echo 'connction Failed';
  }
  

  $id = $_SESSION['PID'];


  if(isset($_POST['btnHome'])){
  	header('Location: PassengerHome.php'); 
  }


// name update

  if(isset($_POST['upName'])){
    $cName = $_POST['username'];

  	
  	$query = "UPDATE passenger
  	SET name = '$cName' 
  	WHERE P_id=  '$id' " ;


  	$result = mysqli_query($conn, $query);

  }

 // email update 

  if(isset($_POST['upEmail'])){

  	
  	$cEmail = $_POST['email'];


  	$query2 = "UPDATE passenger
  	SET email = ' $cEmail ' 
  	WHERE P_id=  ' $id ' " ;


  	$result2 = mysqli_query($conn, $query2);

  }


// passport update
  if(isset($_POST['upPasspoetId'])){
  	
  	$cPassportId = $_POST['passport'];

  	
  	$query3 = "UPDATE passenger
  	SET passport_number = ' $cPassportId ' 
  	WHERE P_id=  ' $id ' " ;


  	$result3 = mysqli_query($conn, $query3);

  }


// mobile update

  if(isset($_POST['upMobile'])){
  	
  	$cMobile = $_POST['Mobile'];

  	
  	$query4 = "UPDATE passenger
  	SET mobileNumber = '$cMobile' 
  	WHERE P_id=  '$id' " ;


  	$result4 = mysqli_query($conn, $query4);

  }




   
// addres update


   if(isset($_POST['upAddress'])){ 	

  	$cAddress = $_POST['address'];
 	

  	$query5 = "UPDATE passenger
  	SET address = '$cAddress' 
  	WHERE P_id=  '$id' " ;


  	$result5 = mysqli_query($conn, $query5);

  }

// country update

  if(isset($_POST['upCountry'])){
  	
  	$cCountry = $_POST['Country'];

  	
  	$query6 = "UPDATE passenger
  	SET Country = '$cCountry' 
  	WHERE P_id=  '$id' " ;


  	$result6 = mysqli_query($conn, $query6);

  }


// password Update




 if(isset($_POST['upPassword'])){
  	
  	$cPassword = $_POST['Passward'];


  	$query7 = "UPDATE passenger
  	SET password = '$cPassword' 
  	WHERE P_id=  '$id' " ;


  	$result7 = mysqli_query($conn, $query7);

  }



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>

	<div class="container-fluid bg-dark">
 		<h1  class="text-center text-light"  ><b>Update Your information</b></h1>

 	</div >

 	<form method="post">
		<div class=" row">
		 		
		 		<div class="col-11">
		 			
		 		</div>
		 		<div class=" col-1 mt-4">
		 			<form>
		 				 <button class="btn-sm btn-primary" name="btnHome">Home</button>
		 			</form>
		 		</div>

		</div>

	</form>

 	<div class="mt-4 ml-5">
 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Name</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="username" placeholder="Name" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upName" >Update</button>
 					
 				</div>
 			</div>

 		</form>

 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Email</b></h3></div>
 				<div class="col-2"> 
 					<input type="email"  name="email" placeholder="Email" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upEmail" >Update</button>
 					
 				</div>
 			</div>

 		</form>


 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Passport-Id</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="passport" placeholder="Passport-Id" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upPasspoetId" >Update</button>
 					
 				</div>
 			</div>

 		</form>


 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Mobile Number</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="Mobile" placeholder="Mobile Number" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upMobile" >Update</button>
 					
 				</div>
 			</div>
 		</form>


 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Adress</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="address" placeholder="Address" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upAddress" >Update</button>
 					
 				</div>
 			</div>
 		</form>


 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Country</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="Country" placeholder="Country" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upCountry" >Update</button>
 					
 				</div>
 			</div>
 		</form>


 		

 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Passward</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="Passward" placeholder="***********************" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upPassword" >Update</button>
 					
 				</div>
 			</div>

 		</form>




 	</div>



</body>
</html>