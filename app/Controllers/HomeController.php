<?php

namespace App\Controllers;

use App\Models\Journal;

class HomeController extends Controller
{
    public function index()
    {
        $journals = [
            new Journal("First Book", 2003),
            new Journal("Second Book", 2004),
            new Journal("Third Book", 2005),
        ];
        $this->render("index", $journals);
    }
}


