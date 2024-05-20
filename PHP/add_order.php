<?php
require_once ('connect.php');
session_start();

if (isset($_POST)) {
    $user_id = $_SESSION['user']['id'];
    $title_car = $_POST['title_car'];
    $date = $_POST['date'];

    if (empty($title_car) && empty($date)) {
        header('Location: ../fillingAplli.php?error=Какое-то поле не заполнено');
        exit;
    }

    $check_date = mysqli_query($connect, "SELECT * FROM `Orders` WHERE `title_car` = '$title_car' and `date` = '$date' and `status` <> 'Отклонено'");
    if ($check_date->num_rows > 0) {
        header('Location: ../fillingAplli.php');
    } else {
        $connect->query("INSERT INTO `Orders` (`id`, `user_id`, `title_car`, `date`, `status`) 
        VALUES (NULL, '$user_id', '$title_car', '$date', 'Новое')");
        header('Location: ../orders.php');
    }
} else {
    header('Location: ../fillingAplli.php');
}

?>