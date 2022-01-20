<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\Style;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $styles = Style::all();
        return view('livewire.home-page',compact('styles'))->layout('layouts.default');
    }
}
