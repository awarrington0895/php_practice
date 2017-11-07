<?php
    if(!isset($_POST['sub'])) die("No data was provided.");

    /* open database connection
        mysqli_connect(server, userID, password, databaseName)
        userID = root
        password = ''    this databae has no password
        databaseName = ch11db
    */
    $con = mysqli_connect('localhost','root','','ch11db');
    if (!$con) // check if the connection failed.
    {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql = "INSERT INTO employee (id, name, sex, salary)
            VALUES (".$_POST['id'].", ".$_POST['id'].", ".$_POST['id'].", ".$_POST['id'].")";

    echo $sql."<br>";

?>