<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details and Navigation</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <h1>Form Details and Navigation</h1>
    <div class="section" id="personal-information">
        <h2>Personal Information</h2>
        <p>This form collects your personal information such as name, date of birth, and address.</p>
        <button onclick="navigateTo('personal-form')">Fill Out Personal Information</button>
    </div>
    <div class="section" id="contact-details">
        <h2>Contact Details</h2>
        <p>This form collects your contact details such as email address and phone number.</p>
        <button onclick="navigateTo('contact-form')">Fill Out Contact Details</button>
    </div>
    <div class="section" id="parents-details">
        <h2>Parents Details</h2>
        <p>This form collects information about your parents such as their names and contact details.</p>
        <button onclick="navigateTo('parents-form')">Fill Out Parents Details</button>
    </div>
    <div class="section" id="enrollment-details">
        <h2>Enrollment Details</h2>
        <p>This form collects your enrollment details such as the course you are enrolling in and your previous education.</p>
        <button onclick="navigateTo('enrollment-form')">Fill Out Enrollment Details</button>
    </div>

    <div id="forms">
        <div class="form-section" id="personal-form">
            <h2>Personal Information Form</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob"><br><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="form-section" id="contact-form">
            <h2>Contact Details Form</h2>
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="form-section" id="parents-form">
            <h2>Parents Details Form</h2>
            <form>
                <label for="parent-name">Parent's Name:</label>
                <input type="text" id="parent-name" name="parent-name"><br><br>
                <label for="parent-contact">Parent's Contact:</label>
                <input type="text" id="parent-contact" name="parent-contact"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="form-section" id="enrollment-form">
            <h2>Enrollment Details Form</h2>
            <form>
                <label for="course">Course:</label>
                <input type="text" id="course" name="course"><br><br>
                <label for="previous-education">Previous Education:</label>
                <input type="text" id="previous-education" name="previous-education"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
