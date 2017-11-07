<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aca";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$description = $_POST['desc'];
$pointsPossible = $_POST['pointsPossible'];
$outcome = $_POST['outcome'];
$outcomeIDquery = "select outcomeID from outcomeTable where description='$outcome'";
$result = mysqli_query($conn, $outcomeIDquery);
$row = mysqli_fetch_assoc($result);
$outcomeID = $row['outcomeID'];

$sqlInsert = "INSERT INTO assignments (description, pointsPossible, outcomeID)
VALUES ('$description','$pointsPossible', '$outcomeID')";

if (mysqli_query($conn, $sqlInsert)) {
	echo 	'<link rel="stylesheet" href="aca.css" />';
    echo "New record created successfully <br><br>";
	echo '<a href="ACA.php">Click here</a>';
} else {
	echo 	'<link rel="stylesheet" href="aca.css" />';
    echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>