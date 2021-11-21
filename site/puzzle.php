<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="content">
	<?php
	include "menu.php";
	?>

	
<div class="contentWarp">
	<div class="content">
		<div class="center">
		
		<h1>Игра в загадки</h1>	

		<div class="box">
		
			<?php
			if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer1']) && isset($_GET['userAnswer1'])){

				$userAnswer = $_GET["userAnswer1"];
				$score = 0;
				if($userAnswer == "санки"||$userAnswer == "сани"){
					$score++;
				}

				$userAnswer = $_GET["userAnswer2"];
				if($userAnswer == "шахматный"|| $userAnswer == "мертвый"){
					$score++;
				}

				$userAnswer = $_GET["userAnswer3"];
				if($userAnswer == "арбуз"||$userAnswer == "арбузы"){
					$score++;
				}

				$userAnswer = $_GET["userAnswer4"];
				if($userAnswer == "снег"||$userAnswer == "снежинка"){
					$score++;
				}

				$userAnswer = $_GET["userAnswer5"];
				if($userAnswer == "мяч"||$userAnswer == "мячик"){
					$score++;
				}

				$userAnswer = $_GET["userAnswer6"];
				if($userAnswer == "иголка с ниткой"||$userAnswer == "иголка"){
					$score++;
				}

				echo "Вы угадали " .$score. " загадок";
			}
			?>
	<form method="GET">
		<p>Под гору — коняшка, в гору — деревяшка.</p>
		<input type="text" name="userAnswer1">

		<p>Какой конь не ест овса?</p>
		<input type="text"name="userAnswer2">

		<p>К нам приехали с бахчи полосатые мячи.</p>
		<input type="text"name="userAnswer3">

		<p>Зимой — звезда, весной — вода.</p>
		<input type="text" name="userAnswer4">

		<p>Упадет — поскачет, ударишь — не плачет.</p>
		<input type="text" name="userAnswer5">

		<p>Конь стальной, хвост льняной.</p>
		<input type="text" name="userAnswer6">

		<br>
		<input type="submit" value="Ответить" name = "">
	</form>
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