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

    public function view()
    {
        $user = User::find($_GET['id']);
        view('users/view', compact('user'));
    }

    public function create()
    {
        view('users/create');
    }

    public function store()
    {
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        // parooli ei salvestata kunagi selgelt, ainult hash
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        redirect('/admin/users');
    }
}
