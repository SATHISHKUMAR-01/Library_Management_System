<?php ?>


<html>
    <head>
        <title> Register Page </title>
        <?php include('header.php') ?>
        <style>
            #login{
                /* background-image: linear-gradient(to bottom, #bcf2f2, #c3f1f1, #caf0f0, #d1efef, #d7eeee); */
                background-image : url('./images/bookshelf.jpeg')
            }
            #register_card{
                border-radius:50px;
                display:none;
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
                <button class="btn-lg btn-light"> <a href="index.php" class="text-decoration-none text-secondary">  Login </a> </button>
                <button class="btn-lg btn-secondary"> <a href="register.php" class="text-decoration-none text-light">  Register </a> </button>
            </div>

            <br>
            <div class="card p-2 border-1 border-secondary border shadow-lg" id="register_card"> 
            <div class="m-2 row">
                <div class="col-6  p-2 text-center">
                    <img src="./images/register.jpeg" alt="" class="img-fluid w-75  p-3" >
                </div>
                <div class="col-6 p-2">
                    
                    <h1 class="fs-1 text-center text-secondary">Let's gain Knowledge <i class="fa-solid fa-book"></i> </h1> 
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
        
    </body>
</html>