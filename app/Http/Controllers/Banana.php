<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Banana extends Controller
{
    public function banana()
    {
        $banana = 'banana';
        return response()->json($banana);
    }

    public function gerarToken(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('auth_token');
            return response()->json(['token' => $token->plainTextToken]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }

}
