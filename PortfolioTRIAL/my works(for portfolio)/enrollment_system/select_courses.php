<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "enrollment_db";
$conn = new mysqli($servername, $username, $password, $dbname);

$student_id = 1; // You can retrieve the student ID from the session or database after registration

// Check if the form data is submitted
if(isset($_POST['courses']) && is_array($_POST['courses'])) {
    // Prepare a SQL statement with a parameterized query to prevent SQL injection
    $sql = "INSERT INTO student_courses (student_id, course_id) VALUES (?, ?)";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ii", $student_id, $course_id);

    // Insert selected courses for the student
    foreach ($_POST['courses'] as $course_id) {
        // Execute the statement
        if ($stmt->execute()) {
            echo "Course selection successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No courses selected.";
}

// Close the connection
$conn->close();
?>
