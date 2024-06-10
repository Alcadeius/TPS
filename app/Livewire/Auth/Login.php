<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $email="";
    public $password="";
    public function login(){
        $validate=$this->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        if(Auth::attempt($validate)){
            $cek=Auth::user()->leveluser;
            if($cek=="developer"){
                return redirect()->route('beranda');
            }
            else if($cek=="admin"){
                return redirect()->route('dashboard');
            }
            else if($cek=="customer"){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('select');
            }
        }
        else{
            return redirect()->route('login')->with('error','Email/Password salah');
        }
    }
    #[Title("Login")]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
