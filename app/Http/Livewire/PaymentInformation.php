<?php

namespace App\Http\Livewire;

use App\Models\Investor;
use Livewire\Component;

class PaymentInformation extends Component
{
    public $investors, $invesment_count, $investment_payments;

    public function mount()
    {
        $this->investors = $this->getInvestors();

        $this->invesment_count = $this->getPaymentsCleared();

        $this->investment_payments = $this->getTotalPayments();
    }

    public function getInvestors()
    {
        return Investor::get();
    }

    public function getPaymentsCleared()
    {
        return $this->investors->map->investmentValues->count();
    }

    public function getTotalPayments()
    {
        return $this->investors->map->investmentValues->sum('amount');
    }

    public function render()
    {
        return view('payment-information')->layout('layouts.default');
    }
}
