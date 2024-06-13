<?php

namespace App\Livewire\Info;

use App\Models\posts;
use Livewire\Component;

class Transaction extends Component
{
    public $snapToken;
    public $posts;
    public $title;
    public $desc;
    public $price;
    public $id;
    public function mount($id){
        $data=$this->posts=posts::find($id);
        $this->title=$data->title;
        $this->desc=$data->desc;
        $this->price=$data->price;
                  // Set your Merchant Server Key
                  \Midtrans\Config::$serverKey = 'SB-Mid-server-8lok5lroCvl1719CIYyG4OxR';
                  // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                  \Midtrans\Config::$isProduction = false;
                  // Set sanitization on (default)
                  \Midtrans\Config::$isSanitized = true;
                  // Set 3DS transaction for credit card to true
                  \Midtrans\Config::$is3ds = true;
          
                  $params = array(
                      'transaction_details' => array(
                          'order_id' => rand(),
                          'gross_amount' => $data->price,
                      ),
                      'customer_details' => array(
                          'first_name' => $data->user->name,
                          'last_name' => '',
                          'email' => $data->user->email,
                          'phone' => '08111222333',
                      ),
                  );
          
                  $this->snapToken = \Midtrans\Snap::getSnapToken($params);
    }
    public function render()
    {
        return view('livewire.info.transaction');
    }
}
