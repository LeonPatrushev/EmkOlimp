<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(Request $request){
        $validateFields = $request->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect(route('admin.index'))->withErrors([
                'email' => 'Пользователь с такой почтой уже существует'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            return redirect(route('admin.index'));
        }

        return redirect(route('admin.index'))->withErrors([
            'formError' => 'Ошибка при сохранении пользователя'
        ]);
    }
}
