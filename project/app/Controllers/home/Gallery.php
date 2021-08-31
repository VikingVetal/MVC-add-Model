<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use Core\View;

class Gallery extends AbstractController
{
//    public function __construct() {
//        echo ' Мы сейчас на странице <b>Gallery</b>, перейдите на страницу<a href="About">About</a>
//';
//    }

    public function index()
    {
        $modelObgGallery = new \App\Model\Gallery();
        $byTitle = $modelObgGallery ->getConc(1);
        //var_dump($byTitle);
        $this->gener('Gallery','home', $byTitle );



        //View::view('Gallery', 'home', $byTitle);
    }

    public function more()
    {
        $modelObjContent = new \App\model\Gallery;
        $getContent = $modelObjContent->getContent('book');
        //var_dump($getContent);
        $this->gener('Model', 'home', $getContent);
    }
}

?>