<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email'     =>  ['required', 'email'],
            'password'     =>  ['required',],
        ]);

        $user = User::where($request->only('email'))->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'message'       =>  'Invalid Credentials'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken('api')->plainTextToken;

        return response([
            'user'  =>  $user,
            'token' =>  $token,
        ], Response::HTTP_OK);
    }
}
