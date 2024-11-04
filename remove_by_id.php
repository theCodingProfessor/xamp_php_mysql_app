<?php

// This file accepts an 'id' from read_db.php

// Extract the line to remove from the database
$get_data =  $_GET['remove_text'];
$str_data = strval($get_data);

// Setup database configuration
$servername = "localhost";
$username = "read_and_write";
$password = "read_and_write";
$my_db = "my_xampp_new";

// Connect to the database, and remove the row
$conn = new mysqli($servername, $username, $password, $my_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $stmt = $conn->prepare("DELETE FROM xampp_table WHERE id=(?)");
    $stmt->bind_param("s", $str_data);
    $stmt->execute();
    // echo "Connected successfully";
}
// Return the user to the database display, showing row delted.
header("Location: ./read_db.php");

