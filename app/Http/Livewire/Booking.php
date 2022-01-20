<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\PendingBooking;
use App\Models\Style;
use Livewire\Component;

class Booking extends Component
{
    public $bookings = '';
    public $styles;
    public $styleId;
    public $stylePrice;
    public $bookingData;
    public $name;
    public $phoneNumber;
    public PendingBooking $pendingBooking;

    public function mount()
    {
        $this->pendingBooking = new PendingBooking();
    }
    public function getbooking()
    {
        $bookings = Book::select('id', 'style', 'book_time')->get();
        return json_encode($bookings);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function addPendingRequest()
    {
        $newBookingData = str_replace("T", " ", $this->bookingData['dateStr']);
        $newBookingData = substr($newBookingData, 0, 19);
        $this->pendingBooking->booking_day = $newBookingData;
        $this->pendingBooking->style_id = $this->styleId;
        $this->pendingBooking->name = $this->name;
        $this->pendingBooking->phone_number = $this->phoneNumber;
        $this->pendingBooking->save();

        $this->pendingBooking = new PendingBooking();

        // dd($this->pendingBooking);
    }

    public function addbooking($booking)
    {
        $input['style_id'] = $booking['style_id'];
        $input['book_day'] = $booking['book_day'];
        Book::create($input);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function bookingDrop($booking, $oldBooking)
    {
        $bookingdata = Book::find($booking['id']);
        $bookingdata->book_time = $booking['book_time'];
        $bookingdata->save();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {

        if ($this->styleId) {
            $this->stylePrice = Style::find($this->styleId)->price;
        }
        $this->styles = Style::all();

        $bookings = Book::select('id', 'style_id', 'booking_day')->get();
        $bookingInfo = $bookings->map(function ($booking) {

            $booking["title"] = $booking->style_id;
            $booking["start"] = $booking->booking_day;
            $booking["end"] = "2022-01-04T12:30:00";
            return $booking;
        });
        $this->bookings = json_encode($bookingInfo);
        return view('livewire.booking')->layout('layouts.default');
    }
}
