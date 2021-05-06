<?php

namespace App\Http\Livewire;

use App\Models\Investor;
use Livewire\Component;

class GetInvestors extends Component
{
    public $investors, $investors_count;

    public function mount()
    {
        $this->investors = $this->getInvestors();
        $this->investors_count = $this->getInvestorsCount();
    }

    public function getInvestors()
    {
        return Investor::get();
    }

    public function getInvestorsCount()
    {
        return Investor::get()->count();
    }

    public function render()
    {
        return view('kyc-aml-verification')->layout('layouts.default');
    }
}
