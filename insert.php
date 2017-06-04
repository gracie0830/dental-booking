<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "authentication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `appointments`(reservationDateTime, schedDate, schedTime, service,remarks) VALUES
				('8:00', '2017-05-23', '01:30', 'Yeno' ,'5')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>