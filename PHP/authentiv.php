<?php
require_once ('connect.php');
session_start();


$email = $_POST['email'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `Users` WHERE `email` = '$email' and `password` = '$password'");
if (mysqli_num_rows($check_user)) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'password' => $user['password'],
        'status_user' => $user['status_user'],
    ];

    if ($user['status_user'] == 'Admin') {
        header('Location: ../admin.php');
    } else {
        header('Location: ../orders.php');
    }
} else {
    $_SESSION['error_message'] = "Неправильная почта или пароль. Пожалуйста, попробуйте снова.";
header('Location: ../auth.php');
exit();
}
?>