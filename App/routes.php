<?php

// Controllers

use Controllers\HomeController;
use Controllers\SessionController;
use Controllers\UserController;

// Routes

// Home
$router->get('/', [HomeController::class, 'index']);

// Login
$router->get('/login', [SessionController::class, 'create']);
$router->post('/login', [SessionController::class, 'store']);
$router->get('/logout', [SessionController::class, 'destroy']);

// Register
$router->get('/register', [UserController::class, 'create']);
$router->post('/register', [UserController::class, 'store']);