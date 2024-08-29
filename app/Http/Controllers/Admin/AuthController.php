<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        if (Auth::check())
            return redirect()->intended('admins');
        return view('admin.login');
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'passWord' => 'required'
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'passWord.required' => 'Mật khẩu không được để trống'
        ]);
        $email = $request->email;
        $password = $request->passWord;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('admins');
        } else {
            return back()->with('fail', 'Email hoặc mật khẩu không chính xác!');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('adminLogin');
    }
}
