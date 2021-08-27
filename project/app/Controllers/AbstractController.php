<?php

namespace App\Controllers;
use Core\View;

abstract class AbstractController
{
    protected function gener($name, $dir, $data = NULL)
    {
        View::view($name, $dir, $data);
    }
}