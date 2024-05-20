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
                <a class="menu_link" href="auth.php">ВОЙТИ</a>
            </div>
        </div>
    </header>
    <div class="container-form">
        <form class="form_Reg" id="formReg" method="post" action="PHP/reg.php">
            <a class="title_form">РЕГИСТРАЦИЯ</a>
            <label for="fio">ФИО:</label><input type="text" name="fio" id="fio" placeholder="Михальчук Надежда Витальевна">
            <div id="errorTextFio" style="color: red; font-size: 12px;"></div>
            <label for="phone">Телефон:</label><input type="tel" name="tel" id="tel" placeholder="8(977)-121-12-12">
            <div id="errorTextPhone" style="color: red; font-size: 12px;"></div>
            <label for="email">Почта:</label><input type="email" name="email" id="email" placeholder="nadejda@gmail.com">
            <div id="errorTextEmail" style="color: red; font-size: 12px;"></div>
            <label for="password">Пароль:</label><input type="password" name="password" id="password">
            <div id="errorTextPassword" style="color: red; font-size: 12px;"></div>
            <label for="seria_number">Серия и Номер ВУ:</label><input type="text" name="seria_number" id="seria_number" placeholder="12345 12345">
            <div id="errorTextSeriaNumber" style="color: red; font-size: 12px;"></div>
            <button disabled class="submit_Reg" id="buttonReg" type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
        </form>
    </div>
    <footer>
        <div class="footer_img">
            <img src="img/logo.png" width="148px" height="68px">
        </div>
    </footer>

    <script>
        function checkForm() {
            fioValid = /^[А-ЯЁA-Z][а-яёa-z]{2,}\s[А-ЯЁA-Z][а-яёa-z]{2,}\s[А-ЯЁA-Z][а-яёa-z]{2,}$/.test(document.getElementById('fio').value);
            phoneValid = /^[0-9]{1}[(][0-9]{3}[)][-][0-9]{3}[-][0-9]{2}[-][0-9]{2}$/.test(document.getElementById('tel').value);
            emailValid = /^[A-Za-z0-9-_]{3,}[@][a-z]{2,}[.][a-z]{2,}$/.test(document.getElementById('email').value);
            passwordValid = /^(?=.*\d).{3,}$/.test(document.getElementById('password').value);
            seriaNumberValid = /^[0-9]{5}\s[0-9]{5}$/.test(document.getElementById('seria_number').value);

            if (fioValid && phoneValid && emailValid && passwordValid && seriaNumberValid) {
                document.getElementById('buttonReg').disabled = false;
            } else {
                document.getElementById('buttonReg').disabled = true;
            }
        }

        // проверка фио
        const errorTextFio = document.getElementById('errorTextFio');
        const fioInput = document.getElementById('fio');

        fioInput.addEventListener('input', function (event) {
            if (!/^[А-ЯЁA-Z][а-яёa-z]{2,}\s[А-ЯЁA-Z][а-яёa-z]{2,}\s[А-ЯЁA-Z][а-яёa-z]{2,}$/.test(this.value)) {
                this.style.border = '2px solid red';
                errorTextFio.innerText = 'Пожалуйста, введите ФИО в правильном формате';
                checkForm();
            } else {
                this.style.border = '';
                errorTextFio.innerText = '';
                checkForm();
            }
        });
        
        // проверка телефон
        const errorTextPhone = document.getElementById('errorTextPhone');
        const phoneInput = document.getElementById('tel');

        phoneInput.addEventListener('input', function (event) {
            if (!/^[0-9]{1}[(][0-9]{3}[)][-][0-9]{3}[-][0-9]{2}[-][0-9]{2}$/.test(this.value)) {
                this.style.border = '2px solid red';
                errorTextPhone.innerText = 'Пожалуйста, введите Телефон в правильном формате';
                checkForm();
            } else {
                this.style.border = '';
                errorTextPhone.innerText = '';
                checkForm();
            }
        });
                
        // проверка почты
        const errorTextEmail = document.getElementById('errorTextEmail');
        const emailInput = document.getElementById('email');

        emailInput.addEventListener('input', function (event) {
            if (!/^[A-Za-z0-9-_]{3,}[@][a-z]{2,}[.][a-z]{2,}$/.test(this.value)) {
                this.style.border = '2px solid red';
                errorTextEmail.innerText = 'Пожалуйста, введите Почту в правильном формате';
                checkForm();
            } else {
                this.style.border = '';
                errorTextEmail.innerText = '';
                checkForm();
            }
        });
                        
        // проверка пароля
        const errorTextPassword = document.getElementById('errorTextPassword');
        const passwordInput = document.getElementById('password');

        passwordInput.addEventListener('input', function (event) {
            if (!/^(?=.*\d).{3,}$/.test(this.value)) {
                this.style.border = '2px solid red';
                errorTextPassword.innerText = 'Пароль должен содержать 1 цифру и минимум 3 символа';
                checkForm();
            } else {
                this.style.border = '';
                errorTextPassword.innerText = '';
                checkForm();
            }
        });
                                
        // проверка серии номер ВУ
        const errorTextSeriaNumber = document.getElementById('errorTextSeriaNumber');
        const seriaNumberInput = document.getElementById('seria_number');

        seriaNumberInput.addEventListener('input', function (event) {
            if (!/^[0-9]{5}\s[0-9]{5}$/.test(this.value)) {
                this.style.border = '2px solid red';
                errorTextSeriaNumber.innerText = 'Пожалуйста, введите Серию и Номер ВУ в правильном формате';
                checkForm();
            } else {
                this.style.border = '';
                errorTextSeriaNumber.innerText = '';
                checkForm();
            }
        });
    </script>
</body>
</html>