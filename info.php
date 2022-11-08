<?php

session_start();
include('config/connect.php');

$name =  $_SESSION['name'];

$query  = "SELECT title, COUNT(*) AS count FROM books GROUP BY title";
$res = mysqli_query($conn,$query);
$titles = array();
while($row = mysqli_fetch_array($res))
    $titles[] = $row;

$query  = "SELECT subject, COUNT(*) AS count FROM books GROUP BY subject";
$res = mysqli_query($conn,$query);
$subjects = array();
while($row = mysqli_fetch_array($res))
    $subjects[] = $row;

$query  = "SELECT author, COUNT(*) AS count FROM books GROUP BY author";
$res = mysqli_query($conn,$query);
$authors = array();
while($row = mysqli_fetch_array($res))
    $authors[] = $row;
        

    $query  = "SELECT year, COUNT(*) AS count FROM books GROUP BY year";
    $res = mysqli_query($conn,$query);
    $years = array();
    while($row = mysqli_fetch_array($res))
        $years[] = $row;
            
        

?>


<html>
    <head>
        <title> More Info</title>
        <?php include('header.php') ?>
        <style>
           
    
        </style>

       
            
       
       

    </head>
    <body >
        <?php include('navbar.php') ?>
        <br><br><br> 
        <div class="container">
            
        <br> 
        <div class="row">

        <div class="col m-1 card p-2">
        <p class="fs-4 text-secondary pt-2"> Title </p>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th class="fw-normal" scope="col">S. NO</th>
                <th class="fw-normal" scope="col">Title</th>
                <th class="fw-normal" scope="col">Number of books</th>
                </tr>
            </thead>
            <?php
              $i = 1;
              foreach($titles as $title){  ?>

                <tr >
                <th class="fw-normal" scope="col"><?php echo $i; ?></th>
                <th class="fw-normal" scope="col"><?php echo $title['title']; ?></th>
                <th class="fw-normal" scope="col"><?php echo $title['count']; ?></th>
                </tr>
            <?php  $i +=1; } ?> 
        </table>
        </div>

        <div class="col  m-1 card p-2">
        <p class="fs-4 text-secondary pt-2"> Subject </p>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th class="fw-normal" scope="col">S. NO</th>
                <th class="fw-normal" scope="col">Subject</th>
                <th class="fw-normal" scope="col">Number of books</th>
                </tr>
            </thead>
            <?php
              $i = 1;
              foreach($subjects as $subject){  ?>

                <tr >
                <th class="fw-normal" scope="col"><?php echo $i; ?></th>
                <th class="fw-normal" scope="col"><?php echo $subject['subject']; ?></th>
                <th class="fw-normal" scope="col"><?php echo $subject['count']; ?></th>
                </tr>
            <?php  $i +=1; } ?> 
        </table>
        </div>

        </div>


        <div class="row">

        <div class="col m-1 card p-2">
        <p class="fs-4 text-secondary pt-2"> Author </p>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th class="fw-normal" scope="col">S. NO</th>
                <th class="fw-normal" scope="col">Author Name</th>
                <th class="fw-normal" scope="col">Number of books</th>
                </tr>
            </thead>
            <?php
              $i = 1;
              foreach($authors as $author){  ?>

                <tr >
                <th class="fw-normal" scope="col"><?php echo $i; ?></th>
                <th class="fw-normal" scope="col"><?php echo $author['author']; ?></th>
                <th class="fw-normal" scope="col"><?php echo $author['count']; ?></th>
                </tr>
            <?php  $i +=1; } ?> 
        </table>
        </div>

        <div class="col m-1 card p-2">
        <p class="fs-4 text-secondary pt-2"> Published Year </p>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th class="fw-normal" scope="col">S. NO</th>
                <th class="fw-normal" scope="col">Published Year</th>
                <th class="fw-normal" scope="col">Number of books</th>
                </tr>
            </thead>
            <?php
              $i = 1;
              foreach($years as $year){  ?>

                <tr >
                <th class="fw-normal" scope="col"><?php echo $i; ?></th>
                <th class="fw-normal" scope="col"><?php echo $year['year']; ?></th>
                <th class="fw-normal" scope="col"><?php echo $year['count']; ?></th>
                </tr>
            <?php  $i +=1; } ?> 
        </table>
        </div>

        </div>


      
























            

        </div>
        <br><br>
    </body>
</html>