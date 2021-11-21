<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Электронная визитка</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<?php
	include "menu.php";
	?>


		<h1>Сайт-визитка</h1>	
		<div class="center">
	<img src="img/photo_2021-11-07_19-06-29.jpg">
			<div class="box_text">

				<p><b>Добрый день.</b> <i>Меня зовут Владислав Горякин.</i></p>
				<p>Немного обо мне:
				Начинающий программист, активно изучаю язык python и его возможности, бегло знаком с основами html 5 & css и языком javascript. Прохожу курс python-разработчик на платформе GeekBrains. Энергичный, приятный в общении человек. Активно самосовершенствуюсь и хочу попробовать свои силы в IT сфере, в качестве разработчика.</p>

				<p>Мой <a href="https://github.com/HappySeien"> GitHub.</a></p>

				<p>На этом сайте вы сможете сыграть в 
				несколько игр которые я написал, или воспользоваться генератором паролей.</p>

		<a href="#">Главная</a>
		<a href="puzzle.php">Загадки</a>
		<a href="guess.php">Угадайка</a>
		<a href="guess2.php">Угадайка мультиплеер</a>
		<a href="passGen.php">Генератор паролей</a>
			</div>
		</div>
	</div>

<div class="footer">
	Copyright &copy; <?php echo date(Y); ?> Vladislav Goryakin
</div>

</body>
</html>