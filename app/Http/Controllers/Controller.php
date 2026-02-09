<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function welcome()
    {
        view('welcome');
    }

    public function index()
    {
        view('index');
    }
}
