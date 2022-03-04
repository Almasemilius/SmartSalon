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
    public $stylePrice;
    public $bookingData;
    public PendingBooking $pendingBooking;

    protected $rules = [
        'pendingBooking.name' => 'required',
        'pendingBooking.phone_number' => 'required',
        'pendingBooking.style_id' => 'required',
    ];

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
        $this->pendingBooking->save();
        $this->pendingBooking = new PendingBooking();
        $this->stylePrice = '';

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

        if ($this->pendingBooking->style_id) {
            $this->stylePrice = Style::find($this->pendingBooking->style_id)->price;
        }
        $this->styles = Style::all();

        $bookings = Book::select('id', 'style_id', 'booking_day')->get();
        $bookingInfo = $bookings->map(function ($booking) {

            $booking["title"] = $booking->style->name;
            $booking["start"] = $booking->booking_day;
            $booking["end"] =  date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($booking->booking_day)));;
            return $booking;
        });
        $this->bookings = json_encode($bookingInfo);
        return view('livewire.booking')->layout('layouts.default');
    }
}
