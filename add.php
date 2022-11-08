<?php

session_start();
include('config/connect.php');


/*
$name = $email =  $password = ' ';
if (isset($_POST['login'])) {

    
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    
    $query    = "SELECT username FROM login WHERE email='$email' AND  password='$password'"; 
    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
  
    $name = $result->fetch_array()['username'];

    if ($rows == 1) {
        $_SESSION['name'] = $name; 
        $_SESSION['email'] = $email;
        header("Location: home.php");
    } 
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Add a Book</title>
    <?php include('header.php') ?> 
    <style>
        #add_body{
            background-image: linear-gradient(to right, #292a2a, #273333, #233c3d, #1d4647, #0f4f51);
        }
        
    </style>
    
        
    
</head>
<body id="add_body">
    <div class="container text-light">
 
    <br> <br>
    <h3> Add a Book </h3>
    <hr>

    <form action="" method="POST" class="m-2">
               
                <div class="mb-3">
                    <label for="text" class="form-label">  Enter the ISBN number: </label>
                    <input type="text" class="form-control shadow border-1 border-success w-75" id="isbn" name="isbn" required>
                </div>

                
                <div class="mb-3">
                    <label for="text" class="form-label">  Title of the Book: </label>
                    <input type="text" class="form-control shadow border-1 border-success w-75" id="title" name="title" required>
                </div>

                
                <div class="mb-3">
                    <label for="text" class="form-label">  Author of the book: </label>
                    <input type="text" class="form-control shadow border-1 border-success w-75" id="author" name="author" required>
                </div>

                
                <div class="mb-3">
                    <label for="text" class="form-label">  Subject: </label>
                    <input type="text" class="form-control shadow border-1 border-success w-75" id="sub" name="sub" required>
                </div>

                
                <div class="mb-3">
                    <label for="text" class="form-label">  Released Year:  </label>
                    <input type="text" class="form-control shadow border-1 border-success w-75" id="yr" name="yr" required>
                </div>

                
                <div class="pt-3  text-center  w-100">
                    <input type="submit" value="ADD" id="login" name="login" class="btn btn-light btn-outline-success shadow-sm">
                </div>

               
    </form>
       
       
    </div>
    
   
</body>



</html>