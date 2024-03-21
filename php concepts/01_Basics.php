<?php
    define('pi',3.14);
    define('username',"sandesh");

   echo"<h4>variables in php</h4>";

    $name="sandesh Dadibude";
    $number=20;
    $weight=45.20;
    echo "Name : ".$name."<br> Number : ".$number."<br> weight : ".$weight;


    echo"<h2>* Operators in php</h2>";
    echo "<h3>1) Arithmatic Operator</h3>";

           $number1=20;
           $number2=10;
           echo"20 and 10 simelteniusly are two numbers there are performing all the arithmatical operations <br>";
           echo "(+)Addition is : ".$number1+$number2."<br>";
           echo "(-)Substraction is : ".$number1-$number2."<br>";
           echo "(*)Multiplication is : ".$number1*$number2."<br>";
           echo "(/)Division is : ".$number1/$number2."<br>";
           echo "(%)Modulus is : ".$number1%$number2;

           echo "<h3>2) Assignment Operator</h3>";


        $variable=20;
        echo "Variable is a vaariabel name thats assign the value is using (=) assignment operatior  : ".$variable."<br>";

        $variable+=2;
        echo "Add 1 in a variable using (+=) assignment operator :  ".$variable."<br>";
        $variable-=2;
        echo "Substract 1 in a variable using (-=) assignment operator :  ".$variable."<br>";
        $variable*=2;
        echo "Multiply by 1 in a variable using (*=) assignment operator :  ".$variable."<br>";
        $variable/=2;
        echo "Divion by 1 in a variable using (/=) assignment operator :  ".$variable."<br>";
        $variable%=2;
        echo "Modulus 1 in a variable using (%=) assignment operator :  ".$variable."<br>";

        
    // Comparision Operator
    echo "<h3>3) Comparision Operator</h3>";

    echo "The value of 1==4 is :";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is :";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1<=4 is :";
    echo var_dump(1<=4);
    echo "<br>";
    echo "The value of 1>=4 is :";
    echo var_dump(1>=4);
    echo "<br>";
    
    echo "<h3>4) Increment/Decrement Operator</h3>";

    $increment=10;
    $decrement=20;
    echo "there are two variables increment=10 and decrement=20 , so performing increment/decrement operations <br>";
    echo " Increment++ is : ".$increment++."<br>";
    echo " Increment is : ".$increment."<br>";
    echo " Decrement-- is : ".$decrement--."<br>";
    
    echo " ++Increment is : ".++$increment."<br>";
    echo " Increment is : ".$increment."<br>";
    echo " --Decrement is : ".--$decrement."<br>";
    echo " Decrement is : ".$decrement."<br>";


    echo "<h3>5) Logical Operator</h3>";


    echo "(True and False) : ";
    echo var_dump(true && false); //you can replace && to the "and"
    echo "<br>";
    echo "(True and True) : ";
    echo var_dump(true && true);
    echo "<br>";
    echo "(True or False) : ";
    echo var_dump(true || false); //tou can replace || to the "or"
    echo "<br>";
    echo "(False or False) : ";
    echo var_dump(false || false);
    echo "<br>";
    echo "( not False) : ";
    echo var_dump(!false);
    echo "<br>";
    echo "( not True) : ";
    echo var_dump(!true);
    echo "<br>";
    echo "(True xor False) : ";
    echo var_dump(true ^ false);
    echo "<br>";


    echo "<h2>* Primary Data types in PHP</h2>";

    $no=10;
    echo var_dump($no);
    echo "<br>";
    $string="sandesh";
    echo var_dump($string);
    echo "<br>";
    $float=10.10;
    echo var_dump($float);
    echo "<br>";
    $boolen=true;
    echo var_dump($boolen);
    echo "<br>";
    
    echo "<h2>* Constant in php</h2>";

echo "pi value is : ".pi; // pi value defined in a top of script
echo "<br>";
echo "username is : ".username;
?>