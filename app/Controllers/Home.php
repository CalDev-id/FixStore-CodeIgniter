<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }
    public function pesan()
    {
        return view('Pesan');
    }
    public function faq()
    {
        return view('Faq');
    }
    public function admin()
    {
        return view('admin');
    }
    public function adminForm()
    {
        return view('forms');
    }
    public function adminLogin()
    {
        return view('login');
    }
    public function adminProfile()
    {
        return view('Profile');
    }
    public function adminTables()
    {
        return view('tables');
    }
}
