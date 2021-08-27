<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use Core\View;

class Index extends AbstractController
{
//    public function __construct() {
//        echo "Мы в контроллере INDEX";
//    }

//    public function index()
//    {
//        View::view('Index', 'home');
//    }

    public function Index()
    {
        $modelObgIndex = new \App\Model\Index();
        $byTitle = $modelObgIndex->getAll();
        //var_dump($byTitle);
        $this->gener('Index','home', $byTitle );
    }
}
?>