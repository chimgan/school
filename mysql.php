<?php
namespace School\Base;

use School\Base\db;

class Mysql extends db
{
    /**
     * Get DB connection
     */
    public function connect()
    {
        self::$connection = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
        return self::$connection;
    }
}