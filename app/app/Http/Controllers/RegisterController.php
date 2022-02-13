<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRegistPost;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('Regist.register');
    }

    public function store(UserRegistPost $request)
    {
        $user = User::Create([
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return view('Regist.complete', compact('user'));
    }
}
