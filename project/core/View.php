<?php


namespace Core;


class View
{

     public static function view($name, $dir = 'home', $data = NULL)
    {
        //require '../view/'. $dir .'/' . $name . '.php';
        $test = __DIR__;
        require $test  . '/../view/'. $dir .'/' . $name . '.php';
        //var_export(file_exists($test  . '/../view/'. $dir .'/' . $name . '.php'));
    }

}