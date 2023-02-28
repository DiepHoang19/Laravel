<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login()
    {
        return view("client.auth.login");
    }
    public function register()
    {
        return view("client.auth.register");
    }
    public function manager()
    {
        return view("client.auth.account-manager");
    }
}
