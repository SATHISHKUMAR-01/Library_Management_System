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

$query  = "SELECT * FROM books";
$res = mysqli_query($conn,$query);
$books = array();
while($row = mysqli_fetch_array($res))
    $books[] = $row;

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

        #book_added{
            display:none;
        }
        
    </style>

    <script>
      
            $(document).ready(function() {
    $('#books').DataTable( {
        dom: 'Qlfrtip'
    });
});
      
    </script>
    
        
    
</head>
<body id="add_body">
    <div class="container text-light">
 
    <br> <br>
    <h3> Add a Book  </h3>
    <hr>

    <div id="book_added">
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

    <div class="bg-light p-3">
    <p class="fs-4 text-secondary pt-2 text-center"> List of Books Available </p>
    <table id="books" class="display nowrap text-dark" style="width:100%">
            <thead>
            <tr> <th>ISBN No</th>
                <th>Title</th>
                <th>Author</th>
               
                <th>Subject</th>
                <th>Publish Date</th>
                <th> </th>
                
            </tr>
            </thead>
            <tbody>

            <?php foreach($books as $row) { ?>


            <tr>
               <td> <?php echo $row['isbn']; ?> </td>
                <td> <?php echo $row['title']; ?> </td>
                <td> <?php echo $row['author']; ?> </td>
                <td> <?php echo $row['subject']; ?> </td>
                <td> <?php echo $row['year']; ?> </td>
          
                <td> <button class="btn btn-danger"> <a href="remove.php?isbn=<?php echo $row['isbn'] ?>" class="text-decoration-none text-light" > Remove </a> </button></td>
                
              </tr>

              <?php } ?>
            </tbody>
        </table>
            
        </div>
       
    </div>

    <br>
    
   
</body>



</html>