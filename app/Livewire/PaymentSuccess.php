<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentSuccess extends Component
{
    public function render()
    {
        $carts = \App\Models\Cart::with('product')->get();
        $total = $carts->sum(function($cart) {
            return $cart->qty * $cart->product->price;
        });
        return view('livewire.payment-success',[
            'total' => $total
        ]);
    }

    public function payment()
    {
        \App\Models\Cart::truncate();
        redirect()->route('home');
    }
}
