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
            $sql = "UPDATE employees SET name = '$employee_name', age = '$employee_age', email = '$employee_email', speciality = '$employee_speciality' WHERE email = '$employee_email' ";
            $result = mysqli_query($conn, $sql);
            header("Location: display.php", true, 301);
            // if(mysqli_query($conn, $sql)){
            //     echo "Data Updated successfully <br>";
            // }else{
            //     echo "Error Updating data: " . mysqli_error($conn) . "<br>";
            // }  
        }
    }

