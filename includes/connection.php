<?php
//server information
$servername = "104.214.224.216";
$username = "root";
$password = "mysql1234";
$dbname = "regius_project";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
//if connection succesful
echo "Connection successful.";