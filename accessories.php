<?php
session_start();
include("./php-connect/connect.php");
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    // Очистка сессионной переменной
    unset($_SESSION['message']);

    // Вывод сообщения только после регистрации
    echo '<div class="message">' . $message . '</div>';


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>accessories</title>
  <link rel="stylesheet" href="scss/style.css">
  <meta name="description" content="Вы узнаете стоимост аксессуаров для посадки микрозелени">
  <meta name="keywords" content="пулевизатор, агровата, контейнер">
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
         <a href="#" class="nav-text">Аксессуары</a>
        <a href="#" class="nav-text">Контакты</a>
        <img src="img/аватар.png" class="user" alt="аватар">
      </div>
    </div>
  </div>
  <div class="our">
    <div class="product-container">
        <?php
        $sql = "SELECT * FROM `accesories`";
        $result = mysqli_query($connect, $sql);
        if ($result->num_rows > 0) {
            $count = 0;
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product">';
                echo '<img src="img/' . $row['img'] . '" alt="accesories" class="accesories-img">';
                echo '<div class="overlay">';
                echo '<h2 class="accesories-title">' . $row['name'] . '</h2>';
                echo '<p class="accesories-text">' . $row['description'] . '</p>';
                echo '<p class="accesories-text">' . $row['price'] . '</p>';
                
                // Добавляем кнопку "Купить" для каждого товара
                echo '<form action="cart.php" method="post">';
                echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
                echo '<button type="submit" class="wer">Купить</button>';
                echo '</form>';
                
                echo '</div></div>';
                $count++;
                if ($count % 3 == 0) {
                    echo '</div><div class="accesories-container">'; 
                }
            }
            echo '</div>'; // Закрываем последний контейнер товаров
        }
        ?>
    </div>
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