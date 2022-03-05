<?php

namespace App\Http\Livewire\Setting;

use App\Models\Feedback as ModelsFeedback;
use Livewire\Component;

class Feedback extends Component
{
    public function render()
    {
        $feedbacks = ModelsFeedback::latest()->paginate(5);
        return view('livewire.setting.feedback',compact('feedbacks'));
    }
}
