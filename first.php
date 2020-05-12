<?php

$n_number = $_POST['n_number'];
$m_number = $_POST['m_number'];

require_once "./header.php";
require_once "./functions.php";

return_massive($n_number, $m_number);

echo '<br><a href="./index.php">Вернуться на главную</a>';