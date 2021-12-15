<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Booking extends Component
{
    public $bookings = '';
    public function getbooking()
    {
    $bookings = Book::select('id','style','book_time')->get();
    return json_encode($bookings);
    }
    /**
    * Write code on Method
    *
    * @return response()
    */
    public function addbooking($booking)
    {
    $input['style'] = $booking['style'];
    $input['book_time'] = $booking['book_time'];
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
    $bookings = Book::select('id','style','book_time')->get();
    $this->bookings = json_encode($bookings);
        return view('livewire.booking');
    }
}
