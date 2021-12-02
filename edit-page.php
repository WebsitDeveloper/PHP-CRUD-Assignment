<?php

include_once 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login-page.php");
}

include_once 'views/header.php';

$id = $_REQUEST['student_id'];


$edit = "SELECT * FROM student WHERE student_id=$id";

$student = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($student);

if(isset($_POST['update'])){
    $studentname = $_POST['studentname'];
    $studentclass = $_POST['studentclass'];

    $update = "UPDATE student SET student_name='$studentname', student_class= '$studentclass' WHERE student_id=$id";

    header("location:student-details.php");

    if(mysqli_query($connect, $update)){
        echo "Data Updated";
    } else {
        echo "Oops!! Error";
    }
}


?>

<div class="container">
  <h2 class="mt-5"> Edit Data </h2>
  <form action="" method="post">
    <div class="mt-3 mb-3">
      <label for="studentname" class="form-label">Student Name</label>
      <input type="text" class="form-control" id="studentname" name="studentname" value="<?php echo $row['student_name'];?>">
    </div>
    <div class="mb-3">
      <label for="studentclass" class="form-label">Student Class</label>
      <input type="text" class="form-control" id="studentclass" name="studentclass" value="<?php echo $row['student_class'];?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update" action="student-details.php"> Update </button>
  </form>
</div>