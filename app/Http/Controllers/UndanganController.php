<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Ucapan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index(Guest $guest)
    {
        return view('frontpage.home', [
            'guest' => $guest->nama
        ]);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
