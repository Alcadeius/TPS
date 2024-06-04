<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    public $name="";
    public $email="";
    public $password="";
    public function register(){
        $validate=$this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);
        User::create([
            'name'=>$validate['name'],
            'email'=>$validate['email'],
            'password'=>$validate['password'],
        ]);
        return redirect()->route('login');
    }
    #[Title("Register")]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
