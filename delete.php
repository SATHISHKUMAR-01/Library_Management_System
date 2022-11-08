<?php


session_start();
include('config/connect.php');

$isbn = $_GET['isbn'];
$name =  $_SESSION['name'];

$query    = "DELETE FROM favorites WHERE isbn = '$isbn' and name = '$name'";
$result   = mysqli_query($conn, $query);

$url = "http://localhost/Library_Management_System/fav.php";

header("Location: $url ");

?>