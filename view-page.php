<?php

include_once 'views/header.php';

include_once 'connection.php';

$id = $_REQUEST['student_id'];

$edit = "SELECT * FROM student WHERE student_id=$id";

$student = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($student);

?>

<div class="container">
    <h2 class="mt-4"> Student Name: </h2>
    <p class="mt-2 fs-2"> <?php echo $row['student_name'] ?> <p>
    <h2 class="mt-4"> Student Class: </h2>
    <p class="mt-2 fs-2"> <?php echo $row['student_class'] ?> <p>
    <a href="student-details.php"> <button class="btn btn-primary "> Back To Details </button> </a>
</div>