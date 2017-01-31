<?php
//namespace School\Base;
//
//use DateTime;
//use Exception;

class SimpleClass
{
    /**
     * Initial property
     * @var string $var
     */
    public $var = 'default value';

    /**
     * Initial const
     */
    const INTEGER_CONST = 1;

    /**
     * initial method
     */
    public function displayVar()
    {
        echo $this->var;
    }
}

//class Test
//{
//    static public function getYear()
//    {
//        return (new DateTime())->format('Y');
//    }
//}
//
//class Child extends Test
//{
//
//}
//
//$connect = NULL;
//$database = 'Mysql';
//$host     = 'localhost';
//$user     = 'root';
//$password = 'password';
//$dbName   = 'test';
//if (in_array($database, \School\Base\db::$connector))
//{
//    try {
//        $connect = new $database($host, $user, $password, $dbName);
//    } catch (Exception $exception) {
//        echo 'Some Exception: ',  $exception->getMessage(), "<br />";
//    }
//}
//var_dump($connect);
//var_dump(\School\Base\Mysql::$connection);

echo "<h1>";
$class = new SimpleClass;
$class->displayVar();
//$className = 'SimpleClass';
//$instance = new $className(); // new SimpleClass()
//$instance->displayVar();
echo "</h1>";

