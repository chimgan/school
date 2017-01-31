<?php
namespace School\Base;

/**
 * Class db
 * @package School\Base
 */
class db
{
    protected $host;
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

        $this->connect();
    }

    /**
     * Get DB connection
     */
    public function connect()
    {

    }
}