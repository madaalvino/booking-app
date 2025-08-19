<?php
namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // tampil semua booking
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    // form tambah booking
    public function create()
    {
        $rooms = Room::all(); // ambil semua ruangan
        return view('bookings.create', compact('rooms'));
    }

    // simpan booking baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'booking_date' => 'required|date',
            'room_id' => 'required|exists:rooms,id', // validasi room
            'status' => 'required|in:pending,confirmed,canceled', // validasi status
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking berhasil dibuat!');
    }

    // form edit booking
    public function edit(Booking $booking)
    {
        $rooms = Room::all(); // ambil semua ruangan
        return view('bookings.edit', compact('booking', 'rooms'));
    }

    // update booking
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'booking_date' => 'required|date',
            'room_id' => 'required|exists:rooms,id',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking berhasil diperbarui!');
    }

    // hapus booking
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success', 'Booking berhasil dihapus!');
    }
}
