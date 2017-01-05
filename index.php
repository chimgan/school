<?php
echo "<meta charset=\"UTF-8\">";
echo "<h1>";

$link = mysqli_connect('localhost', 'root', 'password', 'test');
if (!$link)
{
    die('Ошибка соединения: ' . mysqli_error($link));
}
echo 'Успешно соединились';
mysqli_close($link);

echo "</h1>";
