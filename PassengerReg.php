<?php


	if(isset($_POST['btnHome'])){

		header('Location: Home.php'); 

	}



	$conn = mysqli_connect("localhost", "root",'',"airline");

	$query = " SELECT  max(p_id) as 'max'
            FROM passenger ";


    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result);

   	$pass_id =  $row['max'];
    $pass_id++;
   

	if(isset($_POST['btnSubmit'])){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$passportId = $_POST['passport'];
		$MobileNO = $_POST['Mobile'];
		$address = $_POST['address'];
		$Country = $_POST['Country'];
		$password = $_POST['Passward'];


		$query2 = "INSERT INTO passenger (p_id, name, passport_number, Email, mobileNumber, address, Country, password )
					VALUES ('$pass_id', '$name', '$passportId','$email', '$MobileNO', '$address', '$Country', '$password')";


		$result2 = mysqli_query($conn, $query2); 

		header('Location: Home.php'); 

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
 		
 		 <div class=" row">
	 		<div class=" col-1"></div>
	 		<div class="col-9">
	 			 <h1  class="text-center text-light"  ><b>Please fill up the form</b></h1>
	 		</div>
	 		<div class=" col-1 mt-3">
	 			<form method="post">
	 				 <button class="btn-sm" name="btnHome">Home</button>
	 			</form>
	 		</div>
	 		

	 	</div>


 	</div >
 	

	

 	<div class="mt-4 ml-5">
 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Name</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="username" placeholder="Name" required="" autofocus="" />
 				</div>
 			</div>


 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Email</b></h3></div>
 				<div class="col-5"> 
 					<input type="email"  name="email" placeholder="Email" required="" autofocus="" />
 				</div>
 			</div>


 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Passport-Id</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="passport" placeholder="Passport-Id" required="" autofocus="" />
 				</div>
 			</div>

 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Mobile Number</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="Mobile" placeholder="Mobile Number" required="" autofocus="" />
 				</div>
 			</div>

 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Adress</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="address" placeholder="Address" required="" autofocus="" />
 				</div>
 			</div>


 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Country</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="Country" placeholder="Country" required="" autofocus="" />
 				</div>
 			</div>


 			


 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Passward</b></h3></div>
 				<div class="col-5"> 
 					<input type="text"  name="Passward" placeholder="***********************" required="" autofocus="" />
 				</div>
 			</div>



 			<div class=" row">
 				<div class="col-2"></div>
 				<div class="col-5">
 					<button class="btn btn-lg btn-primary btn-block" name="btnSubmit">Submit</button>
 				</div>
 				<div class="col-5"></div>
 			</div>


 		</form>

 	</div>



</body>
</html>