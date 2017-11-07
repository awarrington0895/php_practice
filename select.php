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
    // Create your query (any query: insert, delete, select, update)
    // attach the id provided by the user. this is extracted from PHP global variable $_POST array
    $sql = "SELECT * FROM employee WHERE id='".$_POST['id']."'";
    echo $sql."<br>"; // displays your query before executing it.
    $result = mysqli_query($con, $sql); // execute the query
    
    // you may create a table to make your result look organized
    echo "<table border='1'>
    <tr>
        <th>Name</th>
        <th>Salary</th>
        <th>Sex</th>
        <th>Dept No.</th>
    </tr>";
    // query through the result
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
    {
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['sex'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";   
    // close database connection
    mysqli_close($con);
?>