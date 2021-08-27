<?php


namespace App\Controllers\admin;


use App\Controllers\AbstractController;
use Core\View;

class Admin extends AbstractController
{

    public function index()
    {
        $modelObgAdmin = new \App\Model\Admin();
        $byTitle = $modelObgAdmin ->getAll();
        //var_dump($byTitle);
        $this->gener('Admin','admin', $byTitle );
        //View::view('Admin','admin', $byTitle);

    }


//    public function index()
//    {
//        print_r('qq admin');
//        View::view('Admin', 'admin');
//
//    }

    public function registerAdmin()
    {
        $modelObgRegister = new \App\Model\Admin;
        $getPass = $modelObgRegister ->getPassword('password');
        var_dump($getPass);
        $this->gener('admin', 'admin',$getPass);
    }

}