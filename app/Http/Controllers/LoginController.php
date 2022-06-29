<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $atributes = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($atributes)){
            return redirect('/home')->with('success','Anda telah berhasil login');
        } 

        throw ValidationException::withMessages([
            'email' => 'Pastikan akun yang anda gunakan benar!!'
        ]);
    }    
}
