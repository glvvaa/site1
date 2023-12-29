<?php

use App\Servise\Router;
use App\Controllers\Auth;



Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/','home');

Router::post('/auth/register',Auth::class, 'register','true','true');

Router::enable();