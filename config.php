<?php
$host = "localhost";
$user = "root"; // Default user in XAMPP
$password = "662388"; // Default password is empty
$database = "backend_db";

// Connect using MySQLi
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database connected successfully!";
?>
