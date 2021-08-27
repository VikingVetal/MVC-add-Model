<?php

namespace App\model;

use Common\Database\Connector;

class Index extends AbstractModel
{

    public function getAll()
    {
        $sql = 'SELECT * FROM index;';
        $result = $this->dbConnect->query($sql);
        return $result->fetchAll();
    }

    public $text = 'Index model';

    public function list()
    {
       return $this->text;
    }

}