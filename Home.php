 <?php


 
   if(isset($_POST['btnPassenger'])) {

    
    
    header('Location: FlightSearch.php'); 

  }
  

   if(isset($_POST['btnAgent'])) {

    
    
    header('Location: AgentLogin.php'); 

    

  }



 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Airlne Reservation System</title>

  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.css" rel="stylesheet" />
 
<style type="text/css">
body {
  
  background-image: url("image/airplane1.jpg");
  background-size: 100% 100% ;

}
.wrapper {
  margin: 200px;
}
.form-signin {
  max-width: 380px;
  margin: 0 auto;
  background-color: #fff;
  padding: 15px 40px 50px;
  border: 1px solid #e5e5e5;
  border-radius: 10px;
}
.form-signin .form-signin-heading, .form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
  margin-bottom: 20px;
}
.form-signin .form-control {
  padding: 10px;
}
</style>
</head>
<body>

  <div class="text-center" style="margin-top: 40px" >
    <h1 class="text-danger" ><b>Welcome to our airline</b></h1>
  </div>

  <div class="wrapper">

    

    <form method="post" class="form-signin bg-secondary"  >
      <h2 class="form-signin-heading text-center">You are</h2>

      <button class="btn btn-lg btn-info btn-block" name="btnPassenger">Passenger</button>  
      <button class="btn btn-lg btn-info btn-block" name="btnAgent">Agent</button>
    
    </form>

  </div>





</body>
</html>











