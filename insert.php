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
            VALUES (".$_POST['id'].", '".$_POST['name']."', '".$_POST['sex']."', ".$_POST['salary'].")";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);

    // If rows are affected, return confirmation message
    // else return error message from database
    if(mysqli_affected_rows($con) > 0) {
        echo "Entry added successfully";
    }
    else {
        echo mysqli_error($con);
    }


?>