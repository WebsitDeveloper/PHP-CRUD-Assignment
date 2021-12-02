<?php
include_once "connection.php";

session_start();

if(isset($_SESSION['username'])){
  header("Location: student-details.php");
}

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = md5($_POST['userpassword']);
    $cnfrmpassword = md5($_POST['cnfrmpassword']);


    $userinsert = "INSERT INTO users(user_name, user_email, user_password, user_cnfrmpassword)
    VALUES('$username', '$useremail', '$userpassword', '$cnfrmpassword')";

    if(mysqli_query($connect, $userinsert)){
        echo "Registered!!!";
    } else {
        echo "Error In Registration!!!";
    }

}


include_once 'views/header.php';

?>


<div class="container">
    <h1 class='mt-5'> User Registration </h1>
<form method="post" action="">
  <div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="useremail" class="form-label">User Email</label>
    <input type="email" name="useremail" class="form-control" id="useremail">
  </div>
  <div class="mb-3">
    <label for="userpassword" class="form-label">Password</label>
    <input type="password" name="userpassword" class="form-control" id="userpassword">
  </div>
  <div class="mb-3">
    <label for="cnfrmpassword" class="form-label">Confirm Password</label>
    <input type="password" name="cnfrmpassword" class="form-control" id="cnfrmpassword">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>
</div>