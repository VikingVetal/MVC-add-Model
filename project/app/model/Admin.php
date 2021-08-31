<?php

namespace App\model;

use Common\Database\Connector;

class Admin extends AbstractModel
{
    public $register =
        [
            'name'=> 'admin',
            'password'=> 'admin_admin',
            'phone'=> '1234567'

        ];


    public function getAll()
    {
        $sql = 'SELECT * FROM prouser';
        $result =  $this->dbConnect->query($sql);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function getPassword($register)
    {
        if (array_key_exists($register, $this->register)) {
            return $this->register[$register];
        } else {
            return false;
        }
    }
}