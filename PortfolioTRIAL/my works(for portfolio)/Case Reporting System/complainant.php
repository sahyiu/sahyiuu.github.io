<?php
// Include your database connection file (config.php)
include "config.php";

// Query to fetch data from the database
$sql = "SELECT * FROM complainant";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
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
            width: 100%;
            height:50%;
            margin: 0 auto;
            padding: 30px;
            box-sizing: border-box;
        }

        input[type="date"],
        input[type="text"],
        input[type="password"] {
            width: 85%;
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
        <a >Complainants</a>
        <a href="respondent.php">Respondents</a>
        <a href="victim.php">Victims</a>
        <a href="offender.php">Offenders</a>
        <a href="dashboard.php">Dashboard</a>
        </nav>
    </div>
<div class="container">

    <h2>Complainants</h2>
    <button class="action-btn" onclick="location.href='create_report.php'">Create Report</button>

    <table>
        <tr>
            <th>Case ID</th>
            <th>Name</th>
            <th>Relationship to Victim</th>
            <th>Address</th>
            <th>contact Number</th>
            <th>Case</th>
            <th></th>
            <th></th>
            <!-- Add more columns as needed -->
        </tr>

        <?php
        // Loop through the database results and display each row in the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['case_id']}</td>";
            echo "<td>{$row['c_name']}</td>";
            echo "<td>{$row['relationshiptovictim']}</td>";
            echo "<td>{$row['c_address']}</td>";
            echo "<td>{$row['c_contactnumber']}</td>";
            echo "<td>{$row['c_case']}</td>";
// Add an Edit button that links to the edit page with the case_id as a parameter
echo "<td>
        <form action='update_report.php' method='post'>
            <input type='submit' name='edit' value='EDIT'>
            <input type='text' name='editc_name' placeholder='Enter Name' value='" . $row['c_name'] . "' required/>
            <input type='text' name='editrelationshiptovictim' placeholder='Enter Relationship to victim' value='" . $row['relationshiptovictim'] . "' required/>
            <input type='text' name='editc_address' placeholder='Enter Address' value='" . $row['c_address'] . "' required/>
            <input type='text' name='editc_contactnumber' placeholder='Enter Contact Number' value='" . $row['c_contactnumber'] . "' required/>
            <input type='text' name='editc_case' placeholder='Enter Case' value='" . $row['c_case'] . "' required/>
            <input type='hidden' name='editcase_id' value='" . $row['case_id'] . "' required/>   
        </form>
      </td>";

// Add a Delete button that submits a form to delete the record
echo "<td>
        <form action='delete_report.php' method='post'>
            <input type='hidden' name='case_id' value='{$row['case_id']}'>
            <button type='submit' name='delete'>Delete</button>
        </form>
      </td>";

echo "</tr>";
}




            echo "</tr>";
        
        
        
        ?>
        
    </table>
</div>
    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>