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
        $accounts = User::paginate(10);
        return view('user-manager.index', [
            'accounts' => $accounts,
        ]);
    }
    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    // đăng nhập tài khoản
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('index')
                ->with('status', 'You have Successfully loggedin');
        }

        return redirect()->route('login')->with([
            'error' => 'Oppes! You have entered invalid credentials'
        ]);
    }

    // đăng ký tài khoản
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required_with:password'
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('login')->with('status', 'Great! You have successfully register');
    }

    // tạo mới tài khoản trong admin
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('account.index')->with('status', 'Great! You have Successfully loggedin');
    }

    public function store()
    {
        return view('user-manager.create');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }
        return redirect()->route('login')->with('Opps! You do not have access');
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
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('user-manager.profile');
    }


    public function edit($id)
    {
        $account = User::findOrFail($id);
        return view('user-manager.edit', [
            'account' => $account,
        ]);
    }
    public function update($id, Request $request)
    {
        $account = User::findOrFail($id);
        $account->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('account.index');
    }
    public function trash($id)
    {
        $account = User::findOrFail($id)->delete();
        return back();
    }
}
