<?php
    if(!isset($_POST['sub'])) die("No data was provided.");

    /* open database connection
        mysqli_connect(server, userID, password, databaseName)
        userID = root
        password = ''    this database has no password
        databaseName = ch11db
    */
    $con = mysqli_connect('localhost','root','','ch11db');
    if (!$con) // check if the connection failed.
    {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql = "UPDATE employee
            SET salary = ".$_POST['salary']." 
            WHERE id = ".$_POST['id'];

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);

    if(mysqli_affected_rows($con) == 1){
        echo "Entry updated successfully";
    }
    else {
        echo mysqli_error($con)."<br>";
    }

    
?>