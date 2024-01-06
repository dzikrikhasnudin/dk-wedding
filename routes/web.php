<?php

use App\Http\Controllers\UndanganController;
use App\Livewire\BukuTamu;
use App\Livewire\GuestList;
use App\Livewire\UndanganApp;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', GuestList::class)->name('dashboard');
    Route::get('/buku-tamu', BukuTamu::class)->name('buku-tamu');
});

Route::get('to-{guest}', [UndanganController::class, 'index'])->name('invite-link');
