<?php 


include('config/connect.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require './vendor/autoload.php';
$mail = new PHPMailer(true);

$msg = '';
$name = $email =  $password = $conf_password = $user_id = ' ';
if (isset($_POST['login'])) {


    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn, $name);
    
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $conf_password = stripslashes($_REQUEST['conf_password']);
    $conf_password = mysqli_real_escape_string($conn, $conf_password);

    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $user_id =  substr(str_shuffle($data), 0, 8);

    $query    = "INSERT INTO login (user_id,name,email,password,confirm_password)VALUES
    ('$user_id', '$name', '$email' ,'$password', '$conf_password')"; 
    $result   = mysqli_query($conn, $query);
    
    $query    = "SELECT * FROM login WHERE email='$email' AND  password='$password'"; 
    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
  
   
    if ($rows == 1) {

        
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption PHPMailer::ENCRYPTION_SMTPS
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('', 'Admin - Library Management');
    $mail->addAddress($email, $name);     //Add a recipient

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Library Management Registration ---  Successfull';
    $mail->Body    = "<h1>Hello ".$name."</h1><br/> Your registration for library management is successfull <br/> <h2>Your ID is : ".$user_id."<br/> Your email id : ".$email."</h2> <br/> ";

    $mail->send();
   
    $msg = "Registration Successful. Log in with your User ID sent to your mail";
    
    }else{
        $msg = "Registration Successful. Log in with your User ID : " . $user_id ." sent to your mail";
    }
}



?>


<html>
    <head>
        <title> Register Page </title>
        <?php include('header.php') ?>
        <style>
            #login{
                background-image : url('./images/bookshelf.jpeg')
            }
            #register_card{
                border-radius:50px;
                display:none;
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
            $("#register_card").fadeIn(1000);  
         });
        </script>

    </head>
    <body id="login">
        <div class="container">
            <br> <br> 

            <div class="pt-4 text-center">
                <button class="btn-lg btn-light" id="navlink1"> <a href="index.php" class="text-decoration-none text-secondary">  Login </a> </button> &nbsp;  &nbsp;
                <button class="btn-lg btn-secondary" id="navlink2"> <a href="register.php" class="text-decoration-none text-light">  Register </a> </button>
            </div>

            <br>
            <div class="card p-2 border-1 border-secondary border shadow-lg" id="register_card"> 
            <div class="m-2 row">
                <div class="col-6  p-2 text-center">
                    <img src="./images/register.jpeg" alt="" class="img-fluid w-75  p-3" >
                </div>
                <div class="col-6 p-2">
                    
                    <h1 class="fs-1 text-center text-secondary">Let's gain Knowledge <i class="fa-solid fa-book"></i> </h1>
                    
                    <?php if($msg != ''){ ?>
                        <p class="alert alert-success" role="alert">
                            <?php echo $msg; ?>
                        </p>
                    <?php } ?>
                    
                 <br>
                    <form action="" method="POST" class="m-2">
                    
                        <div class="mb-3">
                            <label for="text" class="form-label"> <i class="fa-solid fa-user"></i> Name: </label>
                            <input type="text" class="form-control shadow " id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label"> <i class="fa-solid fa-envelope"></i> Email: </label>
                            <input type="email" class="form-control shadow" id="email" name="email" placeholder="example@gmail.com" required>
                        </div>

                        

                        <div class="mb-3">
                            <label for="password" class="form-label"> <i class="fa-solid fa-lock"></i> Password: </label>
                            <input type="password" class="form-control shadow" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"> <i class="fa-solid fa-lock"></i> Confirm Password: </label>
                            <input type="password" class="form-control shadow " id="conf_password" name="conf_password" required>
                        </div>

                        
                        <div class="pt-3  text-center  w-100">
                            <input type="submit" value="Register" id="login" name="login" class="btn-lg btn-light text-light shadow-sm">
                        </div>

                        
                    </form>
                </div>
            </div>
            </div>



        </div>
        <br><br>
    </body>
</html>
