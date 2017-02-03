<?php
namespace School\Base;

use DateTime;
use Exception;

$connect = NULL;
$database = 'Mysqly';
$host     = 'localhost';
$user     = 'root';
$password = 'password';
$dbName   = 'test';

if (in_array($database, db::$connector))
{
    try
    {
        /** @var Mysqly $db */
        $db = new $database($host, $user, $password, $dbName);
        $connect = $db->connect();
    }
    catch (Exception $exception)
    {
        echo 'Some Exception: ',  $exception->getMessage(), "<br />";
    }
}

/**
 * Class db
 * @package School\Base
 */
class db
{
    /**
     * @var string $host
     */
    protected $host;

    /**
     * @var string $user
     */
    protected $user;
    protected $password;
    protected $dbName;

    static $connection;

    static $connector = [
        'Mysql',
    ];

    /**
     * db constructor.
     * @param $host
     * @param $user
     * @param $password
     * @param $dbName
     */
    public function __construct($host, $user, $password, $dbName)
    {
        $this->host     = $host;
        $this->user     = $user;
        $this->password = $password;
        $this->dbName   = $dbName;
    }

    /**
     * Get DB connection
     */
    public function connect()
    {

    }
}

class Mysqly extends db
{
    /**
     * Get DB connection
     */
    public function connect()
    {
        self::$connection = mysqli_connect(
            $this->host,
            $this->user,
            $this->password,
            $this->dbName
        );
        return self::$connection;
    }
}

///**
// * Class SimpleClass
// */
//class SimpleClass
//{
//    /**
//     * Initial property
//     * @var string $variable
//     */
//    public $variable;
//
//    /**
//     * Initial const
//     */
//    const INTEGER_CONST = 1;
//
//    /**
//     * SimpleClass constructor.
//     * @param string $variable
//     */
//    public function __construct($variable = '')
//    {
//        $this->variable = $variable;
//    }
//
//    /**
//     * initial method
//     */
//    public function displayVariable()
//    {
//        echo $this->variable . $this->getSomeString() . self::INTEGER_CONST;
//    }
//
//    /**
//     * Get some plain text for display
//     * @return string
//     */
//    private function getSomeString()
//    {
//        return ' $$$';
//    }
//}

//class Parents
//{
//    static public function getYear()
//    {
//        return (new DateTime())->format('Y');
//    }
//
//    public function getAge()
//    {
//
//    }
//}
//
//class Childrens extends Parents
//{
//    public function getAge()
//    {
//        parent::getAge();
//    }
//}

echo "<h1>";
//$class = new SimpleClass('default value');
//$class->displayVariable();
//$class->variable = '<br />Another value';
//$class->displayVariable();
//
//$className = 'SimpleClass';
//$instance = new $className('<br />Dynamic class'); // new SimpleClass()
//$instance->displayVariable();
var_dump($connect);
//var_dump(Mysqly::$connection);
echo "</h1>";

