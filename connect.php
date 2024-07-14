<?php

$servername = "localhost"; // Corrected variable name
$username = "root"; // Corrected variable name
$password = "";
$db_name = "my_new_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
