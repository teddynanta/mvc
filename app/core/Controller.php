<?php

class Controller
{
    public function view($view, $data = [])
    {
        include "../app/views/" . $view . '.php';
    }
}
