<?php
require_once ('PHP/connect.php');
session_start();

$orders = mysqli_query($connect, "SELECT * FROM `Orders`")->fetch_all();
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
                <a class="menu_link_weight" href="auth.php">ВЫЙТИ</a>
            </div>
        </div>
    </header>
    <div class="container-page">
        <div class="title_a_button">
            <a class="title_page">АДМИНИСТРАТОР</a>
        </div>
        <div class="orders_user">
            <?php
            $count = 1;
            foreach ($orders as $data):
                $id_user = $data[1];

                //информация о пользователе чья это заявка
                $info_user = $connect->query("SELECT * FROM Users WHERE id = $id_user")->fetch_assoc();
                ?>
                <div class="order_user">
                    <div class="number_order">
                        <a>Заявка №<?= $count ?></a>
                    </div>
                    <div class="data_order">
                        <a>ФИО: <?= $info_user['fio'] ?></a>
                    </div>
                    <div class="data_order">
                        <a>Телефон: <?= $info_user['phone'] ?></a>
                    </div>
                    <div class="data_order">
                        <a>Почта: <?= $info_user['email'] ?></a>
                    </div>
                    <div class="data_order">
                        <a>Дата: <?= $data[3] ?></a>
                    </div>
                    <div class="data_order">
                        <a>Автомобиль: <?= $data[2] ?></a>
                    </div>
                    <form class="data" method="POST" action="PHP/change_status.php">
                        <label class="label_status" for="status">Статус:</label>
                        <input type="hidden" name="id" value="<?= $data[0] ?>" />
                        <select class="select_status" name="status" onchange='this.form.submit()' <?php if ($data[4] !== 'Новое') {
                            echo "disabled";
                        } ?>>
                            <option value="new" <?php if ($data[4] == 'Новоe') {
                                echo 'selected';
                            } ?>>Новое</option>
                            <option value="confirm" <?php if ($data[4] == 'Подтверждено') {
                                echo 'selected';
                            } ?>>Подтверждено</option>
                            <option value="approv" <?php if ($data[4] == 'Отклонено') {
                                echo 'selected';
                            } ?>>Отклонено</option>
                        </select>
                    </form>
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