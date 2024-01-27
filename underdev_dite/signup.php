<?php
$conn = mysqli_connect("localhost", "root", "", "box");

$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];

if (empty($name)) {
    die("Name is required");
}

if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($password) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $password)) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $password)) {
    die("Password must contain at least one number");
}

if ($password !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

// print_r($_POST);
// var_dump($password_hash);



$checkQueryemail = "SELECT * FROM `user` WHERE `email` = '" . $email . "'";
$checkResultemail = mysqli_query($conn, $checkQueryemail);

if (mysqli_num_rows($checkResultemail) > 0) {
    echo '<script> window.alert("Email already in use. Please use a different Email."); window.open("signup.html","_self",null,true);</script>';
} 

$checkQueryname = "SELECT * FROM `user` WHERE `name` = '" . $name . "'";
$checkResultname = mysqli_query($conn, $checkQueryname);

if(mysqli_num_rows($checkResultname) > 0) {
    echo '<script> window.alert("Name already in use. Please use a different Username."); window.open("signup.html","_self",null,true);</script>';
}
$conn -> close();

$mysqli = require __DIR__ . "/database.php";
$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $name,
                  $email,
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: login.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}