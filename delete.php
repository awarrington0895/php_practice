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

    // Sql query
    $sql = "DELETE FROM employee WHERE id='".$_POST['id']."'";
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);

    printf("Updated records: %d\n", mysqli_affected_rows($con));
?>