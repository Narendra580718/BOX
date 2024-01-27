<?php
session_start();
$conn = mysqli_connect("localhost", "jack", "ihateoggy", "box");


if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE `email` = '" . $email . "'";
$res = mysqli_query($conn, $query);
if ($res === false) {
    die("Error" . mysqli_error($conn));
}
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
if ($row) {
    $storedHashedpassword = $row['password_hash'];
    if (isset($storedHashedpassword)) {
        // Verify the password
        if (password_verify($password, $storedHashedpassword)) {
            $_SESSION['name'] = $row['name'];
            echo '<script>window.alert("Logged In."); window.open("index.php","_self",null,true)</script>';
        } else {
            echo '<script>window.alert("Wrong Username or Password."); window.open("login.html","_self",null,true)</script>';
        }
    } else {
        echo '<script>window.alert("Password column not found"); window.open("login.html","_self",null,true)</script>';
    }
} else {
    echo '<script>window.alert("Wrong Username or Password."); window.open("login.html","_self",null,true)</script>';
}