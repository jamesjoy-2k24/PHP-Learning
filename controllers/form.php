<?php
include('../config.php');

// Create User
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(($_POST['username']));
    $password = htmlspecialchars(($_POST['pwd']));
    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $age      = intval($_POST['age']);

    // Hash Pwd
    $hash_pwd = password_hash($password, PASSWORD_DEFAULT);

    // Insert User
    $sql = "INSERT INTO users (username, email, pwd, age, hash_pwd)
    VALUES ('$username','$email','$password','$age','$hash_pwd')";

    if ($conn->query($sql) == true) {
        echo "User Created Successfully!";
        }
    else {
        echo "Error : " . $conn->error;
        }
    }
?>
