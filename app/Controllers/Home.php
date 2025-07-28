<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function murepo() 
    {
        return view('mure');
    }
    public function myhome()
    {
        return view('home');
    }
    public function jerry()
    {
        return view('jerry');
    }
}
