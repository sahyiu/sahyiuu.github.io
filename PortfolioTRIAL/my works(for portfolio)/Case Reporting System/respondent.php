<?php
// Include your database connection file (config.php)
include "config.php";

// Query to fetch data from the database


$sql = "SELECT * FROM respondent_school_personnel";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM respondent_student";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM victims_mother";
$result3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM victims_father";
$result4 = mysqli_query($conn, $sql4);

// Check if the query was successful
if (!$result) {
    die("Error: " . mysqli_error($conn));
}
if (!$result2) {
    die("Error: " . mysqli_error($conn));
}
if (!$result3) {
    die("Error: " . mysqli_error($conn));
}
if (!$result4) {
    die("Error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Lora&display=swap" rel="stylesheet">
    <title>Database Contents</title>
    <style>
        body {
            font-family: 'Lora', serif;
            margin: 0;
            padding: 10;
            background: linear-gradient(90deg, hsla(260, 38%, 33%, 1) 0%, hsla(258, 28%, 16%, 1) 100%);
        }

        .container {
            width: 90%;
            height:50%;
            margin: 0 auto;
            padding: 30px;
            box-sizing: border-box;
        }

        input[type="date"],
        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px 20px;
            margin: 10px 20px;
            display: block;
            border: 1px solid #D3DCBB;
            box-sizing: border-box;
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
        }

        nav {
            background-color: #333;
            overflow: hidden;
            width: 100%;
        }

        nav a {
            float: right;
            display: block;
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

        button {
            background-color: #734caf;
            
            color: white;
            padding: 20px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;

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
        .action-btn{
            margin-left: 80% ;
        }
    </style>
</head>

<body>
<div class="navbar">
    
        <nav>
        <img src="logo.png" class="logo">
        <a href="logout.php">Logout</a>
        <a href="case.php">Cases</a>
        <a href="complainant.php">Complainants</a>
        <a >Respondents</a>
        <a href="victim.php">Victims</a>
        <a href="offender.php">Offenders</a>
        <a href="dashboard.php">Dashboard</a>
        </nav>
    </div>
<div class="container">

    <h2>Respondents</h2>
<h3>School Personnel</h3>
<button class="action-btn" onclick="location.href='create_report.php'">Create Report</button>
    <table>
        <tr>
            <th>Case ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Designation/Position</th>
            <th>Contact Number</th>
            <th>Case</th>
            <!-- Add more columns as needed -->
        </tr>

        <?php
        // Loop through the database results and display each row in the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['case_id']}</td>";
            echo "<td>{$row['spr_name']}</td>";
            echo "<td>{$row['spr_date_of_birth']}</td>";
            echo "<td>{$row['spr_age']}</td>";
            echo "<td>{$row['spr_sex']}</td>";
            echo "<td>{$row['position']}</td>";
            echo "<td>{$row['spr_contactnumber']}</td>";
            echo "<td>{$row['spr_case']}</td>";

            // Add more columns as needed
            echo "</tr>";

        }
        ?>

    </table>
    <p><br></p>
    <p><br></p>
    <h3>Student</h3>
    <table>
        <tr>
            <th>Case ID</th>
            <th>Name</th>
            <th>ID</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Year and Section</th>
            <th>Adviser</th>
            <th>Case</th>
            <!-- Add more columns as needed -->
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<tr>";
            echo "<td>{$row['case_id']}</td>";
            echo "<td>{$row['sr_name']}</td>";
            echo "<td>{$row['sr_id']}</td>";
            echo "<td>{$row['sr_date_of_birth']}</td>";
            echo "<td>{$row['sr_age']}</td>";
            echo "<td>{$row['sr_sex']}</td>";
            echo "<td>{$row['sr_yearandsection']}</td>";
            echo "<td>{$row['sr_adviser']}</td>";
            echo "<td>{$row['sr_case']}</td>";
        
        }
?>
    </table>
    <p><br></p>
    <h4>Parent's Information of the Student:</h4>

    <table>    
        <tr>
            <th>Case ID</th>
            <th>Mother</th>
            <th>Age</th>
            <th>Occupation</th>
            <th>Address</th>
            <th>Contact</th>
            <!-- Add more columns as needed -->
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result3)) {
            echo "<tr>";
            echo "<td>{$row['case_id']}</td>";
            echo "<td>{$row['m_name']}</td>";
            echo "<td>{$row['m_age']}</td>";
            echo "<td>{$row['m_occupation']}</td>";
            echo "<td>{$row['m_address']}</td>";
            echo "<td>{$row['m_contact']}</td>";
        
        }
?>
        

    </table>
    <table>    
        <tr>
            <th>Case ID</th>
            <th>Father </th>
            <th>Age</th>
            <th>Occupation</th>
            <th>Address</th>
            <th>Contact</th>
            <!-- Add more columns as needed -->
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result4)) {
            echo "<tr>";
            echo "<td>{$row['case_id']}</td>";
            echo "<td>{$row['f_name']}</td>";
            echo "<td>{$row['f_age']}</td>";
            echo "<td>{$row['f_occupation']}</td>";
            echo "<td>{$row['f_address']}</td>";
            echo "<td>{$row['f_contact']}</td>";
        
        }
?>
    </table>
</div>

    <button class="action-btn" onclick="location.href='create_report.php'">Create Report</button>

</div>
    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>
