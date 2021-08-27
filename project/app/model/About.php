<?php

namespace App\model;

use Common\Database\Connector;

class About extends AbstractModel
{
    public $title =
        [
            'keyone'=> 'many many text',
            'keytwo'=> 'many many two',
            'keythree'=> '3333'

        ];

    // protected dbConnect сделал в  AbstractModel.php
    public function getAll()
    {
        $sql = 'SELECT * FROM about;';
        $result = $this->dbConnect->query($sql);
        If ($result){
            while ($row = $result->fetchAll()){

            }
        }

        //return $result->fetchAll();
    }


    public function getAboutByTitle($title)
    {
        if (array_key_exists($title, $this->title)) {
            return $this->title[$title];
        } else {
            return false;
        }
    }


    public function list()
    {
        return $this->title;

    }

}