<?php

namespace App\Http\Livewire;

use App\Models\Feedback;
use Livewire\Component;

class ContactsPage extends Component
{
    public Feedback $feedback;
    protected $rules = [
        'feedback.user_name' => 'required',
        'feedback.phone_number' => 'required',
        'feedback.message' => 'required'
    ];
    public function mount()
    {
        $this->feedback = new Feedback();
    }
    public function addFeedback()
    {
        $this->validate();
        $this->feedback->save();
        $this->feedback = new Feedback();
    }
    public function render()
    {
        return view('livewire.contacts-page')->layout('layouts.default');
    }
}
