<?php

require_once "./header.php";

echo '<b>Первое задание:</b>
	<form action="first.php" method="post" enctype="multipart/form-data">
		Число N:<br> <input type="text" name="n_number"/><br>
		Число M:<br> <input type="text" name="m_number"/><br>
		<br><input type="submit" value="Вызвать функцию"/>
	</form>

	<hr>
	<b>Второе задание:</b>
	<form action="second.php" method="post" enctype="multipart/form-data">
		Строка S:<br> <input type="text" name="s_string"/><br>
		<br><input type="submit" value="Вызвать функцию"/>
	</form>

	<hr>
	<b>Третье задание:</b>
	<form action="third.php" method="post" enctype="multipart/form-data">
		Строка S:<br> <input type="text" name="s_string"/><br>
		<br><input type="submit" value="Вызвать функцию"/>
	</form>

	<hr>
	<b>Ссылки (без параметров)</b><br>

	<br><a href="./first.php">Первое задание</a>
	<br><a href="./second.php">Второе задание</a>
	<br><a href="./third.php">Третье задание</a>';