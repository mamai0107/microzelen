<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>microzelen</title>
    <link rel="stylesheet" href="scss/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->
</head>

<body>
    <div class="authoriz">
        <a class="btn-close"><img src="img/выход.png" alt="Закрыть" class="close-bt"></a>
        <form action="php-handler/auth.php" method="post" class="auth-form">
            <div class="auth-container">
                <h1 class="authoriz-title">Авторизация</h1>
                <input class="number-authoriz" name="email" type="text" placeholder="Почта">
                <input class="number-authoriz" name="password" type="password" placeholder="Пароль">
                <button class="bt-authoriz" type="submit">Войти</button>
                <a class="to-register">
                    <p class="text-to-register">Нет аккаунта? Зарегистрироваться</p>
                </a>
            </div>
        </form>
    </div>
    <div class="register">
        <a class="btn-close"><img src="img/выход.png" alt="Закрыть" class="close-bt_2"></a>
        <form action="php-handler/reg.php" method="post" class="auth-form">
            <div class="auth-container">
                <h1 class="authoriz-title">Регистрация</h1>
                <input class="number-authoriz" name="email" placeholder="Почта">
                <input class="number-authoriz" name="password" placeholder="Пароль">
                <input class="number-authoriz" name="repeat" placeholder="Повторите пароль">
                <button class="bt-authoriz" type="submit">Зарегистрироваться</button>
                <a class="to-login">
                    <p class="text-to-login">Уже есть аккаунт? Войти</p>
                </a>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="nav-box">
            <img src="img/логотип.png" class="logo" alt="логотип">
            <div class="nav">
                <a href="#" class="nav-text">Главная</a>
                <a href="macrozelen.php" class="nav-text">Микрозелень</a>
                <a href="accessories.php" class="nav-text">Аксессуары</a>
                <a href="#" class="nav-text">Контакты</a>
                <img src="img/аватар.png" class="user" alt="аватар">
            </div>
        </div>
    </div>
    <div class="karta">
        <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/moskovskiy_kreml/1023322799/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Московский Кремль</a><a href="https://yandex.ru/maps/213/moscow/category/museum/184105894/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Музей в Москве</a><a href="https://yandex.ru/maps/213/moscow/category/landmark_attraction/89683368508/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Достопримечательность в Москве</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.601739%2C55.753924&mode=poi&poi%5Bpoint%5D=37.618875%2C55.751428&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1023322799&z=14.98" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>
      <div class="flex-row-fe">
        <div class="simple-icons-moscowmetro"></div>
        <span class="contacts-2">Контакты</span>
        <button class="metro-shchelkovskaya">Метро Щелковская</button>
        <div class="mdi-address-marker"></div>
        <span class="moscow-ul-pervomayskaya-d">г. Москва, ул Первомайская д 45</span>
        <div class="phone-number"></div>
        <span class="plus-sign">+7-499-654-89-00</span>
      </div>
    <div class="line">
        <hr style="border: 1px solid black; margin: 100px 0px;">
    </div>
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="first-footer">
                    <a href="#" class="nav-foot-text">Главная</a>
                    <a href="#" class="nav-foot-text">Микрозелень</a>
                    <a href="#" class="nav-foot-text">Аксессуары</a>
                    <a href="#" class="nav-foot-text">Контакты</a>
                </div>
                <div class="second-footer">
                    <img src="img/la_vk.png" alt="Вконтакте" class="social">
                    <img src="img/ic_outline-telegram.png" alt="Телеграм" class="social">
                    <img src="img/fe_instagram.png" alt="Инстаграмм" class="social">
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/main.js"></script>
</body>