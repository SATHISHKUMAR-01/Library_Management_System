<?php
session_start();
include('config/connect.php');

$name =  $_SESSION['name'];

$query  = "SELECT isbn FROM favorites where name = '$name'";

$res = mysqli_query($conn,$query);
$rows = array();
while($row = mysqli_fetch_array($res))
    $rows[] = $row;


 ?>


<html>
    <head>
        <title> Favorites</title>
        <?php include('header.php') ?>
        <style>
           
    
        </style>

<script>
            $(document).ready(function() {
    $('#fav').DataTable( {
        dom: 'Qlfrtip'
    });
});
        </script>

    </head>
    <body >
        <?php include('navbar.php') ?>
        <br><br><br> 
        <div class="container">

        <p class="fs-4 text-secondary pt-2 text-center"> Your Favorite Books</p>
        <hr>


        
        <table id="fav" class="display nowrap" style="width:100%">
            <thead>
            <tr> <th>ISBN No</th>
                <th>Title</th>
                <th>Author</th>
               
                <th>Subject</th>
                <th>Publish Date</th>
                <th>  </th>
               
            </tr>
            </thead>
            <tbody>

            
            <?php foreach($rows as $row) { 
                $ans = $row['isbn'];
                $query  = "SELECT * FROM books where isbn = '$ans'";
               
                $res = mysqli_query($conn,$query);
                $news = array();
                while($new = mysqli_fetch_array($res))
                    $news[] = $new;
                foreach($news as $new){
             ?>
             <tr>
             <td> <?php echo $new['isbn']; ?> </td>
                <td> <?php echo $new['title']; ?> </td>
                <td> <?php echo $new['author']; ?> </td>
                <td> <?php echo $new['subject']; ?> </td>
                <td> <?php echo $new['year']; ?> </td>
                <td> <button class="btn btn-danger"> <a href="delete.php?isbn=<?php echo $row['isbn'] ?>" class="text-decoration-none text-light" > Remove from Favorites </a> </button></td>
                
            </tr> 
                
                
            
            <?php } } ?>
            


        </tbody>

        </table>
            
            




            




        </div>
        
    </body>
</html>