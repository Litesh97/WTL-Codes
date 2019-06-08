+<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Form</title>
    </head>
    <body><center>
        <h1>Student Details</h1>
        <form method="post" action="register.php">
            <input type="number" name="roll" placeholder="Roll Number" required><br>
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="dept" placeholder="Department" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center></body>
</html>
