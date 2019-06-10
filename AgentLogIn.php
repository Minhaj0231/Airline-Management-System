<?php

  
  session_start();

  $conn = mysqli_connect("localhost", "root",'',"airline");


  if(mysqli_connect_errno()){
    echo 'connction Failed';
  }
  

  if(isset($_POST['btnHome'])){
    header('Location: Home.php'); 
 
  }
    
  
  if(isset($_POST['btnLogIn'])) {
    
    $uname =  $_POST['name'];
    $pass =  $_POST['password'];

    $query = " SELECT  *
            FROM agent
            WHERE name =  '$uname'  AND  password  =    '$pass'  ";


    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){

      $row = mysqli_fetch_assoc($result);

      $_SESSION['AGID'] = $row["ag_id"];
       
        header('Location: AgentHome.php'); 
    }
    
    
    else{

        echo '<h1 style="font-size: 300%" class="text-center text-primary mt-5 mb-5"  > 
              Please Put a valid Username and passoword 
              </h1>';

    }

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
  
  background-image: url("image/agent.jpg");
  background-size: 100% 100% ;

}
.wrapper {
  margin: 195px;
 
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
   <div >
      <form class=" float-right " method="post">
      <button class="btn-sm btn-primary" name="btnHome" > Home </button>
    </form>
    </div>

  <div class="wrapper">

    <form class="form-signin bg-secondary" method="post">
      <h2 class="form-signin-heading text-center"><b>Agent</b><br> Login Form</h2>
      <input type="text" class="form-control" name="name" placeholder="Agent Id" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required="" />
      
      <button class="btn btn-lg btn-primary btn-block" name="btnLogIn">Login</button>
    </form>

  </div>




</body>
</html>











