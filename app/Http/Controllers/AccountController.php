<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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


    public function postLoginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('page.index')->with('message', 'You have Successfully loggedin');
        }

        return redirect()->route('authen.login')->with([
            'error' => 'Oppes! You have entered invalid credentials'
        ]);
    }


    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('authen.login')->with('message', 'Great! You have Successfully loggedin');
    }

    public function manager()
    {
        $orders = Order::whereUserId(Auth::id())->withCount('items')->paginate(15);
        $user = Auth::user()->name;
        // dd($user);
        return view("client.auth.account-manager", [
            'orders' => $orders,
            'user' => $user,
        ]);
    }

    public function authLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('authen.login');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
