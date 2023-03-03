<?php

namespace App\Http\Controllers;

use App\Mail\SendVerifyCode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $accounts = User::paginate($request->limit);
        return view('admin.user-manager.index', [
            'accounts' => $accounts,
        ]);
    }
    public function login()
    {
        return view('admin.auth.login');
    }

    public function registration()
    {
        return view('admin.auth.registration');
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
        $verifyCode = Str::random(255);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verify_code' => $verifyCode,
            'send_verify_at' => Carbon::now(),
        ]);
        Mail::to($user->email)->send(new SendVerifyCode($user));
        return redirect()->route('login')->with([
            'status', 'Great! You have successfully register',
            'verify_alert' => 'Please check your email to verify account !'
        ]);
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
        return view('admin.user-manager.create');
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
        return view('admin.user-manager.profile');
    }


    public function edit($id)
    {
        $account = User::findOrFail($id);
        return view('admin.user-manager.edit', [
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

    public function verifyAccount(Request $request)
    {
        $verifyCode = $request->verifyCode;
        $user = User::where('verify_code', $verifyCode)->firstOrFail();
        $minutes = Carbon::now()->diffInMinutes($user->send_verify_at);
        if ($minutes > 1) {
            return redirect()->route('login')->with([
                'error' => 'Invalid verify code'
            ]);
        }
        $user->update([
            'email_verified_at' => Carbon::now(),
        ]);
        return redirect()->route('login')->with([
            'status' => 'Verify account succcesfully !'
        ]);
    }
}
