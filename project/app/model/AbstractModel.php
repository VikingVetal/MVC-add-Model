<?php

namespace App\model;

use Common\Database\Connector;
use Common\Database\Select;

class AbstractModel
{
    protected $dbConnect;
    protected $getSGL;

    public function __construct()
    {
        $connector = new Connector();
        $this->dbConnect = $connector->connect();

    }

    public function select()
    {
        $select = new Select();
        $this->getSGL = $select->getSQL();
    }

}