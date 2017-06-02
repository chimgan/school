<meta charset="UTF-8">
<?php
echo "<h1>";

//$link = mysqli_connect('localhost'
//                     , 'root'
//                     , 'password'
//                     , 'test');
//if (!$link)
//{
//    die('Ошибка соединения: ' . mysqli_error($link));
//}
//echo 'Успешно соединились<br /><br />';
//
//$sqlQuery = <<<SQL
//SELECT `name`
//     , `age`
//FROM `user`
//WHERE LENGTH(name)>6
//  AND LENGTH(name)<10
//SQL;
//
//$result = mysqli_query($link, $sqlQuery);
//$rowCount = mysqli_num_rows($result);
//
//if ($result && $rowCount > 0) {
//    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//        printf("ID: %s  <br />Имя: %s<br /><br />", $row['name'], $row['age']);
//    }
//    mysqli_free_result($result);
//} else if ($rowCount == 0) {
//    echo "Запрос вернул пустую выборку";
//} else {
//    echo "Ошибка в запросе";
//}
//
//
//mysqli_close($link);

$value = 'sometext';

setcookie("testCookie", $value, time()-1);
//setcookie("testCookie", $value, time() + 60*60);  /* срок действия 1 час */

//var_dump($_COOKIE["_dy_df_geo"]); exit;
var_dump($_COOKIE["testCookie"]);

echo "</h1>";
