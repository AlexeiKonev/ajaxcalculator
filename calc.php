<?php
// Получение выражения из запроса
$expression = $_POST['expression'];
// Проверка на корректность выражения
if (preg_match("/^[0-9\.\+\-\*\/]+$/", $expression)) {
    // Вычисление результата с помощью функции eval
    $result = eval("return $expression;");
    // Вывод результата
    echo $result;
} else {
    // Вывод ошибки
    echo "Неверное выражение";
}
?>
