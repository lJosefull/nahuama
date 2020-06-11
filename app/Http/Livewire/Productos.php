<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
use Cart;
class Productos extends Component
{
   
    public $card = 0;
    public $price = 0.00;

    public function mount()
    {
        $this->card = Cart::count();
    }

    public function addcard($id)
    {
        $product=Product::find($id);
        $cartItem = Cart::add($product->id, $product->name, $product->price,1);
        $this->card = Cart::count();

    }

    public function render()
    {
        $this->card = Cart::count();
        return view('livewire.productos',['products'=>Product::where('new','=','si')->latest()->take(4)->get()]);
    }
}
