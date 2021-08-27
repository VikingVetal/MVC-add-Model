<?php
namespace Common\Database;

class Connector
{
    private $dns;
    private $user;
    private $password;

    public function __construct()
    {
        $dirPath = __DIR__;
        $config = require $dirPath. '/../../Config/Database.php';
        //var_dump($config);
        $this->dns =
            $config['driver'] . ':' .'dbname='.
            $config['dbname'] . ';host'.
            $config['host'] . ':'.
            $config['port'];

        $this->user =
            $config['user'];

        $this->password =
            $config['password'];


    }

    public function connect()
    {
       $pdoObj = new \PDO($this->dns, $this->user, $this->password);
       return $pdoObj;
    }
}