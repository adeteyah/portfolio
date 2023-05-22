<?php include('conn.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `users` WHERE `user_email` = '$email' AND `user_password` = '$password'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        header('Location: ../pages/dashboard.php');
    } else {
        header('Location: ../pages/login.php?error=1');
    }
} else {
    header('Location: ../pages/login.php');
}