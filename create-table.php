<?php

include 'connection.php';

$student = "CREATE TABLE IF NOT EXISTS student(
    student_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(30) NOT NULL,
    student_info TEXT
)";


$users = "CREATE TABLE IF NOT EXISTS users(
    user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,  
    user_email VARCHAR(200) NOT NULL,
    user_password VARCHAR(200) NOT NULL,
    user_cnfrmpassword VARCHAR(200) NOT NULL
)";


if(mysqli_query($connect, $users)){
    echo "Successfully!!! Database Table Createed";
} else{
    echo "Error!!!";
}


?>