<?php

namespace App\Http\Livewire\Setting;

use App\Models\Style;
use Livewire\Component;
use Livewire\WithFileUploads;

class Styles extends Component
{
    use WithFileUploads;
    public Style $style;
    public $mediaComponentNames = ['style.image'];
    protected $rules = [
        'style.name'=> 'required',
        'style.price'=> 'required',
        'style.info'=> 'required',
        'style.image'=> 'nullable|image',
    ];
    public function mount()
    {
        $this->style = new Style();        
    }
    public function addStyle()
    {
        $this->validate();
        $this->style->save();
        $this->style = new Style();        


        // dd('Hit');
    }
    public function render()
    {
        $styles = Style::all();
        return view('livewire.setting.styles',compact('styles'));
    }
}
