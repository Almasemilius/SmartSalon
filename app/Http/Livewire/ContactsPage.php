<?php

namespace App\Http\Livewire;

use App\Models\Feedback;
use App\Models\General;
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
        $contacts = General::first();
        return view('livewire.contacts-page',compact('contacts'))->layout('layouts.default');
    }
}
