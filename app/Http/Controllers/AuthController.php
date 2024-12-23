<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('template2.login');
    }

    public function login(Request $request)
    {
        // Validation des champs
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|min:6',
        ]);

        // Recherche de l'utilisateur dans la base de données
        $user = User::where('name', $request->name)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['name' => 'Les informations de connexion sont incorrectes.']);
        }

        // Authentification de l'utilisateur
        Auth::login($user);

        // Redirection en fonction du rôle
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'agent') {
            return redirect()->route('agent.dashboard');
        } else {
            return redirect()->route('client.dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}