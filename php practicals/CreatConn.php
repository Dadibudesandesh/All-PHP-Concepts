<?php
// hii, I am sandesh dadibude

//create a connection to the sql server 
//using two methods

//this is a first method

            // $conn= @new mysqli("localhost","root","");
            // if($conn->connect_error){
            //     die('Connect Error : '.$conn->connect_error);
            // }else
            // {
            //     echo 'Successful connection to MySQL <br/>';
            // }

//this is a second methods

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if ($conn) {
echo "connection was successful...";
}
else {
    die('connection failed : '.mysqli_connet_error($conn)); 
}

?>