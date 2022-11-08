<?php

session_start();
include('config/connect.php');

$name =  $_SESSION['name'];

$query  = "SELECT * FROM books";
$res = mysqli_query($conn,$query);
$rows = array();
while($row = mysqli_fetch_array($res))
    $rows[] = $row;

$author = $title = $subject = $year =  ' ';
if (isset($_POST['login'])) {

    $title = stripslashes($_REQUEST['title']);
    $title = mysqli_real_escape_string($conn, $title);

    $author = stripslashes($_REQUEST['author']);
    $author = mysqli_real_escape_string($conn, $author);

    $subject = stripslashes($_REQUEST['subject']);
    $subject = mysqli_real_escape_string($conn, $subject);

    $year = stripslashes($_REQUEST['year']);
    $year = mysqli_real_escape_string($conn, $year);

    $query = "SELECT * FROM books where title = '$title' or author = '$author' or subject = '$subject' or year = '$year' ";

    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);

    
    if ($rows >= 1) {
        $rows = array();
        while($row = mysqli_fetch_array($result))
        $rows[] = $row;
     }else{
        $query  = "SELECT * FROM books";
$res = mysqli_query($conn,$query);
$rows = array();
while($row = mysqli_fetch_array($res))
    $rows[] = $row;

     }



}
    


?>


<html>
    <head>
        <title> List of Books </title>
        <?php include('header.php') ?>
        <style>
           
    
        </style>

       
            <script>
            $(document).ready(function() {
    $('#books').DataTable( {
        dom: 'Qlfrtip'
    });
});
        </script>
       
       

    </head>
    <body >
        <?php include('navbar.php') ?>
        <br><br><br> 
        <div class="container">

        <p class="fs-4 text-secondary pt-2 text-center"> List of Books Available </p>
        <hr>

        <form action="" method="POST" class="row p-2">

    
            
              <select class="form-select col" aria-label="Default select example" name="author">
                <option select value> Author </option>
                <option value="LeelaKrishnan">LeelaKrishnan</option>  
                <option value="Nagapan">Nagapan</option>
                <option value="Surya">Surya</option>
                <option value="Velu">Velu</option>
                <option value="Uma">Uma</option>
             </select>

             <select class="form-select col" aria-label="Default select example" name="title">
                <option select value> Title </option>
                <option value="C++ Programming">C++ Programming</option>  
                <option value="Comics Tale">Comics Tale</option>
                <option value="English Grammar">English Grammar</option>
             </select>

             <select class="form-select col" aria-label="Default select example" name="subject">
                <option select value> Subject </option>
                <option value="Computer Science">Computer Science</option>  
                <option value="english">English</option>
             </select>

             <select class="form-select col" aria-label="Default select example" name="year" >
                <option select value> Year </option>
                <option value="2000">2000</option>  
                <option value="2002">2002</option>
             </select>

             <input type="submit" value="Filter" id="login" name="login" class="btn col btn-secondary text-light shadow-sm">
                        
        </form>

        
        <table id="books" class="display nowrap" style="width:100%">
            <thead>
            <tr> <th>ISBN No</th>
                <th>Title</th>
                <th>Author</th>
               
                <th>Subject</th>
                <th>Publish Date</th>
                <th> </th>
                <th> </th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($rows as $row) { ?>


            <tr>
               <td> <?php echo $row['isbn']; ?> </td>
                <td> <?php echo $row['title']; ?> </td>
                <td> <?php echo $row['author']; ?> </td>
                <td> <?php echo $row['subject']; ?> </td>
                <td> <?php echo $row['year']; ?> </td>
                <td> <button class="btn btn-warning"> Borrow </button></td>
                <td> <button class="btn btn-primary"> <a href="update.php?isbn=<?php echo $row['isbn'] ?>" class="text-decoration-none text-light" > Add to Favorites </a> </button></td>
                
              </tr>

              <?php } ?>
            </tbody>
        </table>
            
            




        </div>
        
    </body>
</html>