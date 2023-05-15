<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }
    public function form()
    {
        return view('Form');
    }
}
