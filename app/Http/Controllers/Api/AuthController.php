<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * POST /api/login
     * body: { "email": "...", "password": "..." }
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Credenciales inválidas.',
            ], 401);
        }

        /** @var \App\Models\User $user */
        $user = $request->user();

        // Opcional: limpiar tokens anteriores
        $user->tokens()->delete();

        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json([
            'message' => 'Login correcto.',
            'token'   => $token,
            'user'    => $user,
        ]);
    }

    /**
     * POST /api/logout
     * Header: Authorization: Bearer {token}
     */
    public function logout(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout correcto.',
        ]);
    }

    /**
     * GET /api/user
     * Devuelve el usuario autenticado.
     */
    public function me(Request $request)
    {
        return response()->json([
            'user' => $request->user(),
        ]);
    }
}
