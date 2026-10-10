<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required', 
        ]);

        $result = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($result) {
            $user = Auth::user();
            $token = $user->createToken('auth_Token')->plainTextToken;
            return response()->json([   
                'success' => true,
                'token' => $token,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Invalid credentials',
            ], 401);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            // 'role_id' => 'required|exists:roles,id',
            'password' => 'required|min:3|max:15',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 5;
        $user->password = Hash::make($request->password);
        // $user->save()

        if ($user->save()) {

            return response()->json([
                'success' => 'Registration completed successfully',
            ]);
        } else {
            return response()->json([
                'error' => 'Registration failed. Try again later.',
            ], 500);
        }

    }

    public function logout()
    {
        return response()->json('Logout works');
    }
}
