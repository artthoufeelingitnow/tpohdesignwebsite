<?php

$servername = "localhost";
$username = "id10100126_group_14";
$password = "tpohdesign369";
$database = "id10100126_models";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

