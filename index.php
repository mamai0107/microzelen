<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>microzelen</title>
  <link rel="stylesheet" href="scss/style.css">
  <meta name="description" content="Забота о здоровье наших клиентов - наша главная забота, и им это нравится.">
  <meta name="keywords" content="ферма, микрозелень, полезно">
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
        <a href="contact.php" class="nav-text">Контакты</a>
        <img src="img/аватар.png" class="user" alt="аватар">
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container">
      <div class="main-box">
        <h1 class="main-title">Микрозелень</h1>
        <button class="bt">Купить</button>
      </div>
    </div>
    <div class="home">
      <img src="img/главная.png" class="home" alt="главная">
    </div>
  </div>
  </div>
  <div class="microzelen">
    <div class="container container__microzelen">
      <div class="box">
        <div class="box-microzelen">
          <h2 class="title">О микрозелени</h2>
          <div class="text">Микрозелень - это небольшие растения, которые выращиваются из семян и собираются на ранней
            стадии роста, когда они еще молоды и нежны. Эти растения
            часто используются в качестве декоративных элементов или для добавления в кулинарию, например, как гарнир к
            блюдам или как ингредиент в салатах, супах, сэндвичах и других блюдах.
            Микрозелень имеет более интенсивный вкус и аромат, чем полностью выросшие растения, а также более высокую
            концентрацию питательных веществ, таких как витамины, минералы и антиоксиданты.
            Различные виды микрозелени имеют свои собственные уникальные вкусы и текстуры, что делает их интересным и
            полезным дополнением к блюдам.</div>
        </div>

        <div class="microzelen-img">
          <img src="img/зеленушка.png" class="zelen" alt="зеленушка">
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="icons">
    <div class="container">
      <div class="services-box">
        <div class="services">
          <img src="img/дом4.png" class="services-img" alt="дом">
        </div>
        <div class="services">
          <img src="img/растение3.png" class="services-img" alt="растение">
        </div>
        <div class="services">
          <img src="img/кабинет1.png" class="services-img" alt="кабинет">
        </div>
        <div class="services">
          <img src="img/корзина2.png" class="services-img" alt="корзина">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="farm">
        <div class="box-farm">
          <div class="text-a">Мы занимаемся современным местным производством продуктов  и здорового питания, работающими в экологичном режиме. Увлекательно создавать что-то полезное! И, когда это не только полезно, но и удивительно вкусно, это особенно прекрасно.
            Наша цель сегодня - предоставить городским жителям возможность насладиться всей мощью природных витаминов и полезных веществ.
            Наши принципы бизнеса заключаются в создании экологически чистого и полезного продукта, доступного для всех.
            В процессе производства мы используем только самые лучшие посадочные материалы, семена и технологии.
            Забота о здоровье наших клиентов - наша главная забота, и им это нравится.</div>
          </div>
        <div class="farm-img">
          <img src="img/ферма.png" class="farma" alt="ферма">
        </div>
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
