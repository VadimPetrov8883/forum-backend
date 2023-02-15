<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use App\Http\Resources\AuthenticationResource;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login (AuthenticationRequest $request) {
        if (Auth::attempt([
            'name' => $request->user_name,
            'password' => $request->password
        ])) {
            return new AuthenticationResource(Auth::user());
        } else {
            return response()->json([
                'message' => 'Введенные данные не верны'
            ], 401);
        }
    }
}
