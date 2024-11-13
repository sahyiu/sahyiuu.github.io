<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'delete' button is clicked
    if (isset($_POST['delete']) && isset($_POST['case_id'])) {
        // Retrieve the 'id' value
        $case_id = $_POST['case_id'];

        // Create SQL query to delete the record
        $sql = "DELETE FROM complainant WHERE case_id = $case_id";

        // Execute the SQL query
        if (mysqli_query($conn, $sql)) {
            // Record deleted successfully, redirect to the dashboard or any other page
            
            echo '<script>alert("Succesfully deleted!")</script>';
            echo '<script>window.location.href = "dashboard.php"</script>';
            
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
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
            font-size: 15px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
            background: linear-gradient(90deg, hsla(260, 38%, 33%, 1) 0%, hsla(258, 28%, 16%, 1) 100%);
        }

        .container {
            width: 90%;
            height:50%;
            margin: 0 auto;
            padding: 30px;
            box-sizing: border-box;
            font-size: 15px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
        }

        form {
            max-width: 700px;
            margin: 50px auto;
            
            letter-spacing: 1px;
            color: #FFDBDD;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label{
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 15px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
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
            font-size: 15px;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
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
            background-color: #ddd;
            color: black;
        }

        button {
            background-color: #734caf;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        <img src="logo.png" class="logo">
        <a href="logout.php">Logout</a>
        <a href="case.php">Cases</a>
        <a href="complainant.php">Complainants</a>
        <a href="respondent.php">Respondents</a>
        <a >Victims</a>
        <a href="dashboard.php">Dashboard</a>
        </nav>
    </div>
<div class="container">

    <form action="submit_case.php" method="post">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter FullName" name="name" required>

        <label for="date of birth"><b>Date of Birth</b></label>
        <input type="date" name="date_of_birth" required>

        <label for="age"><b>Age</b></label>
        <input type="text" placeholder="Enter Age" name="age" required>

        <label for="sex"><b>Sex</b></label>
        <input type="text" placeholder="Enter Sex" name="sex" required>

        <label for="year and section"><b>Year and Section</b></label>
        <input type="text" placeholder="Enter Year and Section" name="year_and_section" required>
        
        <label for="adviser"><b>Adviser</b></label>
        <input type="text" placeholder="Enter Adviser's Name" name="adviser" required>
        
        <label for="date_reported"><b>Date Reported</b></label>
        <input type="date" name="date_reported" required>

        <p><b>Parents:<b></p>

        <label for="mother's_name "><b>Mother's Name:</b></label>
        <input type="text" placeholder="Enter Mother's Name" name="mother's_name" required>
        
        <label for="m_age"><b>Age:</b></label>
        <input type="text" placeholder="Enter Age" name="age" required>
        
        <label for="m_occupation"><b>Occupation:</b></label>
        <input type="text" placeholder="Enter Mother's Occupation" name="m_occupation" required>
        
        <label for="m_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="m_address" required>

        <label for="Father's Name"><b>Father's Name:</b></label>
        <input type="text" placeholder="Enter Father's Name" name="father's_name" required>

        <label for="f_age"><b>Age:</b></label>
        <input type="text" placeholder="Enter Age" name="f_age" required>
        
        <label for="f_occcupation"><b>Occupation:</b></label>
        <input type="text" placeholder="Enter Father's Occupation" name="f_occupation" required>
        
        <label for="f_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="f_adviser" required>
        
        <label for="contact_number"><b>Contact Number:</b></label>
        <input type="text" placeholder="Enter Contact Number" name="contact_number" required>
        


        <button type="submit">Submit</button>
        </form>
</div>
</body>

</html>