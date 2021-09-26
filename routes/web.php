<?php

use App\Http\Livewire\EditHome;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomePage;
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
Route::get('/edit-home',EditHome::class)->name('edit.home');
Route::get('/style-list',StyleList::class)->name('style.list');
