<?php


namespace App\Http\Livewire;

use App\Models\Investor;
use Livewire\Component;

class Dashboard extends Component
{
    public $investor_count, $total_invesments, $investors, $average_investments;

    public function __construct()
    {
        $this->investors = Investor::get();
    }

    public function mount()
    {
        $this->investor_count = $this->getIvestorCount();
        $this->total_invesments = $this->getTotalInvesments();
        $this->average_investments = $this->getAverageInvesments();
    }

    public function getIvestorCount()
    {
        return $this->investors->count();
    }

    public function getTotalInvesments()
    {
        return $this->investors->map->investmentValues->sum('amount');
    }

    public function getAverageInvesments()
    {
        if($this->investors->map->investmentValues->count() > 0){
            return $this->investors->map->investmentValues->sum('amount') / $this->investors->map->investmentValues->count();
        }

        return 0;
    }

    public function render()
    {
        return view('index')->layout('layouts.default');
    }
}
