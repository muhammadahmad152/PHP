<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP default is empty
$dbname = "ai_202505b1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>