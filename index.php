<?php
echo "<h1>";

//Массивы Основы
//Суперглобальные массивы
//$GLOBALS
//$_SERVER
//$_GET
//$_POST
//$_FILES
$form = <<<html
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве \$_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
html;
//echo $form;
//if (isset($_FILES['userfile']['name'])) {
//    $uploaddir = '/home/vlad/Projects/school/';
//    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
//
//    echo '<pre>';
//    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//        echo "Файл корректен и был успешно загружен.\n";
//    } else {
//        echo "Возможная атака с помощью файловой загрузки!\n";
//    }
//
//    echo 'Некоторая отладочная информация:';
//    print_r($_FILES);
//
//    print "</pre>";
//}
//$_COOKIE
//$_SESSION
//if ( !session_id() )
//{
//    session_start();
//}
//$_REQUEST
//$_ENV
// Пример использования getenv()
//$uniqId = 12345;
//putenv("UNIQID=$uniqId");
//
//$ip = getenv('REMOTE_ADDR');
//$uniqId = getenv('UNIQID');
//echo $uniqId;


//Функции работы с массивами
//Функции сортировки массива
//Поиск в массиве
//Слияние и разделение массивов

//$array = array(1, "hello", 1, "world", "hello");
//print_r(array_count_values($array));


//$search_array = array('first' => 1, 'second' => 4);
//if (array_key_exists('first', $search_array)) {
//    echo "Массив содержит элемент 'first'.";
//}


//$os = array("Mac", "NT", "Irix", "Linux");
//if (in_array("Irix", $os)) {
//    echo "Нашел Irix";
//}
//if (in_array("mac", $os)) {
//    echo "Нашел mac";
//}


//$array = array(0 => 100, "color" => "red");
//print_r(array_keys($array));


//$array = array("size" => "XL", "color" => "gold");
//print_r(array_values($array));


//function cube($n)
//{
//    return($n * $n * $n);
//}
//$a = array(1, 2, 3, 4, 5);
//$b = array_map("cube", $a);
//print_r($b);


//$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
//$key = array_search('green', $array); // $key = 2;
//$key = array_search('red', $array);   // $key = 1;


//$array1 = array("color" => "red", 2, 4);
//$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
//$result = array_merge($array1, $array2);
//print_r($result);


//$base = array("orange", "banana", "apple", "raspberry");
//$replacements = array(0 => "pineapple", 4 => "cherry");
//$replacements2 = array(0 => "grape");
//$basket = array_replace($base, $replacements, $replacements2);
//print_r($basket);


//$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
//$rand_keys = array_rand($input, 2);
//echo $input[$rand_keys[0]] . "\n";
//echo $input[$rand_keys[1]] . "\n";


//$numbers = range(1, 20);
//shuffle($numbers);
//foreach ($numbers as $number) {
//    echo "$number ";
//}


//$fruits = array("lemon", "orange", "banana", "apple");
//sort($fruits);
//foreach ($fruits as $key => $val)
//{
//    echo "fruits[" . $key . "] = " . $val . "\n";
//}


//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//
//$a = array(3, 2, 5, 6, 1);
//
//usort($a, "cmp");
//
//foreach ($a as $key => $value) {
//    echo "$key: $value\n";
//}



//Файловая система
//Основы
//pathinfo и другие функции связанные с путями
//функции для работы с файлами (filesize, filetype, filemtime)
//include(_once), require(_once)
//fopen, fwrite, fread, fclose
//file_get_contents, file_put_contents









$homeWork = <<<html

html;

echo $homeWork;

echo "</h1>";
