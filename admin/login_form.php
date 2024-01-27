<?php

@include 'config.php';
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $Password = $_POST['password'];
    $pass = password_hash($Password, PASSWORD_DEFAULT);

    $select = "SELECT * FROM admin WHERE email = '$email'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type']== 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['user_type'] = $row['user_type'];
            header('Location: admin_page.php');

        }elseif($row['user_type'] == 'jrdev' || $row['user_type' == 'srdev']){
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['user_type'] = $row['user_type'];
            header('Location: admin_page.php');
        }
        elseif ($row['user_type']== 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('Location: ../underdev_dite/index.html');

        }

    }else{
        $error[] = 'incorrect email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="POST">
            <h3>LOGIN</h3>
            <?php

            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };

            ?>
            <input type="email" name="email" require placeholder="enter your email">
            <input type="password" name="password" require placeholder="enter your password">
            <input type="submit" name="submit" value="Login" class="form-btn">
            <p>Don't have an account? Contact your administrator. </p>
        </form>
    </div>
</body>
</html>