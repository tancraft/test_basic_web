<?php

namespace App;

class Render
{
    private $layout;

    public function __construct($layout = 'default')
    {
        $this->layout = $layout;
    }

    public function render($view, $data = [])
    {
        $content = $this->renderView($view, $data);
        include "../resources/views/{$this->layout}.php";
    }

    private function renderView($view, $data)
    {
        ob_start();
        extract($data);
        include "../resources/views/pages/{$view}.php";
        return ob_get_clean();
    }
}
