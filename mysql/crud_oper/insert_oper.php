<?php 
    require_once 'conn.php';

    if(isset($_POST["submit"])){
        $employee_name = $_POST["name"];
        $employee_age = $_POST["age"];
        $employee_email = $_POST["email"];
        $employee_speciality = $_POST["speciality"];
        if(empty($employee_name)){
            echo "Please, Fill out the name field. <br>";
        }
        elseif(empty($employee_age)){
            echo "Please, Fill out the age field. <br>";
        }
        elseif(empty($employee_email)){
            echo "Please, Fill out the email field. <br>";
        }
        elseif(empty($employee_speciality)){
            echo "Please, Fill out the speciality field. <br>";
        }
        else{
            $sql = "INSERT INTO employees(name,age,email,speciality) VALUES('$employee_name','$employee_age','$employee_email','$employee_speciality')";
            $result = mysqli_query($conn, $sql);
            // if(mysqli_query($conn, $sql)){
            //     echo "Data inserted successfully <br>";
            // }else{
            //     echo "Error inserting data: " . mysqli_error($conn) . "<br>";
            // }  
        }
    }

