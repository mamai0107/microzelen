<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>,la</title>
</head>
<body>
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
	<div class="account">
		<div class="account_inner" id="inner">
			<!-- <div class="account_img"></div> -->
            <img src="img/1662213764_j-74.jpg" alt="лис" class="account_img">
			<div class="account_info">
				<div class="account_name">Соколова Виктория</div>
				<div class="account_mail">sokolova192@mail.ru</div>
				<div class="account_tel">+7-999-276-22-99</div>
				<button id="edit_btn">Редактировать</button>
			</div>
		</div>
		<form action="#" id="form">
			<button class="photo">
				Загрузите файл
			</button>
			<div class="data">
				<div class="data_item"><span>Введите фамилию и имя</span><input type="text"></div>
				<div class="data_item"><span>Почта</span><input type="mail"></div>
				<div class="data_item"><span>Номер телефона</span><input type="tel"></div>
				<input type="submit" value="Изменить" id="chng_btn">
			</div>
		</form>
	</div>
    <script src="./js/account.js"></script>
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
</body>
</html>