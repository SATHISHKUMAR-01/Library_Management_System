<?php


session_start();
include('config/connect.php');

$isbn = $_GET['isbn'];
$name =  $_SESSION['name'];

$query    = "INSERT INTO favorites (isbn,name)VALUES
    ('$isbn', '$name')"; 
$result   = mysqli_query($conn, $query);

$url = "http://localhost/Library_Management_System/books.php";

header("Location: $url ");

?>