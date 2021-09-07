<?php

namespace App\model;


use Common\Database\Select;

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

        $selectMethood = new Select($this->getSGL);
        $selection = $selectMethood;
        return $selection;

        // пробовал через абстрактный класс
//        $sql = 'SELECT * FROM gallery;';
//        $result =  $this->getSGL->getALL($sql);
//        return $result->fetchAll(\PDO::FETCH_ASSOC);


/////////// рабочий
//        $sql = 'SELECT * FROM gallery;';
//        $result =  $this->dbConnect->query($sql);
//        return $result->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function getConc($line_id)
    {
        $sql ='SELECT gallery.id as gallery_id, about.id as about_id, gallery.text as gallery_text, about.title as about_title FROM gallery
        INNER JOIN about ON gallery.id = about.id WHERE about.id = '. (int)$line_id .'  order by about.id DESC ;';
        $result =  $this->dbConnect->query($sql);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
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