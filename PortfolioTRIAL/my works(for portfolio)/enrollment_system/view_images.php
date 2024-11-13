
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

// Fetch image filenames from the database
$sql = "SELECT file1, file2 FROM previous_school_details";
$result = $conn->query($sql);

$imageUrls = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (!empty($row['file1'])) {
            $imageUrls[] = "uploads/" . $row['file1'];
        }
        if (!empty($row['file2'])) {
            $imageUrls[] = "uploads/" . $row['file2'];
        }
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your HTML head content here -->
</head>
<body>
    <!-- Your HTML body content here -->
    <header>
        <!-- Your header content here -->
    </header>

    <nav>
        <!-- Your navigation content here -->
    </nav>

    <div class="container">
        <section class="image-section">
            <h2>Uploaded Images</h2>
            <div class="image-gallery">
                <?php foreach ($imageUrls as $imageUrl): ?>
                    <img src="<?php echo $imageUrl; ?>" alt="Uploaded Image">
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploaded Images</title>
    <style>
        /* CSS for image gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            padding: 20px;
        }

        .image-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .image-item img {
            max-width: 100%;
            max-height: 200px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<h2>Uploaded Images</h2>

<div class="image-gallery">
    <?php
    // Directory where uploaded files are stored
    $target_dir = "uploads/";

    // Get all files in the directory
    $files = scandir($target_dir);

    // Loop through each file
    foreach ($files as $file) {
        // Skip special directory entries
        if ($file == '.' || $file == '..') continue;

        // Display the image
        echo '<div class="image-item">';
        echo '<img src="' . $target_dir . $file . '" alt="' . $file . '">';
        echo '<p>' . $file . '</p>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
