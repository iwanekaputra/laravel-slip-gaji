<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    public function login(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password])) {
            return redirect()->route('admin.slip-gaji');
        } else {
            FacadesSession::flash('error', 'Email atau Password Salah');
            return redirect()->route('login');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
