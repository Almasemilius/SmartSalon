<?php

namespace App\Http\Livewire\Setting;

use App\Models\General;
use Livewire\Component;

class GeneralSetting extends Component
{
    public General $general;
    protected $rules = [
        'general.name' => 'required',
        'general.message' => 'required',
    ];
    public function mount()
    {
        $this->general = new General;
        
    }
    public function saveGeneralSetting()
    {
        $this->general->update();
        return route('edit.general');
        
    }
    public function render()
    {
        // dd($this->general->name);
        $this->general = General::first();
        // dd($this->general);
        return view('livewire.setting.general-setting');
    }
}
