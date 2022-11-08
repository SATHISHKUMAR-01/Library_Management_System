<?php

session_start();
include('config/connect.php');



$name = $email =  $password = ' ';
if (isset($_POST['login'])) {

    
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    
    $query    = "SELECT * FROM admin WHERE email='$email' AND  password='$password'"; 
    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
  
   
    if ($rows == 1) {
        header("Location: add.php");
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Admin - Login</title>
    <?php include('header.php') ?> 
    <style>
        #admin_body{
            background-image: linear-gradient(to right, #292a2a, #273333, #233c3d, #1d4647, #0f4f51);
        }
        
    </style>
    
        
    
</head>
<body id="admin_body">
    <div class="container">
       
       
        <br><br>

        <h1 class="text-light text-center"> Welcome Admin <i class="fa-solid fa-lock text-light"></i> </h1>
        <br><br>
        <div class="card  mx-auto my-3 w-50 p-3 border-success border-3 shadow" id="login_card">
            
            <h1 class="fs-1 text-center text-secondary">--- LOGIN --- </h1> 
            <br>
            <form action="" method="POST" class="m-2">
               
                <div class="mb-3">
                    <label for="email" class="form-label"> <i class="fa-solid fa-envelope"></i> Email: </label>
                    <input type="email" class="form-control shadow border-1 border-success" id="email" name="email" placeholder="example@gmail.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"> <i class="fa-solid fa-lock"></i> Password: </label>
                    <input type="password" class="form-control shadow border-1 border-success" id="password" name="password" required>
                </div>

                
                <div class="pt-3  text-center  w-100">
                    <input type="submit" value="Enter" id="login" name="login" class="btn btn-light btn-outline-success shadow-sm">
                </div>

               
            </form>

        </div>
    </div>
    
   
</body>



</html>