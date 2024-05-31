<?php

namespace App\Controllers;

use App\Models\Journal;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            new Journal("John Doe - Badon FW (MVC)", 2024),
        ];
        $this->render("index", $data);
    }
}


