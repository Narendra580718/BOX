<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('Location: login_form.php');
}

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];
    $pass = password_hash($Password, PASSWORD_DEFAULT);
    $cpass = password_hash($cpassword, PASSWORD_DEFAULT);

    $select = "SELECT * FROM `admin` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exit!';

    } else {
        if ($Password != $cpassword) {
            $error[] = 'password not match!';
        } elseif ($user_type == 'user') {
            $error[] = 'inside user elseif';
            $error[] = $user_type;
            $sql = "INSERT INTO user (name, email, password_hash)
            VALUES (?, ?, ?)";

            $stmt = $conn->stmt_init();

            if (!$stmt->prepare($sql)) {
                die("SQL error: " . $conn->error);
            }

            $stmt->bind_param(
                "sss",
                $name,
                $email,
                $pass
            );


            if ($stmt->execute()) {

                header("Location: ../underdev_dite/login.html");
                exit;
            }

        } elseif ($user_type == 'admin' || $user_type == 'srdev' || $user_type == 'jrdev') {
            $error[] = 'inside admin elseif';
            $error[] = $user_type;
            $sql = "INSERT INTO admin (name, email, password, user_type) 
            VALUES(?, ?, ?, ?)";

            $stmt = $conn->stmt_init();

            if (!$stmt->prepare($sql)) {
                die("SQL error: " . $conn->error);
            }

            $stmt->bind_param(
                "ssss",
                $name,
                $email,
                $pass,
                $user_type
            );



            if ($stmt->execute()) {

                header("Location: login_form.php");
                exit;
            }
        }
    }

}
;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="POST">
            <h3>CREATER USER</h3>
            <?php

            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                }
                ;
            }
            ;

            ?>
            <input type="text" name="name" require placeholder="enter your name">
            <input type="email" name="email" require placeholder="enter your email">
            <input type="password" name="password" require placeholder="enter your password">
            <input type="password" name="cpassword" require placeholder="confirm your password">
            <select name="user_type">
                <option value="admin">Admin</option>
                <option value="srdev">Senior Developer</option>
                <option value="jrdev">Junior Developer</option>
                <option value="user" selected="selected">User</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login</a></p>
        </form>
    </div>
</body>

</html>