<?php
$servername="localhost";
$username="root";
$password="";
$db="ecommercephp";

$con= new mysqli($servername, $username, $password, $db);

if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}
/*
else{
    echo "Connected successfully. Yehhh";
}
*/
?>