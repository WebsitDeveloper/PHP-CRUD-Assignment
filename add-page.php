<?php

include_once 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login-page.php");
}

include_once 'views/header.php';

$studentname = $_POST['studentname'];

$studentclass = $_POST['studentclass'];

$insert = "INSERT INTO student(
    student_name, student_class
)VALUES('$studentname', '$studentclass')";



if(mysqli_query($connect, $insert)){
    echo '<div class="container"> <h3 class="mt-5"> Data Updated </h3> </div>';
} else {
    echo '<div class="container"> <h3 class="mt-5"> Data Notupdated </h3> </div>';
}

header("location:student-details.php");


?>