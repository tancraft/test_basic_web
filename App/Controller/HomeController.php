<?php

namespace App\Controller;

use App\Render;

class HomeController
{
    public function index()
    {
        $render = new Render();
        $render->render('home');
    }

    public function about()
    {
        $render = new Render();
        $render->render('about');
    }
}

