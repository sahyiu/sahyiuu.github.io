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
            width: 100%;
            height:45%;
            margin: 0 auto;
            padding: 30px;
            box-sizing: border-box;
            font-size: 14px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
        }

        .column {
            margin-top: 0 auto;
            float: left;
            width: 46%; /* Adjust the width as needed */
            margin: 0.05%;
        }


        form {
            max-width: 700px;
            margin: 50px auto;
            font-size: 20px;
            letter-spacing: 1px;
            color: black;
            /*color: #FFDBDD;*/
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label{
            display: block;
            font-weight: bold;
            font-size: 20px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
        }
        input[type="int"],
        input[type="date"],
        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 5px 10px;
            margin: 8px 16px;
            display: block;
            border: 1px solid #D3DCBB;
            box-sizing: border-box;
            font-size: 15px;
            text-align: left;
            letter-spacing: 1px;
            color: black;
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
            margin-left: 50px;
            margin-top: 0 auto;
            margin-bottom: 1px;
            color: #FFDBDD;
        }
        h3{
            font-size: 25px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
            
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
        p{
            font-size: 25px;
            text-shadow: 1px 1px 6px black;
            text-align: left;
            letter-spacing: 1px;
            color: #FFDBDD;
            background-color: #cfced100;
            margin-left: 50px;
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
<div class="column">
    <h2>Victim</h2>
   <form action="process.php" method="post">
        <label for="name"><b>Name:</b></label>
        <input type="text" placeholder="Enter FullName" name="name" required>

        <label for="id"><b>School ID:</b></label>
        <input type="int" placeholder="Enter School ID" name="id" required>

        <label for="dateofbirth"><b>Date of Birth:</b></label>
        <input type="date" name="date_of_birth" required>

        <label for="age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="age" required>

        <label for="sex"><b>Sex:</b></label>
        <input type="text" placeholder="Enter Sex" name="sex" required>

        <label for="yearandsection"><b>Year and Section:</b></label>
        <input type="text" placeholder="Enter Year and Section" name="yearandsection" required>
        
        <label for="adviser"><b>Adviser:</b></label>
        <input type="text" placeholder="Enter Adviser's Name" name="adviser" required>
        
        <label for="case"><b>Case:</b></label>
        <input type="text" placeholder="Enter Case Description" name="case" required>

        <label for="date_reported"><b>Date Reported:</b></label>
        <input type="date" name="date_reported" required>

        <p><br></p>
        <p><b>Parents:<b></p>

        <label for="m_name "><b>Mother's Name:</b></label>
        <input type="text" placeholder="Enter Mother's Name" name="m_name" required>
        
        <label for="m_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="m_age" required>
        
        <label for="m_occupation"><b>Occupation:</b></label>
        <input type="text" placeholder="Enter Mother's Occupation" name="m_occupation" required>
        
        <label for="m_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="m_address" required>

        <label for="m_contactnumber"><b>Contact Number:</b></label>
        <input type="int" placeholder="Enter Contact Number" name="m_contactnumber" required>

        <label for="f_name"><b>Father's Name:</b></label>
        <input type="text" placeholder="Enter Father's Name" name="f_name" required>

        <label for="f_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="f_age" required>
        
        <label for="f_occupation"><b>Occupation:</b></label>
        <input type="text" placeholder="Enter Father's Occupation" name="f_occupation" required>
        
        <label for="f_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="f_address" required>
        
        <label for="f_contactnumber"><b>Contact Number:</b></label>
        <input type="int" placeholder="Enter Contact Number" name="f_contactnumber" required>
        </form>
        <p><br></p>
        <p><br></p>
        <button type="submit">Submit</button>
</div>

<div class="column">
  <h2>Complainant</h2>
  <form action="process.php" method="post">
        <label for="c_name"><b>Name:</b></label>
        <input type="text" placeholder="Enter FullName" name="c_name" required>

        <label for="relationshiptovictim"><b>Relationship to Victim:</b></label>
        <input type="text" placeholder="Enter Relationship to Victim" name="relationshiptovictim" required>

        <label for="c_address"><b>Address:</b></label>
        <input type="text" name="c_address" required>

        <label for="c_contactnumber"><b>Contact Number:</b></label>
        <input type="int" placeholder="Enter Age" name="c_contactnumber" required>

        <label for="c_case"><b>Case:</b></label>
        <input type="text" placeholder="Enter Case Description" name="c_case" required>
</div>
<div class="column">
    <h2>Respondent</h2>
   <form action="process.php" method="post">
        <p><b>If respondent is a School Personnel<b></p>
        <label for="spr_name"><b>Name:</b></label>
        <input type="text" placeholder="Enter FullName" name="spr_name" required>

        <label for="spr_dateofbirth"><b>Date of Birth:</b></label>
        <input type="date"  name="spr_date_of_birth" required>

        <label for="spr_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="spr_age" required>

        <label for="spr_sex"><b>Sex:</b></label>
        <input type="text" placeholder="Enter Sex" name="sex" required>

        <label for="position"><b>Position:</b></label>
        <input type="text" placeholder="Enter Position" name="position" required>

        <label for="spr_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="spr_contactnumber" required>
        
        <label for="spr_contactnumber"><b>Contact Number:</b></label>
        <input type="int" placeholder="Enter Contact Number" name="spr_contactnumber" required>
        
        <label for="spr_case"><b>Case:</b></label>
        <input type="text" placeholder="Enter Case Description" name="spr_case" required>

        <p><br></p>
        <p><b>If respondent is a Student<b></p>
        <label for="sr_name"><b>Name:</b></label>
        <input type="text" placeholder="Enter FullName" name="sr_name" required>

        <label for="sr_id"><b>School ID:</b></label>
        <input type="int" placeholder="Enter School ID" name="sr_id" required>

        <label for="sr_dateofbirth"><b>Date of Birth:</b></label>
        <input type="date" name="sr_date_of_birth" required>

        <label for="sr_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="sr_age" required>

        <label for="sr_sex"><b>Sex:</b></label>
        <input type="text" placeholder="Enter Sex" name="sr_sex" required>

        <label for="sr_yearandsection"><b>Year and Section:</b></label>
        <input type="text" placeholder="Enter Year and Section" name="sr_yearandsection" required>
        
        <label for="sr_adviser"><b>Adviser:</b></label>
        <input type="text" placeholder="Enter Adviser's Name" name="sr_adviser" required>
        
        <label for="sr_case"><b>Case:</b></label>
        <input type="text" placeholder="Enter Case Description" name="sr_case" required>

        <p><br></p>
        <p><b>Parents:<b></p>
        <label for="m_name "><b>Mother's Name:</b></label>
        <input type="text" placeholder="Enter Mother's Name" name="m_name" required>
        
        <label for="m_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="age" required>
        
        <label for="m_occupation"><b>Occupation:</b></label>
        <input type="text" placeholder="Enter Mother's Occupation" name="m_occupation" required>
        
        <label for="m_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="m_address" required>

        <label for="m_contactnumber"><b>Contact Number:</b></label>
        <input type="int" placeholder="Enter Contact Number" name="m_contactnumber" required>

        <label for="f_name"><b>Father's Name:</b></label>
        <input type="text" placeholder="Enter Father's Name" name="f_name" required>

        <label for="f_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="f_age" required>
        
        <label for="f_occupation"><b>Occupation:</b></label>
        <input type="text" placeholder="Enter Father's Occupation" name="f_occupation" required>
        
        <label for="f_address"><b>Address:</b></label>
        <input type="text" placeholder="Enter Address" name="f_address" required>
        
        <label for="f_contactnumber"><b>Contact Number:</b></label>
        <input type="int" placeholder="Enter Contact Number" name="f_contactnumber" required>
        </form>
</div>
<div class="column">
    <h2>Offender</h2>
   <form action="process.php" method="post">
        <label for="o_name"><b>Name:</b></label>
        <input type="text" placeholder="Enter FullName" name="o_name" required>

        <label for="o_id"><b>School ID:</b></label>
        <input type="int" placeholder="Enter School ID" name="o_id" required>

        <label for="o_dateofbirth"><b>Date of Birth:</b></label>
        <input type="date" name="o_date_of_birth" required>

        <label for="o_age"><b>Age:</b></label>
        <input type="int" placeholder="Enter Age" name="o_age" required>

        <label for="o_sex"><b>Sex:</b></label>
        <input type="text" placeholder="Enter Sex" name="o_sex" required>

        <label for="o_yearandsection"><b>Year and Section:</b></label>
        <input type="text" placeholder="Enter Year and Section" name="o_yearandsection" required>
        
        <label for="o_adviser"><b>Adviser:</b></label>
        <input type="text" placeholder="Enter Adviser's Name" name="o_adviser" required>
        
        <label for="o_case"><b>Case:</b></label>
        <input type="text" placeholder="Enter Case Description" name="o_case" required>
</div>

</body>

</html>