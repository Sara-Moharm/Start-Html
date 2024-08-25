<?php
// 4 variables => server name 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "school";

// connect to database
    $conn = mysqli_connect($server,$username,$password,$db_name);

    if($conn){
        echo "connected <br>";
    }else{
        echo "not connected <br>";
    }
