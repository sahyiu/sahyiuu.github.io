<?php
session_start();
include('config.php');


// Check if the user is logged in
if (isset($_SESSION['user'])) {
    header("location: index.php"); // Redirect to the login page if not logged in
    exit();
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
    <title>Dashboard</title>
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
            padding: 10px 20px;
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
            text-align: center;
    
            color: #FFDBDD;
        }
        h3{
            font-size: 40px;
            text-shadow: 1px 1px 6px black;
            text-align: center;
            letter-spacing: 1px;
            color: #FFDBDD;
            
            padding: 5px;
        }
        
        p{
            font-size: 17px;
            text-shadow: 1px 1px 6px black;
            text-align: center;
            letter-spacing: 1px;
            color: #FFDBDD;
            background-color: #cfced100;
        }

       

        

      .dashboard-section {
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            text-align: center;
            
        }

        .dashboard-card {
            width: 30%;
            margin: 15px;
            padding: 15px;
            background: linear-gradient(90deg, rgba(15, 6, 35, 0.3) 0%, rgba(44, 7, 54, 0.3) 100%);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        .dashboard-card a {
            text-decoration: none;
            color: #333;
            text-align: center;
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
        <a href="victim.php">Victims</a>
        <a href="offender.php">Offenders</a>
        <a href="dashboard.php">Dashboard</a>
        </nav>
    </div>
<div class="dashboard-container">
        <h2>Welcome, User!</h2>

        <div class="dashboard-section">
            <div class="dashboard-card">
                <h3>Case Management</h3>
                <p>View and manage cases</p>
                <a href="case.php" style= "color: #D3DCBB;">Go to Cases</a>
            </div>

            <div class="dashboard-card">
                <h3>Complainant Management</h3>
                <p>Manage complainants</p>
                <a href="complainant.php" style= "color: #D3DCBB;">Go to Complainants</a>
            </div>

            <div class="dashboard-card">
                <h3>Respondent Management</h3>
                <p>Manage respondents</p>
                <a href="respondent.php" style= "color: #D3DCBB;">Go to Respondents</a>
            </div>

            <div class="dashboard-card">
                <h3>Victim Management</h3>
                <p>Manage victims</p>
                <a href="victim.php" style= "color: #D3DCBB;">Go to Victims</a>
            </div>
        </div>
</div>        
</body>

</html>