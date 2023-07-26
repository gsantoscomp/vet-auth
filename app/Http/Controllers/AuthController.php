<?php

namespace App\Http\Controllers;

use Gsantoscomp\SharedVetDb\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $authenticatedUser = auth()->user();
        $userPermissions = Permission::select('name')
                            ->where('user_type_id', $authenticatedUser->user_type_id)
                            ->get()
                            ->pluck('name');
        
        Cache::put(
            'permissions_' . $authenticatedUser->id,
            $userPermissions,
            auth()->factory()->getTTL() * 60
        );

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        Cache::forget('permissions_' . auth()->user()->id);
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        $authenticatedUser = auth()->user();
        $permissions = Permission::select('name')
                        ->where('user_type_id', $authenticatedUser->user_type_id)
                        ->get()
                        ->pluck('name');

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => $authenticatedUser,
            'permissions' => $permissions
        ]);
    }
}
