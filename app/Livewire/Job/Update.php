<?php

namespace App\Livewire\Job;

use App\Models\posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Update extends Component
{
    public $posts;
    public $title;
    public $desc;
    public $price;
    public $id;

    public function mount($id){
        $hasil=$this->posts=posts::find($id);
        $this->title=$hasil->title;
        $this->desc=$hasil->desc;
        $this->price=$hasil->price;
        $this->id=$hasil->id;
    }
    public function update(){
        $validate=$this->validate([
            'title'=>'required|min:5',
            'desc'=>'required|min:8',
            'price'=>'required',
            'id'=>'required',
        ]);
        $post = posts::find($this->id);
        $post->update([
            'title'=>$validate['title'],
            'desc'=>$validate['desc'],
            'price'=>$validate['price'],
        ]);
        return redirect()->route('data');
    }
    #[Title("Update Post")]
    public function render()
    {
        return view('livewire.job.update');
    }
}
