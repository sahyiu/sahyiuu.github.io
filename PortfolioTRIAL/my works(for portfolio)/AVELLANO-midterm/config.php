<?php
$host = '127.0.0.1';        // MySQL server name (use 127.0.0.1 instead of localhost)
$user = 'root';             // MySQL username
$password = '';             // MySQL password (empty by default in XAMPP)
$dbname = 'student_info';   // Database name

// Attempt to connect to MySQL (using port 3306)
$conn = mysqli_connect($host, $user, $password, $dbname, 3306);

// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());  // Die with a detailed error message
}
?>
