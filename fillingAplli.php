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
                <a class="menu_link" href="orders.php">МОИ ЗАЯВКИ</a>
            </div>
            <div class="menu">
                <a class="menu_link_weight" href="fillingAplli.php">ОФОРМИТЬ ЗАЯВКУ</a>
            </div>
            <div class="menu">
                <a class="menu_link" href="auth.php">ВЫЙТИ</a>
            </div>
        </div>
    </header>
    <div class="container-page">
        <div class="title_a_button">
            <a class="title_page">ОФОРМЛЕНИЕ ЗАЯВКИ</a>
        </div>
        <div class="fillingApllis">
            <img class="border_img_cars" src="img/4.jpg" width="703px" height="393px">
            <form class="form_FillingAplli" id="formFillingAplli" method="post" action="PHP/add_order.php">
                <label for="title_car">Выберите автомобиль:</label>
                <select name="title_car">
                    <option value="KIA">KIA</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Skoda">Skoda</option>
                    <option value="Toyta">Toyta</option>
                    <option value="BMW">BMW</option>
                </select>
                <label for="date">Выберите дату:</label><input type="date" name="date" id="date">
                <button class="submit_send" type="submit">ЗАБРОНИРОВАТЬ</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer_img">
            <img src="img/logo.png" width="148px" height="68px">
        </div>
    </footer>
</body>
</html>