<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $user_data = $request->validate([
            'email' => ['email', 'min:5', 'max:255', 'required'],
            'password' => ['string', 'min:8', 'max:255', 'required']
        ]);

        $user = User::where('email', $user_data['email'])
            ->first();

        if ($user)
        {
            if (Hash::check($user_data['password'], $user['password']))
            {
                auth()->login($user);
                return redirect()->route('home');
            }
        }

        return redirect()->back()->withErrors([
            'login' => 'E-mail ou senha incorretos.'
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('user.login');
    }
}
