<?php
// DB Connection
$server_name = "localhost";
$user_name   = 'root';
$password    = '';
$db_name     = 'learning_db';

// Create Connection
$conn = new mysqli($server_name, $user_name, $password, $db_name);

// Check Connection
if ($conn->connect_error) {
    die("Error :" . $conn->connect_error);
    }
// echo "DataBase (<strong>$db_name</strong>) Connected Successfully!";
?>
