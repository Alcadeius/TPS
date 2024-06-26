<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    
    public function redirect()
    {
        return Socialite::driver('google')->redirect(['prompt' => 'consent']);
    }

    public function callback()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();
        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {
            $newUser = new User([
                'google_id' => $userFromGoogle->getId(),
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                'password' => bcrypt(Str::random(10)),
                'leveluser' => "baru",
            ]);
            $newUser->save();

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect()->route('select');
        }

        // Jika ada user langsung login saja
        auth('web')->login($userFromDatabase);
        session()->regenerate();
        $cek=$userFromDatabase->leveluser;
        if($cek=="developer"){
            return redirect()->route('beranda');
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function logout(Request $request)
    {
        // auth('web')->logout();
        Auth::logout();
        $request->session()->forget('token');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();
    }

}
