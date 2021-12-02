<?php

$db_name = "online-pu";
$db_user = "root";
$db_password = "root";
$db_host = "localhost";


//crerate connenction 

$connect = new mysqli($db_host, $db_user, $db_password, $db_name);

//check connection

if($connect->connect_error){
    echo "connection error";
}else{
    echo "
    ";
}

?>