<?php

session_start();
include('config/connect.php');



$isbn = $title =  $author =  $sub = $yr = ' ';
$msg = " ";
if (isset($_POST['login'])) {

    
    $isbn = stripslashes($_REQUEST['isbn']);
    $isbn = mysqli_real_escape_string($conn, $isbn);

    $title = stripslashes($_REQUEST['title']);
    $title = mysqli_real_escape_string($conn, $title);

    $author = stripslashes($_REQUEST['author']);
    $author = mysqli_real_escape_string($conn, $author);

    $sub = stripslashes($_REQUEST['sub']);
    $sub = mysqli_real_escape_string($conn, $sub);

    $yr = stripslashes($_REQUEST['yr']);
    $yr = mysqli_real_escape_string($conn, $yr);

    $query    = "INSERT INTO books (isbn,title,author,subject,year)VALUES('$isbn', '$title', '$author' ,'$sub', '$yr')"; 
    $result   = mysqli_query($conn, $query);


    
    $query    = "SELECT * FROM books WHERE isbn='$isbn'"; 
    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
  

    if ($rows == 1) {
       $msg = "Record Added Successfully";
    }else{
        $msg = "Record Added Failed";
    }
}

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

    <?php if($msg != " ") { ?>
    <div>
        <p class="bg-success p-2 text-dark w-75"> <?php echo $msg; ?> </p>
    </div>
    <?php } ?>

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