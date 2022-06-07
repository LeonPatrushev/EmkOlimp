<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect(route('admin.index'));
        }
        return view('login');
    }

    public function login(Request $request){
        $formFields = $request->only(['email', 'password']);
        if(Auth::attempt($formFields)){
            return redirect(route('admin.index'));
        }

        return redirect(route('login.index'))->withErrors([
            'email' => 'Не верны почта или пароль'
        ]);
    }
}
