<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DefaultLayout extends Component
{
    public function render()
    {
        $showInfo = false;

        if (basename(url()->current()) === 'home') $showInfo = true;

        return view('layouts.default', ['showInfo' => $showInfo]);
    }
}
