<?php

namespace Controllers;

use Core\Http\Request;
use Models\User;

class SessionController
{
    public function create() {
        view('session/create', [
            'page_title' => 'Login',
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email);
        if ($user && password_verify($password, $user->password)) {
            $user->login();
            redirect('/');
            exit();
        }
        $request->error('password', 'Invalid username or password');
    }

    public function destroy() {
        $user = User::where('email', $_SESSION['user']);
        $user->logout();
        redirect('/');
    }
}