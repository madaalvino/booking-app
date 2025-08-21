<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $bookings = Booking::with('room')->latest()->get();
        return view('home', compact('rooms', 'bookings'));
    }
}

