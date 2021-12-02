<?php

include_once 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login-page.php");
}

include 'views/header.php';

?>

<div class="container">
  <h2 class="mt-5">Add New Data</h2>
  <form action="add-page.php" method="post">
    <div class="mt-3 mb-3">
      <label for="studentname" class="form-label">Student Name</label>
      <input type="text" class="form-control" id="studentname" name="studentname">
    </div>
    <div class="mb-3">
      <label for="studentclass" class="form-label">Student Class</label>
      <input type="text" class="form-control" id="studentclass  " name="studentclass">
      <!-- <textarea class="form-control" name="studentinfo" id="stdinfo" rows="3"></textarea> -->
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?php
include 'views/footer.php';
?>