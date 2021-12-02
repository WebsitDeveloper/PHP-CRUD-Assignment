<?php
include 'connection.php';

session_start();

if(isset($_SESSION['username'])){
    header("Location: student-details.php");
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['userpassword']);

    $sql = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'";

    $result = mysqli_query($connect, $sql);

    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['user_name'];
        header("Location: student-details.php");
    } else {
        echo "<script>alert('OOPS!!! username or password is incorrect')</script>";
    }
}

include_once 'views/header.php';

?>

<div class='container'>
    <h1 class="mt-5"> User Login</h1>
<form method="post" action="">
  <div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="userpassword" class="form-label">Password</label>
    <input type="password" name="userpassword" class="form-control" id="userpassword">
  </div>
  <button type="submit" name="login" class="btn btn-primary">login</button>
</form>
</div>