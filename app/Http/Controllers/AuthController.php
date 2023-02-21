<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('index')
                ->with('You have Successfully loggedin');
        }

        return redirect()->route('account.login')->with('Oppes! You have entered invalid credentials');
    }
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('index')->with('Great! You have Successfully loggedin');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }
        return redirect()->route('account.login')->with('Opps! You do not have access');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('account.login');
    }

    public function profile()
    {
        return view('user-manager.profile');
    }
}
