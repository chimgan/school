<?php
echo "<h1>";

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! String function !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//echo "foo - это вам не\n bar" . "<br />";
//echo nl2br("foo - это вам не\n bar");


//$str = "Ваше имя O'Reilly?";
// выводит: Ваше имя O\'Reilly?
//echo addslashes($str).'<br />';
//echo stripslashes($str);

//$pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0].'<br />'; // кусок1
//echo $pieces[1]; // кусок2
//var_dump($pieces);

//$array = ['имя', 'почта', 'телефон'];
//$comma_separated = implode("# ", $array);
//echo $comma_separated; // имя,почта,телефон


//function trim_value(&$value)
//{
//    $value = trim($value, ' #');
//}
//$fruit = ['#apple ',' banana#', '#cranberry#'];
//var_dump($fruit);
//array_walk($fruit, 'trim_value');
//var_dump($fruit);


//$str = 'яблоко';
//if (md5($str) === '1afa148eb41f2e7103f21410bf48346c') 
//{
//    echo "Вам зеленое или красное яблоко?";
//}
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
//echo strlen($str); // 6


//$mystring = 'abc';
//$findme   = 'a';
//$pos = strpos($mystring, $findme);
//if ($pos === false) {
//    echo "Строка '$findme' не найдена в строке '$mystring'";
//} else {
//    echo "Строка '$findme' найдена в строке '$mystring'";
//    echo " в позиции $pos";
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


//$bodytag = str_replace("%body%", "black", "<body background='%body%'>");
//echo $bodytag;
// Порядок замены
//$str     = "String with fuck word and ass shirt of piace";
//$order   = ["fuck", "ass", "shirt", "piace"];
//$replace = ["f*ck", "*ss", "kiss"];
// Обрабатывает сначала \r\n для избежания их повторной замены.
//echo $newstr = str_replace($order, $replace, $str);


//$rest = substr("abcdef", -3, -1);
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

$url = "http://2coders.ru/";
if (preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $url)) {
    echo "Все правильно";
}
else
{
    echo "Вы ввели неправильное имя домена";
}









$homeWork = <<<html
1) Вывести дату своего рождения в 3х форматах;<br />
2) Написать калькулятор используя формы (использовать проверки для неверно заданных 
   значений и возвращать ошибки на исправление). Интерфейс построить с использованием бутстрап библиотеки;<br />
3) Грамотно поместить все в гит пулреквестом;
html;

//echo $homeWork;

echo "</h1>";
