<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\BannerHome;
class Bannerhomes extends Component
{
    public function render()
    {
        return view('livewire.bannerhomes',[
            'bannerhome'=>BannerHome::all()
        ]);
    }
}
