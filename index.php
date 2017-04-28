<?php
echo "<h1>";

//REGEX
// preg_match — Выполняет проверку на соответствие регулярному выражению
//$subject = "abcdef";
//$pattern = '/^abc/';
//preg_match($pattern, $subject, $matches);
//print_r($matches);
//$subject = "My email is vasia@mail.com and it is cool
//My second email maybe test@mail.org is not loggin";
//$pattern = '/[a-z]+@[a-z]*\.[a-z]{3}/i';
//preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
//print_r($matches);
// preg_replace — Выполняет поиск и замену по регулярному выражению
//$string = 'April 15, 2003';
//$pattern = '/(\w+) (\d+), (\d+)/i';
//$replacement = '$11,$3';
//var_dump(preg_replace($pattern, $replacement, $string));
//$name = 'Name';
//if (!preg_match("/^[a-zA-Z\s]+$/",$name)) {
//	$nameErr = "Only letters and white space allowed";
//	echo $nameErr;
//}
//else
//{
//	echo "OK!!!";
//}

//$url = "http://2coders.ru/";
//$regexp = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
//if (preg_match($regexp, $url)) {
//    echo "Все правильно";
//}
//else
//{
//    echo "Вы ввели неправильное имя домена";
//}

//$value = "213";
//$regexp = '/^[\d]{1,10}$/';
//if (preg_match($regexp, $value)) {
//    echo "Все правильно";
//}
//else
//{
//    echo "Вы ввели не число";
//}




//Массивы Основы
//Суперглобальные массивы
//var_dump($_SERVER);
//$_GET
//$_POST
//$_FILES
$form = <<<html
<form enctype="multipart/form-data" action="index.php" method="POST">
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
//$ip = getenv('REMOTE_ADDR');
//$uniqId = getenv('UNIQID');
//echo $uniqId . '<br />';
//echo $ip;
//var_dump($_ENV);
//Функции работы с массивами
//Функции сортировки массива
//Поиск в массиве
//Слияние и разделение массивов
//$array = [1, "hello", 1, "world", "hello"];
//print_r(array_count_values($array));
// Функция подсчета лементов значения в массиве
//print_r(count($array));
//print_r(sizeof($array));
//$search_array = [
//	'first' => 1,
//	'second' => 4
//];
//if (array_key_exists('first1', $search_array)) {
//    echo "Массив содержит элемент 'first'.";
//}else{
//    echo "Массив не содержит заданного ключа";
//}
//$os = array("Mac", "NT", "Irix", "Linux");
//if (in_array("irix", $os)) {
//    echo "Нашел Irix";
//}
//if (in_array("Mac", $os)) {
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
//$b = array_map(function($value){
//    return $value * $value;
//}, $a);
//print_r($b);
//$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
//$key = array_search('green', $array); // $key = 2;
//echo $key . "<br />";
//$key = array_search('red1', $array);   // $key = 1;
//var_dump($key) . "<br />";
//$array1 = array("color" => "red", 0 => 2, 4);
//$array2 = array(0 => "a", "b", "color" => "green", "shape" => "trapezoid", 4);
//$result = array_merge($array1, $array2);
//print_r($result);
//$base = array("orange", "banana", "apple", "raspberry");
//$replacements = array(0 => "pineapple", 4 => "cherry");
//$replacements2 = array(0 => "grape");
//$basket = array_replace($base, $replacements, $replacements2);
//print_r($basket);
//$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
//$rand_keys = array_rand($input, 4);
//print_r($rand_keys);
//echo $input[$rand_keys[0]] . "\n";
//echo $input[$rand_keys[1]] . "\n";
//$numbers = range(10, 20);
//shuffle($numbers);
//foreach ($numbers as $number) {
//    echo "$number <br />";
//}
//$fruits = array("lemon", "orange", "banana", "apple");
//asort($fruits);
//foreach ($fruits as $key => $val)
//{
//    echo "fruits[" . $key . "] = " . $val . "<br />";
//}
//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//$a = array(3, 2, 5, 6, 1);
//usort($a, "cmp");
//foreach ($a as $key => $value) {
//    echo "$value <br />";
//}
//Файловая система
//Основы
//pathinfo и другие функции связанные с путями
//функции для работы с файлами (filesize, filetype, filemtime)
//include(_once), require(_once)
//fopen, fwrite, fread, fclose
//file_get_contents, file_put_contents

$homeWork = <<<html
1) Вывести дату своего рождения в 3х форматах;<br />
2) Написать калькулятор используя формы (использовать проверки для неверно заданных 
   значений и возвращать ошибки на исправление). Интерфейс построить с использованием бутстрап библиотеки;<br />
3) Грамотно поместить все в гит пулреквестом;
html;
//echo $homeWork;

echo "</h1>";
