<?php

namespace App\Http\Controllers;

use App\Http\Requests\Logar;
use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login () {

        if(Auth::check()) {
            return redirect()->route('home');
        }

        return view('site.login');
    }

    public function logar(Logar $request) {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('notify-error', 'Dados incorretos');
        }
    }

    public function register() {
        
        if(Auth::check()) {
            return redirect()->route('home');
        }

        return view('site.register');
    }

    public function registerUser(Register $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->uf = $request->uf;
        $user->Password = $request->password;

        if($user->save()) {
            return redirect()->route('home')->with('notify-success', 'Usuário cadastrado');
        } else {
            return redirect()->route('login')->with('notify-error', 'falha ao cadastrar usuário');
        }

    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }
}
