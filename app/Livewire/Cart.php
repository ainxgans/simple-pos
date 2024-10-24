<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        $carts = \App\Models\Cart::with('product')->get();
        $total = $carts->sum(function($cart) {
            return $cart->qty * $cart->product->price;
        });

        return view('livewire.cart', [
            'carts' => $carts,
            'total' => $total
        ]);
    }
    public function deleteFromCart($id)
    {
        \App\Models\Cart::find($id)->delete();
    }

    public function addQty($id)
    {
        $get = \App\Models\Cart::find($id)->first();
        $get->qty ++;
        $get->save();
        $this->render();
    }

    public function reduceQty($id)
    {
        $get = \App\Models\Cart::find($id)->first();
        if ($get['qty'] == 1) {
            $get->delete();
        } else {
            $get->qty--;
            $get->save();
        }
        $this->render();
        }
    public function calculateTotalPrice()
    {
        return $this->carts->sum(function($cart) {
            return $cart->qty * $cart->product->price;
        });
    }
}
