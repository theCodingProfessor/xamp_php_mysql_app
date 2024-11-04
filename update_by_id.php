<?php

$get_key =  $_GET['update_key'];
$get_data =  $_GET['update_text'];
$str_key = strval($get_key);
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
    $stmt = $conn->prepare("UPDATE xampp_table SET user_data = (?) WHERE id = (?)");
    $stmt->bind_param("ss", $str_data, $str_key);
    $stmt->execute();
    // echo "Connected successfully";
}
header("Location: ./read_db.php");

