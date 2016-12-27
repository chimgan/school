<?php
$link = mysqli_connect('localhost:3306', 'root', 'password', 'test');
if (!$link) 
{
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';
mysqli_close($link);
