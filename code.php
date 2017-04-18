<?php
$name = '';

if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
    $name = $_POST['firstName'];
}

echo "Вы ввели имя: {$name}";