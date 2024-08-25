<?php

    require_once 'conn.php';
    /**
     * CRUD => 
     *  create [save new data] INSERT 
     *  read [select one/ get all] SELECT
     *  update [update one] UPDATE
     *  delete [delete] DELETE
     */

    //  Create Operation
    // 1. Insert data into table
    $addItem = "INSERT INTO students(name,address,grade,phone) 
                VALUES ('sara','sea124',120,'1000000001')";
                if(mysqli_query($conn, $addItem)){
                    echo "Data inserted successfully <br>";
                }else{
                    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
                }

    $sql = "SELECT * FROM students";
    $students = mysqli_query($conn, $sql);
    if(mysqli_num_rows($students) > 0){
        while($row = mysqli_fetch_assoc($students)){
            echo $row['name'] . " " . $row['address'] . " " . $row['grade']. " " . $row['phone']. '<br>';
        }
    }else{
        echo "No data found <br>";
    }
