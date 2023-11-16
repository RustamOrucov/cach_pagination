<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password'=>'required',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $token = $user->createToken('token-name')->plainTextToken;

        return response(['token'=>$token,'user'=>$user], 201);
    }
}

