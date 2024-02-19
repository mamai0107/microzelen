<?php
session_start();
include("php-connect/connect.php");
$user_id = $_SESSION['user_id'];
$user = mysqli_query($connect, query:"SELECT * FROM users WHERE users.ID_users = '$user_id'");
$user = mysqli_fetch_assoc($user);

?>
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
    <h1 class="pets-title">Редактирование профиля</h1>
            <form class="redac" action="php-handler/redactering.php" method="post">
                <input type="hidden" name="id_users" value="<?= $user['ID_users'] ?>"> 
                <input type="text" class="input-shelter" placeholder="почта" value="<?= $user['email'] ?>" name="email">
                <input type="text" class="input-shelter" placeholder="пароль" value="<?= $user['password'] ?>" name="password">
                <button class="volunteer-bt">Изменить</button>
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