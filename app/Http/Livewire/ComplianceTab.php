<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComplianceTab extends Component
{
    public $showRecord = false;
    public $editRecord = false;
    public $showErrorRecord = true;
    public $scoreRating = 5.4;
    public $ifNeedUpdate = true;
    public $lockKYC = false;


    public function render()
    {
        return view('livewire.compliance-tab');
    }

    public function completeKYC()
    {
        $this->scoreRating = 8.3;
        $this->ifNeedUpdate = false;
        $this->editRecord = false;
        $this->showErrorRecord = false;

    }
}
