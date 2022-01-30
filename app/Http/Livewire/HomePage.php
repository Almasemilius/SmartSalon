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
        $general = General::first();
        return view('livewire.home-page',compact('styles','general'))->layout('layouts.default');
    }
}
