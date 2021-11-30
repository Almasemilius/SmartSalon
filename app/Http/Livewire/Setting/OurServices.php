<?php

namespace App\Http\Livewire\Setting;

use App\Models\Service;
use Livewire\Component;

class OurServices extends Component
{
    public $service;
    protected $rules = [
        'service.name' => 'required',
        'service.info' => 'required',
        'service.price' => 'required',
        'service.image' => 'nullable',
    ];
    public function mount()
    {
        $this->service = new Service();
    }

    public function addService()
    {
        $this->validate();
        $this->service->save();
        $this->service = new Service();
        // dd('Hit');
    }


    public function render()
    {
        $services = Service::all();
        return view('livewire.setting.our-services',compact('services'));
    }
}
