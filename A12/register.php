<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = 'practical';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn ) 
    {
        die('Could not connect: ' . mysqli_error($conn));
    }
    echo 'Connected successfully';

    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    
    $sql = mysqli_query($conn, "INSERT INTO user(roll, name, dept) VALUES('$roll', '$name', '$dept')");
    if($sql)
    {
        echo 'Registration Successful!';
    }
    else 
    {
        echo 'Registration Failed!';
        die('Could not connect: ' . mysqli_error($stmt));
    }
    mysqli_close($sql);
?>         