<?php

namespace App\model;

use Common\Database\Connector;
use Common\Database\Select;

class AbstractModel
{
    protected $dbConnect;

    public function __construct()
    {
        $connector = new Connector();
        $this->dbConnect = $connector->connect();
    }

}