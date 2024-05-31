<?php

namespace App\Models;

class User {
    public $name;
    public $createdAt;

    public function __construct($name, $createdAt)
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
    }
}