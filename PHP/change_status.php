<?php
// Файл для изменения статуса заявки
// Вызывается из admin.php

//Подключение базы данных
require_once ('connect.php');
if (isset($_POST)) {
    //проверка на то какой статус делать заявке
    switch ($_POST['status']) {
        case 'new':
            $status = 'Новая';
            break;
        case 'confirm':
            $status = 'Подтверждено';
            break;
        case 'approv':
            $status = 'Отклонено';
            break;
        default:
            break;
    }

    //id заявки из формы
    $id = $_POST['id'];

    //проверка не пустые ли эти переменные
    if ($status !== '' && $id !== '') {

        //изменение статуса заявки
        $connect->query("UPDATE `Orders` SET `Status` = '$status' WHERE `Orders`.`id` = $id");
    }

    //переходы на страницы
    header('Location: ../admin.php');
} else {
    header('Location: ../admin.php');
}
?>