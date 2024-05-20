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
                <a class="menu_link" href="index.php">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
        </div>
    </header>
    <div class="container-form">
        <form class="form_Auth" id="formAuth" method="post" action="PHP/authentiv.php">
            <a class="title_form">ВХОД</a>
            <label for="email">Почта:</label><input required type="text" name="email" id="email"
                placeholder="nadejda@gmail.com">
            <label for="password">Пароль:</label><input required type="password" name="password" id="password">
            <?php
            session_start();
            if (isset($_SESSION['error_message'])) {
                echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            ?>
            <button class="submit_Auth" id="buttonAuth" type="submit">ВОЙТИ</button>
        </form>

    </div>
    <footer>
        <div class="footer_img">
            <img src="img/logo.png" width="148px" height="68px">
        </div>
    </footer>
</body>

</html>