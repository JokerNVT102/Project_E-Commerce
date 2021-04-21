<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        if ($product->qty === 1) {
            $qty = $product->qty;
            Cart::update($rowId,$qty);
        }
        else{
            Cart::update($rowId,$qty);
        }
    }
    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed');
    }
    public function destroyAll(){
        Cart::destroy();
        session()->flash('success_message','All item has been removed');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}