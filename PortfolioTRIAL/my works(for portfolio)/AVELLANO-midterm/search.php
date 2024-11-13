<?php
session_start();
include('config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Student Information</title>
        <style>
        body{
            font-family: 'Lora', serif;
            margin: 0;
            padding: 10;
            background: linear-gradient(90deg, hsla(260, 38%, 33%, 1) 0%, hsla(258, 28%, 16%, 1) 100%);    
        }

        .container {
            width: 100%;
            height: 100%;
            position: relative;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border-radius: 10px;
            background: linear-gradient(90deg, hsla(280, 27%, 59%, .1) 0%, hsla(290, 46%, 55%, 0.1) 50%);
            margin-left: 0;
        }

        .navbar {
            width: 100%;
            height: 12%;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: #333;
        }

        .logo {
            width: 55px;
            padding-right: 10px;
            cursor: pointer;
            margin-left: 30px;
            margin-top: 8px;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            width: 100%;
        }

        nav a {
            float: right;
            display: block;
            margin-right:20px ;
            padding: 30px 30px;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            letter-spacing: 1px;
            color: #FFDBDD;
        }

        nav a:hover {
            background-color: rgba(15, 6, 35, 0.5);
            color: #D3DCBB;
        }

        input[type="text"] {
            width: 70%;
            padding: 10px 20px;
            margin: 10px 145px;
            display: block;
            border: 1px solid #D3DCBB;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #734caf;
            color: white;
            margin: 0px 880px;
            float: left;
            display: block;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        textarea{
            width: 80%;
            padding: 10px 20px;
            margin: 10px 100px;
            display: block;
            border: 1px solid #D3DCBB;
            box-sizing: border-box;
        }
        button{
            background-color: #734caf;
            color: white;
            margin: 0px 880px;
            float: left;
            display: block;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 23px;
            letter-spacing: 1.5px;
            color: #333333;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #D3DCBB;
            text-align: left;
            padding: 10px;
            font-size: 20px;
            color: #FFDBDD;
        }

        td{
            background-color: rgba(158, 131, 226, 0.2);
            font-weight: 500;
        }

        th {
            background-color: rgba(158, 131, 226, 0.5);
        }
        h2{
            font-family: 'Aldrich', sans-serif;

            letter-spacing: 2px;
            font-size: 40px;
            text-shadow: 1px 1px 5px black;
            text-align: left;
            color: #FFDBDD;
        }
        h3{
            font-size: 25px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
            margin-left: 10px;
            padding: 5px;
        }
        h4{
            font-size: 20px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
            background-color: #cfced100;
            margin-left: 60px;
            
        }
        </style>
</head>
<body>
<div class="navbar">
    
    <nav>
    <img src="KYS.png" class="logo">
    <a href="index.php">Home</a>
    </nav>
</div>

<form method="GET" action="search.php">
    <div class = "container">
            <div class="form-group">
                <label for="searchInput">Search by Name or Student ID:</label>
                <input type="text" class="form-control" id="searchInput" name="query" placeholder="Enter name or student ID">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <?php
// Check if the search query parameter is set
if (isset($_GET['query'])) {
    // Sanitize the search query to prevent SQL injection
    $searchQuery = $conn->real_escape_string($_GET['query']);

    // Construct the SQL query to search for students by name or student ID
    $sqlSearch = "SELECT * FROM students WHERE student_name LIKE '%$searchQuery%' OR student_id LIKE '%$searchQuery%'";
    
    $sqlSearch11 = "SELECT * FROM firstyr_firstsem WHERE student_id LIKE '%$searchQuery%'";
    $sqlSearch12 = "SELECT * FROM firstyr_secondsem WHERE student_id LIKE '%$searchQuery%'";
    $sqlSearch21 = "SELECT * FROM secondyr_firstsem WHERE student_id LIKE '%$searchQuery%'";
    $sqlSearch22 = "SELECT * FROM secondyr_secondsem WHERE student_id LIKE '%$searchQuery%'";
    $sqlSearch31 = "SELECT * FROM thirdyr_firstsem WHERE student_id LIKE '%$searchQuery%'";

    // Execute the search SQL query
    $resultSearch = $conn->query($sqlSearch);
    $resultSearch11 = $conn->query($sqlSearch11);
    $resultSearch12 = $conn->query($sqlSearch12);
    $resultSearch21 = $conn->query($sqlSearch21);
    $resultSearch22 = $conn->query($sqlSearch22);
    $resultSearch31 = $conn->query($sqlSearch31);

    // Check if any results were found
    if ($resultSearch->num_rows > 0) {
        // Display the search results in a table format
        echo "<h2>Enrolled Students</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Student ID</th><th>Name</th><th>Contact Number</th></tr></thead>";
        echo "<tbody>";
        while ($row = $resultSearch->fetch_assoc()) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['student_name'] . "</td><td>" . $row['contact_number'] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        // Display a message if no search results were found
    }

    if ($resultSearch11->num_rows > 0) {
        // Display the search results in a table format
        echo "<h2>1styear First Semester</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Student ID</th><th>Course Title</th><th>Course Code</th><th>Credit Unit</th><th>Grade</th><th>Instructor</th></tr></thead>";
        echo "<tbody>";
        while ($row = $resultSearch11->fetch_assoc()) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['course_code'] . "</td><td>" . $row['credit_unit'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['instructor'] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        // Display a message if no search results were found
    }

    if ($resultSearch12->num_rows > 0) {
        // Display the search results in a table format
        echo "<h2>1styear Second Semester</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Student ID</th><th>Course Title</th><th>Course Code</th><th>Credit Unit</th><th>Grade</th><th>Instructor</th></tr></thead>";
        echo "<tbody>";
        while ($row = $resultSearch12->fetch_assoc()) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['course_code'] . "</td><td>" . $row['credit_unit'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['instructor'] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        // Display a message if no search results were found
    }

    if ($resultSearch21->num_rows > 0) { //student_id	course_title	course_code	credit_unit	grade	instructor	
        // Display the search results in a table format
        echo "<h2>2ndyear First Semester</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Student ID</th><th>Course Title</th><th>Course Code</th><th>Credit Unit</th><th>Grade</th><th>Instructor</th></tr></thead>";
        echo "<tbody>";
        while ($row = $resultSearch21->fetch_assoc()) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['course_code'] . "</td><td>" . $row['credit_unit'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['instructor'] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        // Display a message if no search results were found
    }

    if ($resultSearch22->num_rows > 0) { //student_id	course_title	course_code	credit_unit	grade	instructor	
        // Display the search results in a table format
        echo "<h2>2ndyear Second Semester</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Student ID</th><th>Course Title</th><th>Course Code</th><th>Credit Unit</th><th>Grade</th><th>Instructor</th></tr></thead>";
        echo "<tbody>";
        while ($row = $resultSearch22->fetch_assoc()) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['course_code'] . "</td><td>" . $row['credit_unit'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['instructor'] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        // Display a message if no search results were found
    }

    if ($resultSearch31->num_rows > 0) { //student_id	course_title	course_code	credit_unit	grade	instructor	
        // Display the search results in a table format
        echo "<h2>3rdyear First Semester</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Student ID</th><th>Course Title</th><th>Course Code</th><th>Credit Unit</th><th>Grade</th><th>Instructor</th></tr></thead>";
        echo "<tbody>";
        while ($row = $resultSearch31->fetch_assoc()) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['course_code'] . "</td><td>" . $row['credit_unit'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['instructor'] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        // Display a message if no search results were found
    }


} else {
    echo "<p>No search results found.</p>";
    // Redirect back to the search form if the search query parameter is not set
    exit();
}

// Close the database connection
$conn->close();

            ?>
    </div>
</form> 
</body>
</html>