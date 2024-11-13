<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Senior High School Enrollment System</title>
    <style>
        /* CSS styles for About Us page */
       /* Body Styling */
body {
    font-family: 'Georgia', serif;
    background-color: #f2cf3d;
    color: #333;
    line-height: 1.6;
    overflow-x: hidden;
}

/* Container */
.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Styling */
nav {
    overflow: hidden;
    text-align: right;
    border: 2px;
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
        p {
            line-height: 1.6;
            margin-bottom: 20px;
            color: #555;
            font-size: 1.1em;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        footer {
           
           padding:0 ;
           text-align: center;
           position: fixed;
           width: 100%;
          
           bottom: 0;
           z-index: 100;
       }
    </style>
</head>
<body>
<header>
    <div class="header-content">
        <img src="logo-removebg-preview.png" alt="School Logo" class="logo" width="100" height="100">
        <div class="school-name">ST. ALPHONUS LIGUORI INTERGRATED SCHOOL</div>
    </div>
</header>

<nav>
    
    <a class="navbar-link" href="edit.php">Contact Us</a>
    <a href="main.php">Home</a>
</nav>
    <div class="container">
        <p>Welcome to the Senior High School Enrollment System!</p>
        <p>Our system aims to streamline the enrollment process for senior high school students, making it easier for both students and administrators to manage enrollment information.</p>
        <p>With our user-friendly interface, students can easily register for their desired strand and year level, providing necessary personal information for enrollment.</p>
        <p>Administrators can efficiently manage enrolled students, view enrollment statistics, and generate reports to analyze enrollment trends.</p>
        <p>We are committed to providing a seamless enrollment experience for all senior high school students, helping them embark on their educational journey with ease.</p>
        <p>For any inquiries or assistance, feel free to <a href="contact.php">contact us</a>.</p>
    </div>
    <footer>
        &copy; 2024 Senior High School Enrollment System
    </footer>
</body>
</html>
