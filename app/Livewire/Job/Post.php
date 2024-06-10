<?php

namespace App\Livewire\Job;

use App\Models\posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Post extends Component
{
    public $title="";
    public $desc="";
    public $price="";
    public function posting(){
        
        $validate=$this->validate([
            'title'=>'required|min:5',
            'desc'=>'required|min:8',
            'price'=>'required',
        ]);
        posts::create([
            'title'=>$validate['title'],
            'desc'=>$validate['desc'],
            'price'=>$validate['price'],
            'user_id'=>Auth::user()->id,
        ]);
        
        return redirect()->route('dashboard');
    }
    #[Title("Make Post")]
    public function render()
    {
        return view('livewire.job.post');
    }
}
