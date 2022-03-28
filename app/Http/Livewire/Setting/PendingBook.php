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
        $toTime = date('Y-m-d H:i:s', strtotime('+3 hour', strtotime($booking->booking_day)));
        $bookings = Book::whereBetween('booking_day', array($booking->booking_day, $toTime))->get();
        if ($bookings->isEmpty()) {
            $this->confirmedBooking->name = $booking->name;
            $this->confirmedBooking->phone_number = $booking->phone_number;
            $this->confirmedBooking->booking_day = $booking->booking_day;
            $this->confirmedBooking->style_id = $booking->style_id;

            $this->confirmedBooking->save();

            $this->deletePendingRequest($booking);
        } else {
            $this->emit('slotBooked');
        }
        dd($bookings);
    }

    public function deletePendingRequest(PendingBooking $booking)
    {
        $booking->delete();
    }
    public function render()
    {
        $pendingBookings = PendingBooking::latest()->paginate(10);

        return view('livewire.setting.pending-book', compact('pendingBookings'));
    }
}
