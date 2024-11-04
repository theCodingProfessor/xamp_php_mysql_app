<?php
$servername = "localhost";
$username = "read_and_write";
$password = "read_and_write";
$my_db = "my_xampp_new";

// Create connection
$conn = new mysqli($servername, $username, $password,$my_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
