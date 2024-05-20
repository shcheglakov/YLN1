<?php
require_once ('connect.php');
session_start();

$fio = $_POST['fio'];
$phone = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['password'];
$seriaNumber = $_POST['seria_number'];

if (isset ($_POST)) {
    if ($fio !== '' && $phone !== '' && $email !== '' && $password !== '' && $seriaNumber !== '') {
        $check_dubl_user = mysqli_query($connect, "SELECT * FROM `Users` WHERE `email` = '$email'");
        if (mysqli_num_rows($check_dubl_user) == 0) {
            $result_dubl_user = $connect->query("INSERT INTO `Users` (`id`, `fio`, `phone`, `email`, `password`, `seria_number`, `status_user`) 
            VALUES (NULL, '$fio', '$phone', '$email', '$password', '$seriaNumber', 'User')");
        }
    }

    if ($result_dubl_user) {
        header('Location: ../auth.php');
    } else {
        header('Location: ../index.php');
    }
}
?>