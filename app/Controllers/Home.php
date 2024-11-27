<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        var_dump("Hallo");
        return view('welcome_message');
    }
}
