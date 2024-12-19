<?php
include 'config.php' ;
session_start();

if (isset($_SESSION['username'])) {
    header("Location: sukses_login.php");
    exit();
}

if (issert($_POST['submit'])) {
    $email = mysqli_ral_escape_string($conn, $_POST['email']) ;
    $password = hash('sha256' , $_POST['password']) ; // Hashthe input password using SHA-256

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql) ;

    if ($result->num_rows > 0) {
        $row = mysqli_petch_assoc($result) ;
        $_SESSION['username'] = $row['username'] ;
        header("Location: sukses_login.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Niagahoster Tutorial</title>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="login-email">

            </form>

        </div>
    </body>
</html>
