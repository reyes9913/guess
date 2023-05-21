<?php

namespace App\Http\Controllers;

use App\Models\GuesaUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginController extends Controller
{

    public function prueba()
    {

        return view('technical.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $guesaUser = GuesaUser::where('id', $user->id)->first();
            $guesaUser->on_line = 1;
            $guesaUser->save();

            if ($user->role == 'super_admin') {
                return redirect()->route('administrators.index');
            } elseif ($user->role == 'admin') {
                return redirect()->route('administrators.index');
            } elseif ($user->role == 'technical') {
                return redirect()->route('technical.index');
            }
        } else {

            return redirect()->route('welcome')
                ->withErrors([
                    'email' => 'Las credenciales proporcionadas no son válidas.',
                ]);
        }
    }

    public function showLogin()
    {

        return view('welcome');
    }

    public function logout(Request $request)
    {

        $user = Auth::user();
        // Actualizar el valor de 'on_line' a 0
        $guesaUser = GuesaUser::where('id', $user->id)->first();
        $guesaUser->on_line = 0;
        $guesaUser->save();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('welcome');
    }
}
