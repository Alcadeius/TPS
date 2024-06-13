<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handleMidtransWebhook($id)
    {
        // Proses notifikasi dari Midtrans
        $hasil = posts::find($id);
        $hasil->status= "Already Paid";
        $hasil->save();
        // $orderId = $notification['transaction_id']; // Misalnya, jika ID transaksi adalah yang diharapkan
        
        // Lakukan pembaruan status pembayaran di database
        // $pembayaran = posts::find($notification[$orderId]);
        // $pembayaran->status = 'Already Paid';
        // $pembayaran->save();

        // Kirimkan informasi terkait pembayaran ke komponen Livewire
        // event(new PaymentSuccessEvent($notification));

        // return response()->json(['status' => 'OK']);
        return redirect()->route("status");
    }
}
