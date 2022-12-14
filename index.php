<?php 
session_start();
include('config/connect.php');

$_SESSION['valid'] = 0;

$id = $name =  $password = ' ';


if (isset($_POST['login'])) {

    
    $id = stripslashes($_REQUEST['id']);
    $id = mysqli_real_escape_string($conn, $id);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    
    $query    = "SELECT name FROM login WHERE user_id='$id' AND  password='$password'"; 
    echo $query;
    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
  
    $name = $result->fetch_array()['name'];

    if ($rows == 1) {
        $_SESSION['name'] = $name; 
        $_SESSION['valid'] = 1;
        header("Location: dashboard.php");
    }else{
        header("Location: index.php");
    }


}

?>


<html>
    <head>
        <title> Login Page </title>
        <?php include('header.php') ?>
        <style>
            #login{
               
                background-image : url('./images/bookshelf.jpeg')
            }
            #login_Card{
                border-radius:50px;
                display: none;
                 }
            #navlink1,#navlink2{   
                transition: transform .2s;
            }

            #navlink1:hover, #navlink2:hover {
                  transform: scale(1.1); 
            }

    
        </style>

        <script>
             $(window).ready(function(){
            $("#login_Card").fadeIn(1000);  
         });
        </script>


    </head>
    <body id="login">
        <div class="container">
            <br> <br> 

            <div class="pt-4 text-center">
                <button class="btn-lg btn-light" id="navlink1"> <a href="index.php"  class="text-decoration-none text-secondary">  Login </a> </button>   &nbsp;  &nbsp;    
                <button class="btn-lg btn-secondary" id="navlink2"> <a href="register.php" id="navlink2" class="text-decoration-none text-light">  Register </a> </button>
            </div>

            <br>
            <div class="card p-2 border-1 border-secondary shadow-lg" id="login_Card"> 
            <div class="m-2 row">
                <div class="col-6  p-2">
                    <img src="./images/login.jpeg" alt="" class="img-fluid w-100 p-3">
                </div>
                <div class="col-6 p-2">
                    <br>
                    <h1 class="fs-1 text-center text-secondary">Let's Read <i class="fa-solid fa-book"></i> </h1> 
                    <br><br>
                    
                    <form action="" method="POST" class="m-2">
                    
                        <div class="mb-3">
                            <label for="text" class="form-label"> <i class="fa-solid fa-user"></i> User ID: </label>
                            <input type="text" class="form-control shadow border-1 " id="id" name="id" placeholder="Enter you User ID" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"> <i class="fa-solid fa-lock"></i> Password: </label>
                            <input type="password" class="form-control shadow border-1 " id="password" name="password" required>
                        </div>

                        
                        <div class="pt-3  text-center  w-100">
                            <input type="submit" value="Login" id="login" name="login" class="btn btn-light text-light shadow-sm">
                        </div>

                        
                    </form>
                </div>
            </div>
            </div>



        </div>
        
    </body>
</html>