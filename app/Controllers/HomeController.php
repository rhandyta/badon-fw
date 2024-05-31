<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            new User("John Doe - Badon FW (MVC)", date('Y')),
        ];
        $this->render("index", $data);
    }
}


