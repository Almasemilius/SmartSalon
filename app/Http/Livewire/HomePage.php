<?php

namespace App\Http\Livewire;

use App\Models\General;
use Livewire\Component;

class HomePage extends Component
{
    public $welcome;
    public function render()
    {
        $this->welcome = General::first();

        return view('livewire.home-page');
    }
}
