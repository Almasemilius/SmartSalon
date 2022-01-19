<?php

namespace App\Http\Livewire\Setting;

use App\Models\Book;
use App\Models\PendingBooking;
use Livewire\Component;

class PendingBook extends Component
{
    public Book $confirmedBooking;
    public function mount()
    {
        $this->confirmedBooking = new Book();
    }
    public function declineBooking(PendingBooking $booking)
    {
        $this->deletePendingRequest($booking);
    }
    public function acceptBooking(PendingBooking $booking)
    {
        $this->confirmedBooking->name = $booking->name;
        $this->confirmedBooking->phone_number = $booking->phone_number;
        $this->confirmedBooking->booking_day = $booking->booking_day;
        $this->confirmedBooking->style_id = $booking->style_id;

        $this->confirmedBooking->save();

        $this->deletePendingRequest($booking);

        
        
        
    }

    public function deletePendingRequest($booking)
    {
        $booking->delete();
        
    }
    public function render()
    {
        $pendingBookings = PendingBooking::all();
       
        return view('livewire.setting.pending-book',compact('pendingBookings'));
    }
}
