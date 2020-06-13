<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
class Cards extends Component
{
    
    public $card = 0;
    public $price = 0.00;
    public $listeners = ['addcard'];

    public function mount()
    {
        $count=\Cart::count();
        $this->card=$count;

    }
    public function empty()
    {
        \Cart::destroy();
        $count=\Cart::count();
        $this->card=$count;

    }
    public function addcard($id)
    {
       
        $product=Product::find($id);
        $cart=\Cart::add($product->id,$product->name, 1,$product->price);

        $count=\Cart::count();
        $this->card=$count;

    }
    public function render()
    {
        return view('livewire.cards');
    }
}
