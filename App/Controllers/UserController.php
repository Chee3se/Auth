<?php

namespace Controllers;

use Core\Http\Request;
use Models\User;

class UserController
{
    public function create() {
        view('user/create', [
            'page_title' => 'Register',
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        $user = new User();
        $user->email = $request->input('email');
        $user->password = password_hash($request->input('password'), PASSWORD_BCRYPT);
        $user->save();
        redirect('/login');
    }
}