<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $bookings = Booking::with('room')->latest()->get();
    return view('home', compact('bookings'));
}

}

