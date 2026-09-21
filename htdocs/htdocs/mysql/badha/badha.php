<?php
    // $conn = mysqli_connect("localhost","root","");
    // if(!$conn)
    //     {
    //         die("connection failed : ".mysqli_connect_error());

    //     }
    // echo "server connected successfully";

    // if(mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS database_2"))
    //     {
    //       echo "database created successfully";
    //     }
    // else
    //     {
    //       echo "database connection failed". mysqli_error($conn);
    //     }

    $conn = mysqli_connect("localhost","root","","database_2");
    if(!$conn)
        {
            die("connection failed : ".mysqli_connect_error());

        }
    echo "datbase connected successfully";

    $sql = "CREATE TABLE IF NOT EXISTS employee(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        
    if(mysqli_query($conn,$sql))
        {
            echo "table created successfully";
        }
    else{
            echo "table connection failed".mysqli_error($conn);
    }
mysqli_close($conn);
?>

