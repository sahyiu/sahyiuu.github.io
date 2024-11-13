<?php
session_start();
include('config.php');

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql)


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
        .query_container{
            width: 100%;
            height: 55%;
            position: relative;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border-radius: 10px;
            background: linear-gradient(90deg, hsla(280, 27%, 59%, .2) 0%, hsla(290, 46%, 55%, 0.2) 50%);
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

        input[type="submit"] {
            background-color: #734caf;
            color: white;
            margin: 0px 880px;
            margin-left: 80%;
            display: block;
            padding: 10px ;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        textarea{
            width: 80%;
            margin: 10px 100px;
            display: block;
            border: 1px solid #D3DCBB;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-top:10px;
            margin-left:10px;
            margin-right:10px;
            font-size: 23px;
            letter-spacing: 1.5px;
            color: black;
        }

        table {
            border-collapse: collapse;
            margin-top:5%;
            margin-left:3%;
            margin-right:3%;
            width: 90%;
            margin-top: 40px;
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
    <a href="search.php">Search</a>
    <a href="index.php">Home</a>
    </nav>
</div>
    <div class="query_container">
        
        <form method="post" action="">
            <label for="sql_code">Enter SQL Code:</label><br>
            <textarea id="sql_code" name="sql_code" rows="5" cols="50"></textarea><br><br>
            <input type="submit" value="Execute">
    

        <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get SQL code from form
        $sql = $_POST["sql_code"];

        // Execute SQL query
        $result = $conn->query($sql);


        // Display query result
        if ($result === TRUE) {
            echo "<p>Query executed successfully!</p>";
        } else {
        
        }

         // Display query result if any
         if ($result && $result->num_rows > 0) {
            echo "<table border='1'>";
            // Output table header
            echo "<tr>";
            $row = $result->fetch_assoc();
            foreach ($row as $key => $value) {
                echo "<th>" . htmlspecialchars($key) . "</th>";
            }
            echo "</tr>";
            // Output data of each row
            $result->data_seek(0); // Reset pointer to the beginning
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }else{
        echo "<p>Error executing query: " . $conn->error . "</p>";
    }
        ?>
    </div>
    </form>

</body>
</html>