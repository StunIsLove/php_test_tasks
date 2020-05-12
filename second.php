<?php

$s_string = $_POST['s_string'];

require_once "./header.php";
require_once "./functions.php";

string_search($s_string);

echo '<br><a href="./index.php">Вернуться на главную</a>';