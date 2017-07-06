<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>работа с импут</title>
	<link rel="stylesheet" href="http://autoinostranec.ru/test/css/style.css">
</head>
<body>
<p>test</p>
	<h1>работа с отправкой данных</h1>
	<h2>введите данные</h2>
		<form action="app/chek.php" method="post">
			<p>марка<input type="text" name="name" placeholder="fiat"></p>
			<p>модель<input type="text" name="model" placeholder="punto"></p>
			<p>год выпуска<input type="text" name="year" placeholder="1999"></p>
			<p>ваша скорость<input type="text" name="speed" placeholder="60"></p>
			<button type="submit">отправить</button>
		</form>	
	
	
</body>
</html>