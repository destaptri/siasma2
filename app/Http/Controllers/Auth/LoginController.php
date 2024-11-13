<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Import Request
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;  // Pastikan trait ini terimpor

class LoginController extends Controller
{
    use AuthenticatesUsers, HasRoles;  // Trait HasRoles sudah digunakan

    /**
     * Where to redirect users after login.
     *
     *@return string
     */
    // protected function attemptLogin(Request $request)
    // {
    //     $login = $request->input('login'); // Nama input form harus 'login'
    //     $password = $request->input('password');

    //     // Tentukan apakah menggunakan 'nisn' atau 'nip'
    //     $fieldType = (is_numeric($login) && strlen($login) == 10) ? 'nisn' : 'nip';

    //     // Attempt login dengan field yang sesuai
    //     return Auth::attempt([$fieldType => $login, 'password' => $password]);
    // }

     protected function redirectTo()
    {
        $user = Auth::user();

        if ($user->hasRole('Kepala Sekolah')) {
            return '/home';
        }

        if ($user->hasRole('Admin')) {
            return '/homepage';
        }

        if ($user->hasRole('Alumni')) {
            return '/beranda';
        }

        return '/default';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
