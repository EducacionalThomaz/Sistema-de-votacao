<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() 
    {
        return view('./auth/login');
    }

    public function auth(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('enquetes.index');
        }
 
        return back()->withErrors('Email ou senha incorretos');

    }

    public function cadastro() {

        return view('auth.cadastro');

    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'É necessário fornecer um nome de usuário',
            'email.required' => 'É necessário fornecer um email de usuário',
            'password.required' => 'É necessário fornecer uma senha de usuário'
        ]);

        $dados = $request->all();
        $dados['password'] = Hash::make($request->password);

        User::create($dados);

        return view('auth.login');
        
    }

    public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
        
    }

}
