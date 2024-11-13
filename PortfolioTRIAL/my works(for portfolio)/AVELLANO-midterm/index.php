<?php
session_start();
include('config.php');

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));  // More detailed error message
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Student Information</title>
        <style>
        body{
            font-family: 'Lora', serif;
            margin: 0;
            padding: 10;
            background: linear-gradient(90deg, hsla(260, 38%, 33%, 1) 0%, hsla(258, 28%, 16%, 1) 100%);        
        }
        
        .info_container{
            width: 100%;
            height: 100%;
            position: relative;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border-radius: 10px;
            background: linear-gradient(90deg, hsla(280, 27%, 59%, .1) 0%, hsla(290, 46%, 55%, 0.1) 20%);
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
            margin-left: 15;
            margin-top:0px;
            margin-bottom: 8px;
            font-size: 23px;
            letter-spacing: 1.5px;
            color: black;
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
            margin-left: 28px;
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
    <a href="search.php">Search</a>
    <a href="query.php">Query</a>
    </nav>
</div>
    
    
        
        <div class = "info_container">
            <h2>Enrolled Students</h2>
            <table>
            <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Contact Number</th>
            
            </tr>
            </table>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['student_id']}</td>";
                echo "<td>{$row['student_name']}</td>";
                echo "<td>{$row['contact_number']}</td>";
            }
            ?>

        </div>
    

</body>
</html>