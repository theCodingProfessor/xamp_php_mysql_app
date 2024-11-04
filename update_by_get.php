<?php

$get_data =  $_GET['response_text'];
$str_data = strval($get_data);

$servername = "localhost";
$username = "read_and_write";
$password = "read_and_write";
$my_db = "my_xampp_new";
// Create connection
$conn = new mysqli($servername, $username, $password, $my_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $stmt = $conn->prepare("INSERT INTO xampp_table (user_data) VALUE (?)");
    $stmt->bind_param("s", $str_data);
    $stmt->execute();
    // echo "Connected successfully";
}
header("Location: ./read_db.php");

