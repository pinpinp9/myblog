<?php
//Sqli method to connect the database 
$servername="localhost";
$username = "root";
$password = "";
$dbname = "blog";

//create connection 
$conn = mysqli_connect($servername,$username,$password,$dbname);

//check connection
if (!$conn) {
    die ("connection failed".mysqli_connect_error());
}

