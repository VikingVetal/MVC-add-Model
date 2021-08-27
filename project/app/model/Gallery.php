<?php

namespace App\model;

use Common\Database\Connector;

class Gallery extends AbstractModel
{
    public $content =
        [
            'book'=> 'read php',
            'video'=> 'watch php',
            'photo'=> 'photo'

        ];

    public function getAll()
    {
        $sql = 'SELECT * FROM gallery;';
        $result =  $this->dbConnect->query($sql);
        return $result->fetchAll();
    }

    public function getContent($content)
    {
        if (array_key_exists($content, $this->content)) {
            return $this->content[$content];
        } else {
            return false;
        }
    }

    public function list()
    {
        return $this->content;

    }
}