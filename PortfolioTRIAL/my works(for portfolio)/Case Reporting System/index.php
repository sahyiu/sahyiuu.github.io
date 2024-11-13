<?php
session_start();

// Hardcoded credentials for demonstration purposes
$valid_username = 'username';
$valid_password = '12345';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Check if entered credentials match the hardcoded credentials
    if ($entered_username == $valid_username && $entered_password == $valid_password) {
        $_SESSION['username'] = $entered_username;
        header("Location: alumniprofile.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title>CSIS-Login</title>
    
    <style>
<?php include "stylesheet.css"?>
    </style>
    
</head>
<body >

<div class="logoimg">
<img src="logo.png" alt="CS INTEGRATED SCHOOL" width = "55" height = "70">
</div>

<div class="container">

    <h1>CS Integrated School</h1>
    <p> LOGIN </p>

    <?php if (isset($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>


    <form action="dashboard.php" method="post">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="redirect">Login</button>
    </form>

</div>




</body>
</html>

