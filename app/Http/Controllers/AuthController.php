<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Inicio de sesión y creación de token
     */
    public function login(Request $request)
    {

        $request->validate([
            'document' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = request(['document', 'password']);


        if( auth()->attempt($credentials) ){
            $usery = Auth::user();
            $user = Auth::user();
            $tokenResult = $user->createToken('Personal Access Token');

            return response()->json([
                'access_token' => $tokenResult->plainTextToken,
                'token_type' => 'Bearer'
            ]);
        } else {
            /**Return error message
            */
            return response()->json(['error'=>'No autorizado'], 401);
        }

    }

    /**
     * Cierre de sesión (anular el token)
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Sesion cerrada'
        ]);
    }

}
