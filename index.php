<?php
echo "<h1>";

//echo intval(42)."<br />";                      // 42
//echo intval(4.2)."<br />";                     // 4
//echo intval('42')."<br />";                    // 42
//echo intval('+42')."<br />";                   // 42
//echo intval('-42')."<br />";                   // -42
//echo (integer)'11a '."<br />";                   // -42

//$var = '122.34343The';
//$float_value_of_var = floatval($var);
//echo $float_value_of_var; // 122.34343

//$foo = "5bar"; // строка
//$bar = false;   // булевое значение
//settype($foo, "integer"); // $foo теперь 5   (целое)
//settype($bar, "string");  // $bar теперь "1" (строка)
//settype($bar, "boolean");  // $bar теперь "1" (строка)
//var_dump($bar);
//echo gettype($bar);

//$a    = 'car bar'; // $a - это строка
//$a[4] = 'c';   // $a все еще строка
//echo $a;       // bar
//for ($i = 0; $i < strlen($a); $i++)
//{
//    echo $a[$i] . "<br />";
//}
// Не будет работать так как не массив
//foreach ($a as $value)
//{
//    echo $value . "<br />";
//}

//$foo = 10;   // $foo это целое число
//$bar = (boolean) $foo;   // $bar это булев тип
//var_dump($bar);
//$var = 1;
//echo $var;
//unset($var);
//$var = 12;
//echo $var;

//function variableChanger(&$arg1, $arg2 = '')
//{
//    unset($arg1);
//    $arg1 = "blah";
//}
//
//$blackJack = 'something';
//echo "$blackJack<br />";
//variableChanger($blackJack);
//echo "$blackJack<br />";


// Some information about git
//https://git-scm.com/book/ru/v1/%D0%92%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5-%D0%9E-%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D0%B5-%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D0%B9
//https://camo.githubusercontent.com/f2a574f39c54fec927c020221af0fced76f0e7db/68747470733a2f2f646f63732e676f6f676c652e636f6d2f64726177696e67732f642f317238334b3634544643744239386d424747463964324b5056656b556e6d6979396562665675676a726378302f7075623f773d36303626683d323930
//git log --oneline --decorate --all --graph
//git log --graph --full-history --all --color --pretty=format:"%x1b[31m%h%x09%x1b[32m%d%x1b[0m%x20%s"


//$string = "<a href='test'>Test</a>";
//$new = htmlspecialchars($string, ENT_QUOTES);
//echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
//echo '<br />';
//$str = "<p>this -&gt; &quot;</p>\n";
//echo htmlspecialchars_decode($str, ENT_QUOTES);


//$form = <<<FORM
//<form action="index.php" method="post">
// <p>Ваше имя:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" placeholder="123" /></p>
// <p>Ваш возраст: <input type="text" name="age" /></p>
// <p><input type="submit" /></p>
//</form>
//FORM;
//echo $form;

//$array = [1,2,3,4,5];
//var_dump(in_array(7, $array));




// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! String function !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//echo "foo - это вам не\n bar" . "<br />";
//echo nl2br("foo - это вам не\n bar");

//$str = "Ваше имя O'Reilly?";
//$str = 'Ваше имя O"Reilly?';
// выводит: Ваше имя O\'Reilly?
//echo addslashes($str).'<br />';
//echo stripslashes($str);


//$pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0].'<br />'; // кусок1
//echo $pieces[1]; // кусок2
//var_dump($pieces);


$array = [
    'имя',
    'почта',
    'телефон'
];
//$comma_separated = implode("# ", $array);
//echo $comma_separated; // имя,почта,телефон

//function trim_value(&$value)
//{
//    $value = trim($value, ' #');
//}
//
//$fruit = ['#apple ',' banana#', '#cranberry#'];
//var_dump($fruit);
//array_walk($fruit, 'trim_value');
//var_dump($fruit);

//$str = 'яблоко';
//if (md5($str) === '1afa148eb41f2e7103f21410bf48346c')
//{
//    echo "Вам зеленое или красное яблоко?";
//}

//echo '<br />' . md5($str);
//echo '<br />' . sha1($str);

//$number = 1234.56;
// международный формат в локали en_US
//setlocale(LC_MONETARY, 'en_US');
//echo money_format('%i', $number) . "\n";
// USD 1,234.56
// Итальянский национальный формат с 2 знаками после запятой
//setlocale(LC_MONETARY, 'it_IT');
//echo money_format('%.2n', $number) . "\n";
// Eu 1.234,56

//$str = 'abcdef';
//echo "Длинна строки abcdef = " . strlen($str); // 6

//$mystring = 'abc';
//$findme   = 'a';
//$pos = strpos($mystring, $findme);
//if ($pos === false) {
//    echo "Подстрока '$findme' не найдена в строке '$mystring'";
//} else {
//    echo "Подстрока '$findme' найдена в строке '$mystring'";
//    echo "<br />в позиции $pos";
//}

//$email  = 'name@example.com';
//$domain = strstr($email, '@');
//echo $domain . '<br />'; // выводит @example.com

//$user = strstr($email, '@', true); // Начиная с PHP 5.3.0
//echo $user; // выводит name

//$str = "Mary Had A Little Lamb and She LOVED It So";
//$str = strtolower($str);
//echo $str . '<br />'; // выводит: mary had a little lamb and she loved it so

//$str = "Mary Had A Little Lamb and She LOVED It So";
//$str = strtoupper($str);
//echo $str; // выводит: MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

//$string = "<body background='%body%'>";
//$bodytag = str_replace("%body%", "black", $string);
//echo $bodytag;


// Порядок замены
//$str     = "String with fuck word and ass shirt of piace";
//$order   = ["fuck", "ass", "shirt", "piace"];
//$replace = ["f*ck", "*ss", "kiss"];
// Обрабатывает сначала \r\n для избежания их повторной замены.
//echo $newstr = str_replace($order, $replace, $str);

//$rest = substr("abcdef", 2, 1);
//echo $rest . "<br />";

//$rest = substr("abcdef", 2, 2);
//echo $rest;

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

$value = "213";
$regexp = '/^[\d]{1,10}$/';
if (preg_match($regexp, $value)) {
    echo "Все правильно";
}
else
{
    echo "Вы ввели не число";
}

$homeWork = <<<html
1) Вывести дату своего рождения в 3х форматах;<br />
2) Написать калькулятор используя формы (использовать проверки для неверно заданных 
   значений и возвращать ошибки на исправление). Интерфейс построить с использованием бутстрап библиотеки;<br />
3) Грамотно поместить все в гит пулреквестом;
html;
//echo $homeWork;

echo "</h1>";
