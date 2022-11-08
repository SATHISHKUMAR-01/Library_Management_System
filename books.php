<?php

session_start();
include('config/connect.php');

$name =  $_SESSION['name'];

$query  = "SELECT * FROM books";
$res = mysqli_query($conn,$query);
$rows = array();
while($row = mysqli_fetch_array($res))
    $rows[] = $row;


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
                <td> <button class="btn btn-primary"> Add to Favorites </button></td>
                
              </tr>

              <?php } ?>
        </table>
            
            




        </div>
        
    </body>
</html>