<?php

class About extends Controller
{
    public function index($name = "teddy", $crush = "myself")
    {
        $data['name'] = $name;
        $data['crush'] = $crush;
        $data['judul'] = "About";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function me()
    {
        $data['judul'] = "About Me";
        $this->view('templates/header', $data);
        $this->view('about/me');
        $this->view('templates/footer');
    }
}
