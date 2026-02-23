<?php
// app/controllers/HomeController.php

class HomeController extends Controller
{
    public function index()
    {
        // Load and render the "home.php" view
        $this->view('home');
       
    }

    public function sample()
    {
        // Load and render the "sample.php" view
        $this->view('sample');  
    }
}

?>