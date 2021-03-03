<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowInvestor extends Component
{
    public $tab = 1;

    public function render()
    {
        return view('livewire.show-investor');
    }


}
