
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>занятие с алексеем ЦИКЛЫ</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>ЭТО ЦИКЛЫ</h1>
	<?
	$i=1;
		do {
			echo "<p>$i<br></p>";
			$i++; //заводим цикл
		} while ($i<11)
	?>
	<?
	$u=10;
		do {
			echo "<p>$u<br></p>";
			$u--;
		} while ($u>0)
	?>
</body>
</html>