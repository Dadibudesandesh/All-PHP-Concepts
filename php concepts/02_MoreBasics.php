<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing:border-box;
        }
        .container{
            max-width:80%;
            background-color:red;
            margin:auto;
            padding: 20px;

        }
    </style>
</head>
<body>
    <div class="container">

<h1>Arrays in php</h1>
            <?php
            $languages=array("c","c++","php","mysql","javascript");
            $MyInfo=array("Name"=>"sandesh","BOD"=>"28/04/2004","age"=>"19","school"=>"VPIMSR");
            echo $languages[0];
            echo "<br>";
            echo $languages[1];
            echo "<br>";
            echo $languages[2];
            echo "<br>";
            echo $languages[3];
            echo "<br>";
            echo count($languages)." (using count function) ";
            echo "<br>";
            echo "<br>";

            echo "<h4>Associative array</h4>";
            echo "<br>";
            echo 'Name : '. $MyInfo["Name"];
             echo "<br>";
            echo 'DOB : '. $MyInfo["BOD"];
            echo "<br>";
            echo 'School : '. $MyInfo["school"];
            echo "<br>";
            echo "Age : ". $MyInfo["age"];
            echo "<br>";
            echo "<br>";

            ?>


<h1>Loops in php</h1>
            <?php
                        echo "<br>";
                        echo "<br>";

            echo "<h3>while loop</h3>";
            echo "Using while loop print table of 2 <br>";
            $table=1;
            while ($table<=10)
            {
                echo $table*2;
                echo "<br>";
                $table++;
            };
            echo "<br>";
            ?>

<h3>Do while Loop</h3>
            <?php
                    $i=0;
                    echo "using do while loop to show array values..<br>";
            do{
                echo $languages[$i].  "<br>";
                $i++;
            }while($i<=4);
            echo "<br>";
            ?>

<h3>For loop</h3>
            <?php
            echo"using for loop access array values<br>";
            for ($i=0; $i <=4; $i++) { 
                echo "<br>"
                .$languages[$i];
            }
            echo "<br>";
            ?>

<h3>Foreach Loop</h3>
            <?php
            echo "<br>Using foreachl loop print the array values<br>";
            foreach($languages as $values){
                echo $values;
                echo "<br>";
            }
            echo "<br>";
            ?>

<h1>Functions in php</h1>
            <?php
            function PrintMessage(){
            echo "Hii, I am a function";
            }
            PrintMessage();
            ?>
    </div>
</body>
</html>