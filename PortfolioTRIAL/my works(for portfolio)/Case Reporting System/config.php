<?php
$host = 'localhost'; // Replace with your MySQL server name
$user = 'root';     // Replace with your MySQL username
$password = '';     // Replace with your MySQL password
$dbname = 'casereport_db';        // Replace with your database name
$port= 3308;



$conn = mysqli_connect($host, $user, $password, $dbname, $port);

if (mysqli_connect_error()) {
    echo "Error: Unable to connect to MySQL <br>";
    echo "Message: ".mysqli_connect_error()."<br>";
}else{
}
?>