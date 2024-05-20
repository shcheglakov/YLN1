<?php
require_once ('PHP/connect.php');
session_start();
$id = $_SESSION['user']['id'];

$orders = mysqli_query($connect, "SELECT * FROM `Orders` WHERE `user_id` = '$id'")->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo - 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <div class="logo_img">
                <img src="img/logo.png" width="228px" height="105px">
            </div>
            <div class="logo_title">
                <a>Эх, прокачу!</a>
            </div>
        </div>
        <div class="header-menu">
            <div class="menu">
                <a class="menu_link_weight" href="orders.php">МОИ ЗАЯВКИ</a>
            </div>
            <div class="menu">
                <a class="menu_link" href="fillingAplli.php">ОФОРМИТЬ ЗАЯВКУ</a>
            </div>
            <div class="menu">
                <a class="menu_link" href="auth.php">ВЫЙТИ</a>
            </div>
        </div>
    </header>
    <div class="container-page">
        <div class="title_a_button">
            <a class="title_page">МОИ ЗАЯВКИ</a>
            <button class="submit_new_order" onclick="document.location='fillingAplli.php'">ОФОРМИТЬ НОВУЮ ЗАЯВКУ</button>
        </div>
        <div class="orders">
            <?php
            $count = 1;
            foreach ($orders as $data):
            ?>
            <div class="order">
                <div class="number_order">
                    <a>Заявка №
                        <?= $count ?>
                    </a>
                </div>
                <div class="data_order">
                    <a>Автомобиль: 
                        <?= $data[2] ?>
                    </a>
                </div>
                <div class="data_order">
                    <a>Дата: 
                        <?= $data[3] ?>
                    </a>
                </div>
                <div class="data_order">
                    <a class="status_user">Статус: 
                        <?= $data[4] ?>
                    </a>
                </div>
            </div>
            <?php
            $count++;
            endforeach;
            ?>
        </div>
    </div>
    <footer>
        <div class="footer_img">
            <img src="img/logo.png" width="148px" height="68px">
        </div>
    </footer>
</body>
</html>