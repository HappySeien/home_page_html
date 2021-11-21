<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
	
	var answer = parseInt(Math.random () * 100);
	var tryCount = 0;
	var maxTryCount = 10;
	var playerNumber = 2;

	function readInt(){
			var number = document.getElementById("userAnswer").value
			return parseInt(number);
			// return +document.getElementById("userAnswer").value
		}

	function write(text){
		document.getElementById("info").innerHTML = text;
		}

	function hide(id){
		document.getElementById(id).style.display = "none";
	}
		
	function guess() {
		maxTryCount--;
		var userAnswer = readInt();
		if (userAnswer == answer){
			write("<b>Поздравляю вы угадали</b> Правильный ответ: " + answer + "Победил игрок " + playerNumber);
			hide("button");
			hide("userAnswer");
		} else if (maxTryCount == tryCount){
			write("Вы проиграли<br> Правильный ответ: " + answer);
			hide("button");
			hide("userAnswer");	
		} else if (userAnswer > answer){
			write("Вы ввлеи слишком большое число<br>Попробуйте еще раз. Введите число от 0 до 100<br> Ходит игорк " + playerNumber + " Всего попыток осталось " +maxTryCount)
		} else if (userAnswer < answer){
			write("Вы ввлеи слишком маленькое число<br>Попробуйте еще раз. Введите число от 0 до 100<br> Ходит игорк " + playerNumber + " Всего попыток осталось " +maxTryCount)
		}
		if (playerNumber == 1)
				playerNumber = 2;
			else 
				playerNumber = 1;
	}


	</script>
</head>
<body>
	<div class="content">
	<?php
	include "menu.php";
	?>

	
<div class="contentWarp">
	<div class="content">
		<div class="center">
		
		<h1>Игра угадайка мультиплеер</h1>	

		<div class="box">
		
		<p id = "info">Угадайте число от 0 до 100 <br> Начинает игрок 1 <br> Всего попыток 10.
</p>
		<input type="text" id="userAnswer">
		<br>

		<a href="#" onclick="guess();" id = "button">Начать</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy; Vladislav Goryakin
</div>

</body>
</html>