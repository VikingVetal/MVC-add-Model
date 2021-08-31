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
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getConc($line_id)
    {
        $sql ='SELECT about.id as about_id, home.id as home_id, about.title as about_title, home.info as about_title FROM about
        INNER JOIN home ON about.id = home.id WHERE home.id = '. (int)$line_id .'  order by home.id DESC ;';
        $result =  $this->dbConnect->query($sql);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
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