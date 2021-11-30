<?php

use App\Http\Livewire\EditHome;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\Setting\GeneralSetting;
use App\Http\Livewire\Setting\OurServices;
use App\Http\Livewire\Setting\Styles;
use App\Http\Livewire\StyleList;

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
Route::get('/edit-styles',Styles::class)->name('edit.styles');
Route::get('/edit-general',GeneralSetting::class)->name('edit.general');
Route::get('/edit-services',OurServices::class)->name('edit.services');
Route::get('/style-list',StyleList::class)->name('style.list');
