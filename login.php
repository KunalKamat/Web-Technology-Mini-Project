<?php
@include 'connect.php'; 
session_start();

// Initialize error message variable
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    // Include database connection file

    // Prepare SQL query to fetch user credentials from database
    // NOTE: You should use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if any row is returned
    if ($result->num_rows > 0) {
        // Set session variable
        $_SESSION['username'] = $username;
        // Redirect to the dashboard page upon successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Display error message if username or password is incorrect
        $error_message = "Invalid username or password.";
    }

    // Close database connection
    $conn->close();
}
?>
