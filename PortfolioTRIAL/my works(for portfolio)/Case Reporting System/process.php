<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    //victim
    $name = $_POST['name'];
    $id = $_POST['id'];
    $date_of_birth = $_POST['date_of_birth'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $yearandsection = $_POST['yearandsection'];
    $adviser = $_POST['adviser'];
    $case = $_POST['case'];
    //victim's prents
    $m_name = $_POST['m_name'];
    $m_age = $_POST['m_age'];
    $m_occupation = $_POST['m_occupation'];
    $m_address = $_POST['m_address'];
    $m_contactnumber = $_POST['m_contactnumber'];
    //
    $f_name = $_POST['f_name'];
    $f_age = $_POST['f_age'];
    $f_occupation = $_POST['f_occupation'];
    $f_address = $_POST['f_address'];
    $f_contactnumber = $_POST['f_contactnumber'];
    //Complainant
    $c_name = $_POST['c_name'];
    $relationshiptovictim = $_POST['relationshiptovictim'];
    $c_address = $_POST['c_address'];
    $c_contactnumber = $_POST['c_contactnumber'];
    $c_case = $_POST['c_case'];
    //Respondent
    $spr_name = $_POST['spr_name'];
    $spr_dateofbirthd = $_POST['spr_dateofbirth'];
    $spr_age = $_POST['spr_age'];
    $spr_sex = $_POST['spr_sex'];
    $position = $_POST['position'];
    $spr_address = $_POST['spr_address'];
    $spr_contactnumber = $_POST['spr_contactnumber'];
    $spr_case = $_POST['spr_case'];
    //
    $sr_name = $_POST['sr_name'];
    $sr_id = $_POST['sr_id'];
    $sr_dateofbirth = $_POST['sr_dateofbirth'];
    $sr_age = $_POST['sr_age'];
    $sr_sex = $_POST['sr_sex'];
    $sr_yearandsection = $_POST['sr_yearandsection'];
    $sr_adviser = $_POST['sr_adviser'];
    $sr_case = $_POST['sr_case'];
    //victim's prents
    $m_name = $_POST['m_name'];
    $m_age = $_POST['m_age'];
    $m_occupation = $_POST['m_occupation'];
    $m_address = $_POST['m_address'];
    $m_contactnumber = $_POST['m_contactnumber'];
    //
    $f_name = $_POST['f_name'];
    $f_age = $_POST['f_age'];
    $f_occupation = $_POST['f_occupation'];
    $f_address = $_POST['f_address'];
    $f_contactnumber = $_POST['f_contactnumber'];
    //Offenders
    $victims_name = $_POST['name'];
    $offenders_name = $_POST['o_name'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    
    // ... (retrieve other form fields)

    // Insert data into the database
    $sqlv = "INSERT INTO victim VALUES (null, '$name', '$id ', '$date_of_birth', '$age', '$sex', '$yearandsection', '$adviser', '$case')";
    $sqlmv = "INSERT INTO victims_mother VALUES (null, '$m_name', '$m_age ', '$m_occupation', '$m_address', '$m_contactnumber')";
    $sqlfv = "INSERT INTO victims_father VALUES (null, '$f_name', '$f_age ', '$f_occupation', '$f_address', '$f_contactnumber')";
    $sqlc = "INSERT INTO complainant VALUES (null, '$c_name', '$relationshiptovictim ', '$c_address', '$c_contactnumber', '$c_case')";
    $sqlspr = "INSERT INTO respondent_school_personnel VALUES (null, '$spr_name', '$spr_dateofbirthd ', '$spr_age', '$spr_sex', '$position', '$spr_address', '$spr_contactnumber', '$spr_case')";
    $sqlsr = "INSERT INTO respondent_student VALUES (null, '$sr_name', '$sr_id ', '$sr_dateofbirth', '$sr_age', '$sr_sex', '$sr_yearandsection', '$sr_adviser', '$sr_adviser')";
    $sqlo = "INSERT INTO offender VALUES (null, '$o_name', '$o_id ', '$o_date_of_birth', '$o_age', '$o_sex', '$o_yearandsection', '$o_adviser', '$o_case')";
    $sqlcs = "INSERT INTO students_cases VALUES (null, '$victims_name', '$offenders_name', '$date', '$status')";

    //
    $sqlV =    mysqli_query($conn, $sqlv);
    $sqlMV =    mysqli_query($conn, $sqlmv);
    $sqlFV =    mysqli_query($conn, $sqlfv);
    $sqlC =    mysqli_query($conn, $sqlc);
    $sqlSPR =    mysqli_query($conn, $sqlspr);
    $sqlSR =    mysqli_query($conn, $sqlsr);
    $sqlO =    mysqli_query($conn, $sqlo);

    // Execute the SQL query (Note: Use prepared statements for better security)
    if (mysqli_query($conn, $sqlv)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sqlv . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>