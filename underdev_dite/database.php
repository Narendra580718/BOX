<?php

$host = "localhost";
$dbname = "box";
$username = "jack";
$password = "ihateoggy";

$mysqli = new mysqli($host, $username, $password, $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;