<?php
include_once "var.php";
echo "<h1>";

//echo $testVar;


//Файловая система
//Основы
//pathinfo и другие функции связанные с путями



//pathinfo — Возвращает информацию о пути к файлу
//$path_parts = pathinfo('/home/vlad/Projects/school');
//var_dump($path_parts);
//echo $path_parts['dirname'],   "<br />";
//echo $path_parts['basename'],  "<br />";
//echo $path_parts['extension'], "<br />";
//echo $path_parts['filename'],  "<br />"; // начиная с PHP 5.2.0


//basename — Возвращает последний компонент имени из указанного пути
//echo "1) ".basename("/etc/sudoers.d", ".d"). "<br />";
//echo "2) ".basename("/etc/sudoers.d"). "<br />";
//echo "3) ".basename("/etc/passwd"). "<br />";
//echo "4) ".basename("/etc/"). "<br />";
//echo "5) ".basename("."). "<br />";
//echo "6) ".basename("/");


//dirname — Возвращает имя родительского каталога из указанного пути
//echo dirname("/etc/passwd") .  "<br />";
//echo dirname("/etc/") .  "<br />";
//echo dirname(".") .  "<br />";
//echo dirname("/usr/local/lib", 2);

//realpath — Возвращает канонизированный абсолютный путь к файлу
//echo realpath('./../../Desktop');


//функции для работы с файлами (filesize, filetype, filemtime)
//$filename = 'lib.inc.php';
//echo 'Размер файла ' . $filename . ': ' . filesize($filename) . ' байт';


//filetype — Возвращает тип файла
//echo filetype('/etc/passwd') . "<br />";  // file
//echo filetype('/etc/') . "<br />";        // dir
//echo filetype('/home/vlad/Projects/school/my_ln') . "<br />";        // dir






//??????????????
//$var = "~/Projects/school";
//$absoluteDirPath = realpath($var);
//var_dump($absoluteDirPath); exit;
//echo filetype($absoluteDirPath);        // dir


//filemtime — Возвращает время последнего изменения файла
//$filename = 'lib.inc.php';
//if (file_exists($filename)) {
//    echo "В последний раз файл $filename был изменен: " . date ("F d Y H:i:s.", filemtime($filename));
//}



//include(_once), require(_once)
//fopen, fwrite, fread, fclose
//fopen — Открывает файл или URL
$filePath = '/home/vlad/Projects/school/lib.inc.php';
//$handle = fopen($filePath, "r");
//if (FALSE === $handle)
//{
//    exit("Не удалось открыть поток по url адресу");
//}
//
//$contents = '';
//
//while (!feof($handle))
//{
//    $contents .= fread($handle, filesize($filePath));
//}
//fclose($handle);
//print_r($contents);

//$somecontent = "Добавить это к файлу\n";

//// Вначале давайте убедимся, что файл существует и доступен для записи.
//if (is_writable($filePath)) {

//    // В нашем примере мы открываем $filename в режиме "записи в конец".
//    // Таким образом, смещение установлено в конец файла и
//    // наш $somecontent допишется в конец при использовании fwrite().
//    if (!$handle = fopen($filePath, 'w')) {
//        echo "Не могу открыть файл ($filePath)";
//        exit;
//    }

//    // Записываем $somecontent в наш открытый файл.
//    if (fwrite($handle, $somecontent) === FALSE) {
//        echo "Не могу произвести запись в файл ($filePath)";
//        exit;
//    }

//    echo "Ура! Записали ($somecontent) в файл ($filePath)";

//    fclose($handle);

//} else {
//    echo "Файл $filename недоступен для записи";
//}


//file_get_contents, file_put_contents
$filePath = '/home/vlad/Projects/school/lib.inc.php';

//file_get_contents — Читает содержимое файла в строку
//$homepage = file_get_contents('http://www.rozetka.ua/');
//echo $homepage;

//echo file_get_contents($filePath);
//var_dump(file($filePath));


//file_put_contents — Пишет строку в файл
//$current = file_get_contents($filePath);
//// Добавляем нового человека в файл
//$current .= "John Smith\n";
//// Пишем содержимое обратно в файл
//file_put_contents($filePath, $current);


//$filePath = '/home/vlad/Projects/school';
//if ($handle = opendir($filePath))
//{
//    if (false === ($entry = readdir($handle))) {
//	echo "Not permit"; exit;
//   }
//    while (false !== ($entry = readdir($handle))) {
//
//        if ($entry != "." && $entry != "..") {
//
//            echo "$entry<br />";
//        }
//    }
//
//    closedir($handle);
//}





$homeWork = <<<html
Написать лазилку по файлам

0) Написать грамотный шаблон HTML (example: <Doctype ..>< html >< head >...);
1) Задать путь стартовой директории;
2) 
html;

echo $homeWork;

echo "</h1>";
