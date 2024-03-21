<?php
// hii, I am sandesh dadibude

//create database 
//using two methods


// 1]  This is a first methode to create database

        // $sql="create database school";
        // $result=mysqli_query($conn,$sql);
        // if($result)
        // {
        //     echo "database create successfully";
        // }
        // {
        //     die('database not create');
        // }


// 2]  This is second method to create database

            if ($result=$conn->query("create database school")) {
                echo "Database created successfully";
            }
            else{
                echo "Database already exist...!";
            }


?>
