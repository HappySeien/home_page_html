<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	
	function write(text){
		document.getElementById("info").innerHTML = text;
		}

		function readInt(){
			var passLentgh = document.getElementById("userAnswer").value
			return parseInt(passLentgh);
		}

	function passGen(){
		var userAnswer = readInt();
		var  sym= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		var genPass = "";
		for(let i = 0; i<userAnswer;i++){
			genPass += sym[Math.floor(Math.random() * sym.length)];
		}

		

		write ("Ваш пароль: " + genPass)

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
		
		<h1>Генератор паролей</h1>	

		<div class="box">
		
		<p id = "info">Укажите количество символов в пароле</p>
		<input type="text" id="userAnswer">
		<br>

		<a href="#" onclick="passGen();" id = "button">Сгенерировать</a>
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