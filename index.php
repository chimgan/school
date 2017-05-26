<?php
echo "<h1>";

$form = <<<html
<form enctype="multipart/form-data" action="index.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="2000" />
    <!-- Название элемента input определяет имя в массиве \$_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
html;
//echo $form;
if (isset($_FILES['userfile']['name'])) {
    $uploaddir = '/home/vlad/Projects/school/upload/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    if (mime_content_type($_FILES['userfile']['tmp_name']) != 'image/jpeg') {
        echo "Загрузите изображение!";
        exit;
    }
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo 'Файл корректен и был успешно загружен.<br />';
    } else {
        echo 'Возможная атака с помощью файловой загрузки!<br />';
    }

    echo 'Некоторая отладочная информация: <br />';
    print_r($_FILES);

    echo '</pre>';
}


function fibonacci($n)
{
    if ($n < 3) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

//for ($n = 1; $n <= 16; $n++)
//{
//    echo(fibonacci($n) . ", ");
//}
//echo"...<br />";


//https://habrahabr.ru/post/141290/


$link = @mysqli_connect("localhost", "tuser", "password", "test");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "SELECT 1")) {
    printf("Errormessage: %s\n", mysqli_error($link));
} else {
    echo "Request complete done";
}

/* close connection */
mysqli_close($link);

$homeWork = <<<html

html;

echo $homeWork;

echo "</h1>";
