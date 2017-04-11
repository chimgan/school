<?php
echo "<h1>";

//$variable = 23;
//
//testFunction();
//
//function testFunction()
//{
//    global $variable;
//
//    echo $variable;
//    $variable = 33;
//}
//echo $variable;

//$symbol = '+/';
//switch ($symbol)
//{
//    case '-':
//        echo '--';
//        break;
//    case '+':
//        echo '++';
//        break;
//    default:
//        echo "Unknow symbol";
//        break;
//}

// while
/*
$i = 1;
while ($i <= 10)
{
    echo $i++ . '<br />';
}
*/

// do while
//$i = 10;
//do
//{
//    echo ++$i . '<br />';
//}
//while ($i < 5);


$array = [
    'drink' => 'bear',
    'fast'  => 'fish',
    'food'  => 'cheeps'
];

foreach ($array as $key => $value)
{
//    echo "{$key} => {$value} {$array['drink']}<br />";
}

//for ($i = 0; $i < count($array); $i++)
//{
//    echo $array[$i] . '<br />';
//}

//$stringForPrint = "Display me";
//var_dump(true);

//sprintf
//$num = 5;
//$location = 'дереве';
//$format = '%d обезьян сидят на %s';
//echo sprintf($format, $num, $location);

//var_exprot
/*
$a = array (1, 2, array ("a", "b", "c"));
var_export($a);
 */
// Object
/*class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}
$bar = new foo;
$bar->do_foo();
 */
// Resource
//$handle = fopen('./index.php', 'r');
//fclose($handle);
//echo __FILE__;

//abs
//echo abs(-4.2) . '<br />';
//echo abs(5) . '<br />';
//echo abs(-5) . '<br />';

//max — Возвращает наибольшее значение
//echo max(1, 3, 5, 6, 7);
//echo "<br />";
//echo max(array(2, 4, 5));
//min — Находит наименьшее значение
//echo min(2, 3, 1, 6, 7);
//echo "<br />" . min(array(4, 2, 5));

//sqrt — Квадратный корень
//echo sqrt(9); echo "<br />";
//echo sqrt(10);

//pow — Возведение в степень
//echo pow(2, 8) . "<br />"; // int(256)
//echo pow(49,1/2) . "<br />";

//date
//echo date('Y-m-d H:i:s', strtotime("+1 day"));
//echo date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
//echo date("m.d.y");                         // 03.10.01
//echo date("j, n, Y");                       // 10, 3, 2001
//echo date("Ymd");                           // 20010310
//echo date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
//echo date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
//echo date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
//echo date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
//echo date("H:i:s");                         // 17:16:18
//echo date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (формат MySQL DATETIME)

//strtotime  Преобразует текстовое представление даты на английском языке в метку времени Unix
//echo strtotime("now"), "\n";
//echo strtotime("10 January 2000"), "\n";
//echo strtotime("+1 day"), "\n";
//echo strtotime("+1 week"), "\n";
//echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
//echo strtotime("next Thursday"), "\n";
//echo strtotime("last Monday"), "\n";

//echo date('Y-m-d : H-i-s', strtotime("+1 day"));

//mktime   Возвращает метку времени Unix для заданной даты
//echo mktime(0, 0, 0, 12, 03, 1997)."<br/>";
//echo date("M-d-Y", mktime(0, 0, 0, 12, 03, 1997));
//echo date("M-d-Y", mktime(0, 0, 0, 01, 1, 1997));
//echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
//echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));

//time — Возвращает текущую метку времени Unix
//echo microtime(true);
//$nextWeek = time() + (7 * 24 * 60 * 60);
//// 7 дней; 24 часа; 60 минут; 60 секунд
//echo 'Сейчас:           '. date('Y-m-d') ."<br />";
//echo 'Следующая неделя: '. date('Y-m-d', $nextWeek) ."<br />";



// FUNCTION
//$nameList = [
//    'Vlad',
//    'Dima',
//    'Petia',
//];
//
//foreach ($nameList as $firstName) {
//    printHello($firstName);
//}
//
//printHello();
//
//function printHello($name = 'NoName')
//{
//    echo "Hello Mr. $name, <br /> How are you?<br />";
//    $name = "???";
//
//}

//$valueOne   = 10;
//$valueTwo   = 20;
//$mathSymbol = '+';
//
//calculate($mathResult, $valueOne, $valueTwo, $mathSymbol);
//
//print_r($mathResult);
//
//function calculate(&$result, $operatorOne, $operatorTwo, $symbol)
//{
//    switch ($symbol) {
//        case '+':
//            $result = $operatorOne + $operatorTwo;
//            break;
//        default:
//            $result = 0;
//            break;
//    }
//}

/**
 * Display firstName and secondName
 * @param string $name
 * @param string $secondName
 * @return string Information about full name for some person
 */
//function displayFullName($name, $secondName)
//{
//    $fullName = "My name is $name! <br />
//                 My secondname is $secondName!!<br /><br />";
//    return $fullName;
//}
//echo displayFullName('Ivan', 'Ivanov');
//echo displayFullName('Petr', 'Petrov');

//func_num_args() — Возвращает количество аргументов, переданных функции

//function foo()
//{
//    $numargs = func_num_args();
//    echo "Количество аргументов: $numargs\n";
//}
//foo(1, 2, 3);

//func_get_arg() — Возвращает элемент из списка аргументов
//function foo1()
//{
//    $numargs = func_num_args();
//    echo "Количество аргументов: $numargs<br />";
//    if ($numargs >= 2) {
//        echo "Второй аргумент: " . func_get_arg(1) . "\n";
//    }
//}
//foo1(1, 21, 3);

//func_get_args() — Возвращает массив, содержащий аргументы функции
//function foo2()
//{
//    $numargs = func_num_args();
//    echo "Количество аргументов: $numargs<br />";
//    if ($numargs >= 2)
//    {
//        echo "Второй аргумент: " . func_get_arg(1) . "<br />";
//    }
//    $arg_list = func_get_args();
//    for ($i = 0; $i < $numargs; $i++)
//    {
//        echo "Аргумент №$i: " . $arg_list[$i] . "<br />";
//    }
//}
//foo2(11, 21, 31);




//$weather = "bad";
//
//if (true XOR true)
//{
//    echo "It Cool!!!";
//}
//else
//{
//    echo "It not good!!!";
//}

$name = '';

if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
    $name = $_POST['firstName'];
}

echo "Вы ввели имя: {$name}";

echo "</h1>";
?>

<form action="index.php" method="post">
    <input name="firstName" value="<?=$name?>" placeholder="Enter your firstname" />
    <input type="submit" value="Отправить" />
</form>
