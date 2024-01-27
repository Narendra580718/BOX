<?php

    @include 'config.php';

    session_start();

    if(!isset($_SESSION['user_type'])){
        header('Location: login_form.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    
    <div class="container">
        <div class="content">
            <h3> hi, <span><?php echo $_SESSION['user_type']?></span></h3>
            <h1> welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
            <p> This is the admin page</p>
            <?php
            if($_SESSION['user_type'] == 'admin'){
                echo '<a href="register_form.php" class="btn">Create User</a>';
            }
            ?>
            <a href="logout.php" class="btn">Logout</a>
            <a href="userlist.php" class="btn" >Export User List</a>
        </div>
    </div>

</body>
</html>