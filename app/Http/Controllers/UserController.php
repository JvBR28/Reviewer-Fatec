<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createPage()
    {
        return view('user.create');
    }

    public function create(Request $request)
    {
        $new_user = $request->validate([
            'name' => ['string', 'min:5', 'max:255', 'required'],
            'email' => ['email', 'min:5', 'max:255', 'unique:users', 'required'],
            'picture' => ['url', 'min:5', 'max:255', 'required'],
            'password' => ['string', 'min:8', 'max:255', 'required']
        ]);

        $new_user['password'] = Hash::make($new_user['password']);
        User::create($new_user);

        return redirect()->route('user.login');
    }
}
