<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function login() {
        return view('client.user.login');
    }

    public function checkLogin(Request $request) {
        $credentials  = $request->only('email', 'password');
        $remember = !empty($request->only('remember'));

        if(Auth::attempt($credentials, $remember)) {
            return redirect(route('home'));
        }
        
        return back()->withErrors([
            'error' => 'Thông tin đăng nhập không hợp lệ.',
        ]);
    }


    public function register() {

        return view('client.user.register');
    }
    public function postRegister(Request $request) {

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        Auth::login($user);
        return redirect(route('home'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
