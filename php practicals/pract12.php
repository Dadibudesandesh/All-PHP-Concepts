<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Mark List</title>
</head>
<body>
    <h2>Enter Student Information and Marks for Semester Subjects [ By Sandesh Dadibude]</h2>
    <form method="post">
        <label for="prn">PRN:</label>
        <input type="text" id="prn" name="prn" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="roll_no">Roll No:</label>
        <input type="text" id="roll_no" name="roll_no" required><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <h3>Enter Marks for Semester Subjects</h3>
        <label for="subject1">Subject 1 [DSA]:</label>
        <input type="text" id="subject1" name="subject1" required><br><br>

        <label for="subject2">Subject 2 [CNI]:</label>
        <input type="text" id="subject2" name="subject2" required><br><br>

        <label for="subject3">Subject 3 [STAT]:</label>
        <input type="text" id="subject3" name="subject3" required><br><br>

        <label for="subject4">Subject 4 [HRM]:</label>
        <input type="text" id="subject4" name="subject4" required><br><br>

        <label for="subject5">Subject 5 [RDBMS]:</label>
        <input type="text" id="subject5" name="subject5" required><br><br>

        <!-- Add more subjects as needed -->

        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve student information from the form
        $prn = $_POST["prn"];
        $name = $_POST["name"];
        $roll_no = $_POST["roll_no"];
        $class = $_POST["class"];

        // Retrieve marks for semester subjects
        $subject1 = $_POST["subject1"];
        $subject2 = $_POST["subject2"];
        $subject3 = $_POST["subject3"];
        $subject4 = $_POST["subject4"];
        $subject5 = $_POST["subject5"];

        // Calculate total marks and percentage
        $total_marks = $subject1 + $subject2 + $subject3+$subject4+$subject5;
        $percentage = ($total_marks / 5);

        // Display semester mark list
        echo "<h2>Semester Mark List</h2>";
        echo "<p><strong>PRN:</strong> $prn</p>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Roll No:</strong> $roll_no</p>";
        echo "<p><strong>Class:</strong> $class</p>";
        echo "<h3>Subject Marks:</h3>";
        echo "<p><strong>Subject 1:</strong> $subject1</p>";
        echo "<p><strong>Subject 2:</strong> $subject2</p>";
        echo "<p><strong>Subject 3:</strong> $subject3</p>";
        echo "<p><strong>Subject 4:</strong> $subject4</p>";
        echo "<p><strong>Subject 5s:</strong> $subject5</p>";
        echo "<h3>Total Marks:</h3>";
        echo "<p><strong>Total Marks:</strong> $total_marks</p>";
        echo "<p><strong>Percentage:</strong> $percentage%</p>";
    }
    ?>
</body>
</html>
