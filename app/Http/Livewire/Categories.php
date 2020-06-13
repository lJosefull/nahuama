<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Category;
use App\Sub_Category;

class Categories extends Component
{

    
   
    public function render()
    {
        return view('livewire.categories',[
            'categories'=> Category::all()
        ]);
    }
}
