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
            return redirect()->route('select');
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
