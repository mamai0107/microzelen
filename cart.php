<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>cart</title>
    <meta name="description" content="Добавляй в корзину и узнаешь полную стоимость">
  <meta name="keywords" content="корзина, оплата, цена">
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
        <a href="index.php" class="nav-text">Главная</a>
        <a href="macrozelen.php" class="nav-text">Микрозелень</a>
         <a href="" class="nav-text">Аксессуары</a>
        <a href="#" class="nav-text">Контакты</a>
        <img src="img/аватар.png" class="user" alt="аватар">
      </div>
    </div>
  </div>
  <span class="my-cart">Моя корзина</span>
      <div class="rectangle">
        <div class="rectangle-1">
          <span class="order-summary">Итог заказа</span>
          <div class="flex-row-dc">
            <span class="sum">Сумма</span><span class="rub">111,00 руб</span>
          </div>
          <div class="flex-row-bdb">
            <span class="total">Итог</span><span class="rub-2">111,00 руб</span>
          </div>
          <button class="rectangle-3">
            <span class="order">Оформить заказ</span>
            
          </button>
        </div>

        
        <div class="image"></div>
        <span class="basilik">Базилик</span>
        <div class="rectangle-4">
          <span class="empty">1</span><span class="plus">+</span
          ><span class="minus">-</span>
        </div>
        <span class="rub-per-piece">111руб/шт</span>
      </div>
      <div class="line-5"></div>
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
</html> 


<?php
// Подключение к базе данных
$mysqli = new mysqli("localhost", "root", "111", "microzelen");

// Проверка соединения
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Обработка добавления товара в корзину
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    
    // Запрос на добавление товара в корзину
    $query = "INSERT INTO cart (product_id) VALUES ('$product_id')";
    if ($mysqli->query($query) === TRUE) {
        echo "Товар успешно добавлен в корзину.";
    } else {
        echo "Ошибка: " . $query . "<br>" . $mysqli->error;
    }
}

// Закрытие соединения с базой данных
$mysqli->close();
?>
