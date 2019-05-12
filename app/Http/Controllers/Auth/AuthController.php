<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\JWTAuth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * @var JWTAuth
     */
    private $jwtAuth;

    public function __construct(User $user, JWTAuth $jwtAuth)
    {
        $this->jwtAuth = $jwtAuth;
        $this->user = $user;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = $this->jwtAuth->attempt($credentials)) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }

        // $id = $this->jwtAuth->authenticate($token)->id;
        // // $user = $this->user->with('data')->find($id);
        // $user = $this->user->find($id);

        return response()->json(compact('token'));
    }

    public function refresh()
    {
        try {
            $token = $this->jwtAuth->getToken();
            $token = $this->jwtAuth->refresh($token);
    
            return response()->json(compact('token'));
        } catch (\Throwable $th) {
            return response()->json(['error' => 'user_not_found'], 401);
        }
    }

    public function me()
    {
        if (!$user = $this->jwtAuth->parseToken()->authenticate()) {
            return response()->json(['error' => 'user_not_found'], 401);
        }

        return response()->json(compact('user'));
    }
}
