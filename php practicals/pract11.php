<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <h2>Enter Student Information</h2>
    <form method="post">
        <label for="roll_no">Roll No:</label>
        <input type="text" id="roll_no" name="roll_no" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="contact_no">Contact No:</label>
        <input type="text" id="contact_no" name="contact_no" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve student information from the form
        $roll_no = $_POST["roll_no"];
        $name = $_POST["name"];
        $class = $_POST["class"];
        $contact_no = $_POST["contact_no"];
        $email = $_POST["email"];

        // Display student information
        echo "<h2>Student Information:</h2>";
        echo "Roll No: $roll_no<br>";
        echo "Name: $name<br>";
        echo "Class: $class<br>";
        echo "Contact No: $contact_no<br>";
        echo "Email: $email<br>";
    }
    ?>
</body>
</html>
