<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "enrollmentsystemdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from contact_details table
$sql = "SELECT contact_email, mobile_number_1, mobile_number_2, student_address, contact_person_name, contact_number, contact_person_address FROM contact_details";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Georgia&display=swap">
    <style>
         body {
            font-family: 'Georgia', serif;
            background-color: #f2cf3d;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width:  1000px;
            margin: 0 auto;
            padding: 10px;
        }

        nav {
            overflow: hidden;
            text-align: right;
            background-color: #6a0611;
        }

        nav a {
            float: right;
            display: block;
            color: #fff;
            text-align: right;
            padding: 14px 16px;
            text-decoration: none;
            font-family: 'Roboto', serif;
        }

        nav a:hover {
            background-color: #6a0611;
            color: black;
        }

        .header-content {
            text-align: center;
            padding: 10px 0;
        }

        .header-content h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .logo {
            display: inline-block;
            vertical-align: middle;
            margin-right: 15px;
        }

        .school-name {
            display: inline-block;
            vertical-align: middle;
            font-size: 2.5em;
            color: #6a0611;
        }

        .details-section {
            background-color: #fff;
            border-radius: 1px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-top: 30px;
            margin-bottom: 20px;
            font-family: 'Roboto', serif;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            text-align: center;
            color: #6a0611;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
        }

        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .back-button {
            background-color: #6a0611; 
            color: white; 
            padding: 5px 10px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            margin-top: 20px; 
            display: block; 
            text-decoration: none; 
            text-align: center;
        }

        .back-button:hover {
            background: #000;
        }

        .nav-buttons {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-buttons button {
            background-color: #6a0611;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .nav-buttons button:hover {
            background-color: #000;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }
        th {
            padding: 10px; /* Add padding to the table header cells */
            text-align: left; /* Align text to the left within the cells */
            border: 1px solid #ddd;
        }
        th#id-column {
            background-color: #6a0611; /* Choose your desired background color */
            color: white; /* Text color */
            padding: 8px; /* Padding for the header cell */
            text-align: left; 
        }
    </style>
    
</head>


<header>
    <div class="header-content">
        <img src="logo-removebg-preview.png" alt="School Logo" class="logo" width="100" height="100">
        <div class="school-name">ST. ALPHONUS LIGUORI INTEGRATED SCHOOL</div>
    </div>
</header>

<nav>
    <a class="navbar-link" href="edit.php">Contact Us</a>
    <a href="about.php">About us</a>
    <a href="main.php">Home</a>
</nav>

<div class="container">
    <div class="nav-buttons">
        <button onclick="redirectTo('student-details.php')">Student Details</button>
        <button onclick="redirectTo('contact-details.php')">Contact Details</button>
        <button onclick="redirectTo('parent-details.php')">Parent Details</button>
        <button onclick="redirectTo('enrollment-details.php')">Enrollment Details</button>
    </div>



    <div class="container">
    <section class="details-section">
        <h2>Contact Details</h2>
        <table>
            <?php
            // Fetch data from contact_details table
            $sql = "SELECT contact_details_id, contact_email, mobile_number_1, mobile_number_2, student_address, contact_person_name, contact_number, contact_person_address FROM contact_details";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <th id='id-column'>Contact Details ID</th>
                            <td>" . htmlspecialchars($row["contact_details_id"]) . "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>" . htmlspecialchars($row["contact_email"]) . "</td>
                        </tr>
                        <tr>
                            <th>Mobile Number 1</th>
                            <td>" . htmlspecialchars($row["mobile_number_1"]) . "</td>
                        </tr>
                        <tr>
                            <th>Mobile Number 2</th>
                            <td>" . htmlspecialchars($row["mobile_number_2"]) . "</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>" . htmlspecialchars($row["student_address"]) . "</td>
                        </tr>
                        <tr>
                            <th>Contact Person Name</th>
                            <td>" . htmlspecialchars($row["contact_person_name"]) . "</td>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                            <td>" . htmlspecialchars($row["contact_number"]) . "</td>
                        </tr>
                        <tr>
                            <th>Contact Person Address</th>
                            <td>" . htmlspecialchars($row["contact_person_address"]) . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No contact details found</td></tr>";
            }
            ?>
        </table>
    </section>
</div>

<script>
function redirectTo(page) {
    window.location.href = page;
}
</script>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
