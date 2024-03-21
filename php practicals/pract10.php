<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table Generator [By Sandesh Dadibude]</h2>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input number
        $number = $_POST["number"];

        // Generate multiplication table
        echo "<h3>Multiplication Table for $number:</h3>";
        echo "<table>";
        echo "<tr><th>Multiplier</th><th>Result</th></tr>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>
