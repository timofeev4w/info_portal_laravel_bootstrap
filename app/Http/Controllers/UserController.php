<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show login page
    public function loginShow() {
        return view('login');
    }

    // Login POST
    public function login()
    {
        $noLogin = 'Неверный логин или пароль!';
        return view('login', [
            'noLogin' => $noLogin
        ]);
    }
}
