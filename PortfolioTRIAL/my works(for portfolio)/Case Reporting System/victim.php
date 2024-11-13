<?php
// Include your database connection file (config.php)
include "config.php";

// Query to fetch data from the database
$sql = "SELECT * FROM victim";
$result = mysqli_query($conn, $sql);

$sql3 = "SELECT * FROM victims_mother";
$result3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM victims_father";
$result4 = mysqli_query($conn, $sql4);

// Check if the query was successful
if (!$result) {
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
        <a href="complainant.php">Complainants</a>
        <a href="respondent.php">Respondents</a>
        <a >Victims</a>
        <a href="offender.php">Offenders</a>
        <a href="dashboard.php">Dashboard</a>
        </nav>
    </div>
<div class="container">

    <h2>Victims</h2>
    <button class="action-btn" onclick="location.href='create_report.php'">Create Report</button>

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
            <th></th>
            <th></th>
            <!-- Add more columns as needed -->
        </tr>

        
        <?php
        // Loop through the database results and display each row in the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['case_id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['date_of_birth']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['yearandsection']}</td>";
            echo "<td>{$row['adviser']}</td>";
            echo "<td>{$row['case']}</td>";
// Add an Edit button that links to the edit page with the case_id as a parameter
echo "<td>
        <form action='update_report.php' method='post'>
            <input type='submit' name='edit' value='EDIT'>
            <input type='text' name='editname' placeholder='Enter Name' value='" . $row['name'] . "' required/>
            <input type='text' name='editid' placeholder='Enter Relationship to victim' value='" . $row['id'] . "' required/>
            <input type='text' name='editdate_of_birth' placeholder='Enter Address' value='" . $row['date_of_birth'] . "' required/>
            <input type='text' name='editage' placeholder='Enter Contact Number' value='" . $row['age'] . "' required/>
            <input type='text' name='editsex' placeholder='Enter Case' value='" . $row['sex'] . "' required/>
            <input type='text' name='edityearandsection' placeholder='Enter Case' value='" . $row['yearandsection'] . "' required/>
            <input type='text' name='editadviser' placeholder='Enter Case' value='" . $row['adviser'] . "' required/>
            <input type='text' name='editcase' placeholder='Enter Case' value='" . $row['case'] . "' required/>
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
            <th></th>
            <th></th>
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
        // Add an Edit button that links to the edit page with the case_id as a parameter
echo "<td>
<form action='update_report.php' method='post'>
    <input type='submit' name='edit' value='EDIT'>
    <input type='text' name='editm_name' placeholder='Enter Name' value='" . $row['m_name'] . "' required/>
    <input type='text' name='editm_age' placeholder='Enter Relationship to victim' value='" . $row['m_age'] . "' required/>
    <input type='text' name='editm_occupation' placeholder='Enter Address' value='" . $row['m_occupation'] . "' required/>
    <input type='text' name='editm_address' placeholder='Enter Contact Number' value='" . $row['m_address'] . "' required/>
    <input type='text' name='editm_contact' placeholder='Enter Case' value='" . $row['m_contact'] . "' required/>
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
            <th></th>
            <th></th>
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
        
            // Add an Edit button that links to the edit page with the case_id as a parameter
echo "<td>
<form action='update_report.php' method='post'>
    <input type='submit' name='edit' value='EDIT'>
    <input type='text' name='editf_name' placeholder='Enter Name' value='" . $row['f_name'] . "' required/>
    <input type='text' name='editf_age' placeholder='Enter Relationship to victim' value='" . $row['f_age'] . "' required/>
    <input type='text' name='editf_occupation' placeholder='Enter Address' value='" . $row['f_occupation'] . "' required/>
    <input type='text' name='editf_address' placeholder='Enter Contact Number' value='" . $row['f_address'] . "' required/>
    <input type='text' name='editf_contact' placeholder='Enter Case' value='" . $row['f_contact'] . "' required/>
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
?>
    </table>
</div>
    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>
