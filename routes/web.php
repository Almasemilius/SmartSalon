<?php

use App\Http\Controllers\TestingController;
use App\Http\Livewire\Booking;
use App\Http\Livewire\ContactsPage;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\Setting\GeneralSetting;
use App\Http\Livewire\Setting\OurServices;
use App\Http\Livewire\Setting\PendingBook;
use App\Http\Livewire\Setting\Feedback;
use App\Http\Livewire\Setting\Styles;
use App\Http\Livewire\StyleList;
use App\Providers\RouteServiceProvider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',HomePage::class)->name('home');
Route::get('/style-list',StyleList::class)->name('style.list');
Route::get('/imageTest',[TestingController::class,'imageTest']);
Route::get('/booking',Booking::class)->name('booking');
Route::get('/contact-us',ContactsPage::class)->name('contact.us');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/edit-styles',Styles::class)->name('edit.styles');
    Route::get('/edit-general',GeneralSetting::class)->name('edit.general');
    Route::get('/edit-services',OurServices::class)->name('edit.services');
    Route::get('/pending-bookings',PendingBook::class)->name('pending.bookings');
    Route::get('/feedback',Feedback::class)->name('feedback');
});
