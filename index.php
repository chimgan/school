<?php
echo "<h1>";

//echo intval(42)."<br />";                      // 42
//echo intval(4.2)."<br />";                     // 4
//echo intval('42')."<br />";                    // 42
//echo intval('+42')."<br />";                   // 42
//echo intval('-42')."<br />";                   // -42


//$var = '122.34343The';
//$float_value_of_var = floatval($var);
//echo $float_value_of_var; // 122.34343


//$foo = "5bar"; // строка
//$bar = false;   // булевое значение
//settype($foo, "integer"); // $foo теперь 5   (целое)
//settype($bar, "string");  // $bar теперь "1" (строка)
//echo $bar;
//echo gettype($bar);

//$a    = 'car'; // $a - это строка
//$a[0] = 'b';   // $a все еще строка
//echo $a;       // bar
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
//echo $var;

//function foo(&$bar)
//{
//    unset($bar);
//    $bar = "blah";
//}
//$bar = 'something';
//echo "$bar<br />";
//foo($bar);
//echo "$bar<br />";
//

// Some information about git
//https://git-scm.com/book/ru/v1/%D0%92%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5-%D0%9E-%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D0%B5-%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D0%B9
//https://camo.githubusercontent.com/f2a574f39c54fec927c020221af0fced76f0e7db/68747470733a2f2f646f63732e676f6f676c652e636f6d2f64726177696e67732f642f317238334b3634544643744239386d424747463964324b5056656b556e6d6979396562665675676a726378302f7075623f773d36303626683d323930
//git log --oneline --decorate --all --graph
//git log --graph --full-history --all --color --pretty=format:"%x1b[31m%h%x09%x1b[32m%d%x1b[0m%x20%s"


//$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
//echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
//echo '<br />';

//$str = "<p>this -&gt; &quot;</p>\n";
//echo htmlspecialchars_decode($new, ENT_QUOTES);


$form = <<<FORM
<form action="action.php" method="post">
 <p>Ваше имя:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
FORM;
echo $form;


// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! String function !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//echo nl2br("foo - это вам не\n bar");


$homeWork = <<<html
1) Вывести дату своего рождения в 3х форматах;
2) Написать калькулятор используя формы (использовать проверки для неверно заданных 
   значений и возвращать ошибки на исправление). Интерфейс построить с использованием бутстрап библиотеки;
3) Грамотно поместить все в гит пулреквестом;
html;

//echo $homeWork;

echo "</h1>";
