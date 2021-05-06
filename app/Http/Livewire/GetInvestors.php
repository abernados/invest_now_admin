<?php

namespace App\Http\Livewire;

use App\Models\Investor;
use Livewire\Component;

class GetInvestors extends Component
{
    public $investors;

    public function mount()
    {
        $this->investors = $this->getInvestors();
    }

    public function getInvestors()
    {
        return Investor::get();
    }

    public function render()
    {
        return view('kyc-aml-verification')
            ->layout('layouts.guest');
    }
}
