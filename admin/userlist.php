<?php


@include 'config.php';

session_start();

if(!isset($_SESSION['user_type'])){
    header('Location: login_form.php');
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve user data
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Open a text file for writing
    $file = fopen("./uploads/userlist.txt", "w");

    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
        // Write user data to the text file
        fwrite($file, "email: ". $row["email"] . " name: " . $row["name"] . "\n");
    }

    // Close the text file
    fclose($file);

    echo "<h2>User list exported to /uploads/userlist.txt successfully.</h2>";
} else {
    echo "No users found in the database.";
}

// Close the database connection
$conn->close();
?>
