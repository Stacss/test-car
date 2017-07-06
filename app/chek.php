
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>получаем данные отправки</title>
	<link rel="stylesheet" href="http://autoinostranec.ru/test/css/style.css">
</head>
<body>
	<h2>Поздравляю, ваша машина!</h2>
	<?php
			$auto = array($name = $_POST['name'],$model = $_POST['model'],$year = $_POST['year'],$speed = $_POST['speed']);  //_POST - это метод указанный в форме отправки, данная команда записывает значение value в указанную переменную.
			
			echo "<p>марка: ".$name."<br>"."модель: ".$model."<br>"."год: ".$year."<br>"."ваша скорость: ".$speed."<br></p>";
			if ($year<=2000) {
				echo '<h3>Ваша машина довольно стара, пора ее на свалку!</h3>';
			}
			elseif ($year>=2011){
				echo '<h3>Ваша машина еще хорошая!</h3>';
			}
			else {
				echo "<h3>машина неплохая, но будет ломаться!</h3>";
			};
	?>
	<div class="marka">
	<?
			switch ($name) {
				case "bmw":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "audi":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "skoda":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "volkswagen":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "porsche":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "nissan":
					echo "<h4>".$name."</h4> - это японская авто!";
					break;
				case "toyota":
					echo "<h4>".$name."</h4> - это японская авто!";
					break;
				case "mazda":
					echo "<h4>".$name."</h4> - это японская авто!";
					break;
				case "mitsubishi":
					echo "<h4>".$name."</h4> - это японская авто!";
					break;
				case "kia":
					echo "<h4>".$name."</h4> - это корейская авто!";
					break;
				case "hyundai":
					echo "<h4>".$name."</h4> - это корейская авто!";
					break;
				case "ford":
					echo "<h4>".$name."</h4> - это американская авто!";
					break;
				case "chevrolet":
					echo "<h4>".$name."</h4> - это американская авто!";
					break;
				case "opel":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "fiat":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "citroen":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "peugeot":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;
				case "renault":
					echo "<h4>".$name."</h4> - это европейская авто!";
					break;				
				case "daewoo":
					echo "<h4>".$name."</h4> - это корейская авто!";
					break;
					default:
					echo "<h4>".$name."</h4>Друг, помоему такой марки не существует!!! Проверьте правильность написания названия марки!";
			};
	?>	
	</div>
	<?
			if ($speed > 60) {
					echo "<p>ваша скорость-".$speed." - превышение!</p>";
				} elseif ($speed <= 0) {
					echo "<p>ваша скорость-".$speed." - вы стоите или указали отрицательное значение</p>";
				} else {
					echo "<p>ваша скорость-".$speed." - в норме!</p>";
				}
	?>
	<a href="http://autoinostranec.ru/test/input.php">возврат назад</a>
</body>
</html>