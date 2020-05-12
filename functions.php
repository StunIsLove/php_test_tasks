<?php

function return_massive($n_number, $m_number) {
	try {
		if(!is_numeric($n_number)|| !is_numeric($m_number)  || $n_number == NULL || $m_number == NULL) {
			throw new Exception("Переменные N и M должны быть числами. <br> Через 3 секунды Вы будете
									перенаправлены на главную страницу.");
		}

		echo "<b>Результат:</b><br>";

		for($i = 0; $i <= $n_number; $i++) {
			if(($i % $m_number) == 0) {
				echo $i . '<br>';
			}
		}
	}

	catch (Exception $e) {
    	echo $e->getMessage();

		echo '<meta http-equiv="refresh" content="3; URL=index.php">';
	}
}

function string_search($s_string) {
	try {
		if(!is_string($s_string) || $s_string == NULL) {
			throw new Exception("Переменная S должна быть строкой. <br> Через 3 секунды Вы будете
									перенаправлены на главную страницу.");
		}

		$input_content = file_get_contents('./in.txt');
		$lines = explode("\r", $input_content);
		$output_content;

		echo "<b>Записанные строки:</b><br>";

		foreach ($lines as $line) {
			if(substr_count($line, $s_string) >= 2) {
				echo $line . '<br>';

				$output_content .= $line;
			}
		}

		file_put_contents('./out.txt', $output_content);
	}

	catch (Exception $e) {
    	echo $e->getMessage();

		echo '<meta http-equiv="refresh" content="3; URL=index.php">';
	}
}

function sum_num_from_string($s_string) {
	try {
		if(!is_string($s_string) || $s_string == NULL) {
			throw new Exception("Переменная S должна быть строкой. <br> Через 3 секунды Вы будете
									перенаправлены на главную страницу.");
		}

		$sum = 0;

		echo "<b>Найденные числа:</b> ";

		for($i = 0; $i <= strlen($s_string); $i++) {
			if(is_numeric($s_string[$i])) {
				echo $s_string[$i] . ' ';

				$sum += $s_string[$i];
			}
		}

		echo "<br><b>Сумма чисел из строки S равна:</b> " . $sum;
	}


	catch (Exception $e) {
    	echo $e->getMessage();

		echo '<meta http-equiv="refresh" content="3; URL=index.php">';
	}
}