<?php

namespace App\Livewire\Info;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class User extends Component
{
    public $leveluser="";

    public function customer($id){
        $data=ModelsUser::find($id);
        $data->update([
            'leveluser' => "customer",
        ]);
        $data->save();
        return redirect()->route('dashboard');
    }
    public function developer($id){
        $data=ModelsUser::find($id);
        $data->update([
             'leveluser' => "developer",
        ]);
        $data->save();
        return redirect()->route('beranda');
    }
    #[Title("Select")]
    public function render()
    {
        return view('livewire.info.user');
    }
}
