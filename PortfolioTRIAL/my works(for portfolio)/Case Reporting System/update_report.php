<?php
// Include your database connection file (config.php)
include "config.php";

if (isset($_POST['edit'])) {
    $editcase_id = $_POST['editcase_id'];
    $editc_name = $_POST['editc_name'];
    $editrelationshiptovictim = $_POST['editrelationshiptovictim'];
    $editc_address = $_POST['editc_address'];
    $editc_contactnumber= $_POST['editc_contactnumber'];
    $editc_case = $_POST['editc_case'];
}

if(isset($_POST['update'])) {
    $updatecase_id = $_POST['updatecase_id'];
    $updatec_name = $_POST['updatec_name'];
    $updaterelationshiptovictim = $_POST['updaterelationshiptovictim'];
    $updatec_address = $_POST['updatec_address'];
    $updatec_contactnumber= $_POST['updatec_contactnumber'];
    $updatec_case = $_POST['updatec_case'];

    $queryupdate = "UPDATE complainant SET c_name='$updatec_name', relationshiptovictim='$updaterelationshiptovictim', c_address='$updatec_address', c_contactnumber='$updatec_contactnumber', c_case='$updatec_case' WHERE case_id = '$updatecase_id'";
    $sqlupdate = mysqli_query($conn,$queryupdate);

    echo '<script>alert("Succesfully created!")</script>';
    echo '<script>window.location.href = "dashboard.php"</script>';
}else {
    echo "Error updating record: " . mysqli_error($conn);
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
    <a >Complainants</a>
    <a href="respondent.php">Respondents</a>
    <a href="victim.php">Victims</a>
    <a href="offender.php">Offenders</a>
    <a href="dashboard.php">Dashboard</a>
    </nav>
</div>
<div class="container">
<h2>UPDOOT Complainants</h2>
<input type ="text" name ="updatec_name" placeholder= "Enter Name" value="<?php echo $editc_name?>" required/>
<input type ="text" name ="updaterelationshiptovictim" placeholder= "Enter Relationship to victim" value="<?php echo $editrelationshiptovictim?>"required/>
<input type ="text" name ="updatec_address" placeholder= "Enter Address" value="<?php echo $editc_address?>"required/>
<input type ="text" name ="updatec_contactnumber" placeholder= "Enter Contact Number" value="<?php echo $editc_contactnumber?>"required/>
<input type ="text" name ="updatec_case" placeholder= "Enter Case" value="<?php echo $editc_case?>"required/>
<input type ="submit" name ="update" value= "UPDATE" required/>
<input type ="hidden" name ="updatecase_id" value= "<?php echo $editcase_id?>" required/>

</div>
</body>

</html>
