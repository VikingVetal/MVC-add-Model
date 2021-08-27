<?php

namespace App\model;

use Common\Database\Connector;

class AbstractModel
{

    protected $dbConnect;

    public function __construct()
    {
        $connector = new Connector();
        $this->dbConnect = $connector->connect();
    }

}