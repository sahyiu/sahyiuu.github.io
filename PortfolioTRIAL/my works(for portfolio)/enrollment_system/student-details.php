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

// Initialize $lrn_number variable
$lrn_number = ''; // Add this line

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'] ?? '';
    $middle_name = $_POST['middle_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $extension_name = $_POST['extension_name'] ?? '';
    $nickname = $_POST['nickname'] ?? '';
    $lrn_number = $_POST['lrn_number'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $religion = $_POST['religion'] ?? '';
    $place_of_birth = $_POST['place_of_birth'] ?? '';
    $have_been_hospitalized = isset($_POST['have_been_hospitalized']) ? 1 : 0;
    $reason = $_POST['reason'] ?? '';
    $medical_history = $_POST['medical_history'] ?? '';

    // Check if the LRN number already exists
    $sql_check = "SELECT * FROM student_information WHERE lrn_number = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $lrn_number);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // LRN number already exists
        echo "Error: LRN number already exists. Please use a unique LRN number.";
    } else {
        // Prepare INSERT statement
        $sql = "INSERT INTO student_information (first_name, middle_name, last_name, extension_name, nickname, lrn_number, birthdate, gender, religion, place_of_birth, have_been_hospitalized, reason, medical_history) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssiss", $first_name, $middle_name, $last_name, $extension_name, $nickname, $lrn_number, $birthdate, $gender, $religion, $place_of_birth, $have_been_hospitalized, $reason, $medical_history);
        
        if ($stmt->execute()) {
            // Redirect to student details page with LRN number
            header("Location: student-details.php?lrn_number=" . $lrn_number);
            exit();
        } else {
            echo "Error: Unable to insert data. " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    }

    // Close statement and connection
    $stmt_check->close();
}

// Fetch data from student_information table using a prepared statement
$sql = "SELECT student_info_id, first_name, middle_name, last_name, extension_name, nickname, lrn_number, birthdate, gender, religion, place_of_birth, have_been_hospitalized, reason, medical_history, reg_date FROM student_information WHERE lrn_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $lrn_number);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
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

        
    </style>
</head>
<body>
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


    <section class="details-section" >
        <h2>Student Details</h2>
        <table>
            <?php  
            

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>Student Info ID:</td>
                        <td><?php echo htmlspecialchars($row['student_info_id']); ?></td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                    </tr>
                    <tr>
                        <td>Middle Name:</td>
                        <td><?php echo htmlspecialchars($row['middle_name']); ?></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                    </tr>
                    <tr>
                        <td>Extension Name:</td>
                        <td><?php echo htmlspecialchars($row['extension_name']); ?></td>
                    </tr>
                    <tr>
                        <td>Nickname:</td>
                        <td><?php echo htmlspecialchars($row['nickname']); ?></td>
                    </tr>
                    <tr>
                        <td>LRN Number:</td>
                        <td><?php echo htmlspecialchars($row['lrn_number']); ?></td>
                    </tr>
                    <tr>
                        <td>Birthdate:</td>
                        <td><?php echo htmlspecialchars($row['birthdate']); ?></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                    </tr>
                    <tr>
                        <td>Religion:</td>
                        <td><?php echo htmlspecialchars($row['religion']); ?></td>
                    </tr>
                    <tr>
                        <td>Place of Birth:</td>
                        <td><?php echo htmlspecialchars($row['place_of_birth']); ?></td>
                    </tr>
                    <tr>
                        <td>Have Been Hospitalized:</td>
                        <td><?php echo $row['have_been_hospitalized'] ? 'Yes' : 'No'; ?></td>
                    </tr>
                    <tr>
                        <td>Reason:</td>
                        <td><?php echo htmlspecialchars($row['reason']); ?></td>
                    </tr>
                    <tr>
                        <td>Medical History:</td>
                        <td><?php echo htmlspecialchars($row['medical_history']); ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='2'>No student details found</td></tr>";
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

<!-- Your footer content -->

</body>
</html>