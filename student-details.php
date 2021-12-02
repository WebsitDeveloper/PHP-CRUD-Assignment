<?php

include_once 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login-page.php");
}

include_once 'views/header.php';

$studentdetails = "SELECT * FROM student";

$student = mysqli_query($connect, $studentdetails);

?>

<div class="container">
    <div class="mt-5">
        <h2 class="mb-3"> Students Detail </h2>
    </div>
    <table class="table">

        <thead>
            <th> Student ID </th>
            <th> Student Name </th>
            <th> Student Class </th>
            <th> Action </th>
        </thead>

        <tbody>

            <?php
            if(mysqli_num_rows($student) > 0){
                while($row = mysqli_fetch_assoc($student)){
            ?>

            <tr>
                <td>
                    <?php echo $row["student_id"]; ?>
                </td>

                <td>
                    <?php echo $row["student_name"]; ?>
                </td>

                <td>
                    <?php echo $row["student_class"]; ?>
                </td>

                <td>
                    <a href="view-page.php?student_id=<?php echo $row["student_id"]; ?>" class="btn btn-primary"> View </a>
                    <a href="edit-page.php?student_id=<?php echo $row["student_id"]; ?>" class="btn btn-info"> Edit </a>
                    <a href="delete-page.php?student_id=<?php echo $row["student_id"]; ?>" class="btn btn-danger"> Delete </a>
                </td>

            </tr>

            <?php
                } 
            
            } else {
                echo "Record Not Found";
            } 
            ?>

        </tbody>

    </table>

</div>