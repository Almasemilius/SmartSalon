<?php

namespace App\Http\Livewire\Setting;

use App\Models\Style;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Styles extends Component
{
    use WithFileUploads;
    public Style $style;
    public $styleImage;
    
    protected $rules = [
        'style.name'=> 'required',
        'style.price'=> 'required',
        'style.info'=> 'required',
        // 'style.stylePicture'=> 'nullable',
    ];
    public function mount()
    {
        $this->style = new Style();        
    }
    public function addStyle()
    {
        ini_set('memory_limit','256M'); 
        $this->style->stylePicture = Image::make($this->styleImage)->encode('data-url');
        // dd($img);


        $this->style->save();
        $this->style = new Style();        

    }
    public function render()
    {
        $styles = Style::all();
        return view('livewire.setting.styles',compact('styles'));
    }
}
