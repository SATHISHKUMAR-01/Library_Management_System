<?php


session_start();
include('config/connect.php');

$isbn = $_GET['isbn'];


$query    = "DELETE FROM books WHERE isbn = '$isbn'";
$result   = mysqli_query($conn, $query);

$url = "http://localhost/Library_Management_System/add.php";

header("Location: $url ");

?>