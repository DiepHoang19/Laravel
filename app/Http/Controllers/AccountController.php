<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $orders = Order::whereUserId(Auth::id())->withCount('items')->paginate(15);
        return view("client.auth.account-manager", [
            'orders' => $orders
        ]);
    }

}
