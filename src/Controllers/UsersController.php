<?php

namespace App\Controllers;

use App\Models\User;

// Kasutajate CRUD (admin), sama muster nagu PostController
class UsersController
{
    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }
}
