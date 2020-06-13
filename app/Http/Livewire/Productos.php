<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Productos extends Component
{
   
  
    public function render()
    {
        return view('livewire.productos',['products'=>Product::where('new','=','si')->latest()->take(4)->get()]);
    }
}
