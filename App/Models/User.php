<?php

namespace Models;

use Core\Database\Model;

class User extends Model
{
    static $table = 'users';

    protected array $fillable = ['email', 'password'];

    public $email;
    public $password;

    public function login(): void {
        $_SESSION['user'] = $this->email;
        session_regenerate_id(true);
    }

    public function logout() {
        unset($_SESSION['user']);
        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
}