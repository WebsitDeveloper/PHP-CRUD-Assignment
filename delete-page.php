<?php

include_once 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login-page.php");
}

$id = $_REQUEST['student_id'];

$delete = "DELETE FROM student WHERE student_id=$id";

$pageDelete = mysqli_query($connect, $delete);

header("location:student-details.php");

?>