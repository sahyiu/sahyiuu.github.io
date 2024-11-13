<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior High School Enrollment System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        /* Reset and basic styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header, footer {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header a, footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        header a:hover, footer a:hover {
            text-decoration: underline;
        }
        .hero-section {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: #fff;
            position: relative;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            z-index: 1;
            position: relative;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            z-index: 1;
            position: relative;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            font-size: 1rem;
            z-index: 1;
            position: relative;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        nav {
            margin-top: 10px;
        }
        nav .btn {
            margin: 0 10px;
        }
        footer {
            margin-top: 50px;
            background-color: #007bff;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <img src="logo.png" alt="School Logo" width="100" height="100">
        <h1>Senior High School Enrollment System</h1>
        <nav>
            <a href="#" class="btn">Register Here</a>
            <a href="#" class="btn">Login</a>
        </nav>
    </div>
</header>

<div class="hero-section">
    <div class="container">
        <h1>Welcome to Our Senior High School</h1>
        <p>Enroll now and take the first step towards a brighter future!</p>
        <a href="#" class="btn">Enroll Now</a>
    </div>
</div>

<footer>
    <div class="container">
        <p>&copy; 2024 Senior High School Enrollment System</p>
    </div>
</footer>

</body>
</html>
