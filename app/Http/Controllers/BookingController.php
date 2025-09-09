<?php
namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // tampil semua booking
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $bookings = Booking::with('room')->get();
        } else {
            // Bug fix: gunakan user_id bukan id untuk filtering
            $bookings = Booking::with('room')->where('user_id', Auth::id())->get();
        }
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
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'booking_date' => 'required|date',
            'room_id' => 'required|exists:rooms,id',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'booking_date' => $request->booking_date,
            'room_id' => $request->room_id,
            'status' => $request->status,
            'user_id' => auth()->id(),
        ];

        $booking = Booking::create($data);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil ditambahkan.');
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

    /**
     * Update booking status (PATCH method for status only)
     */
    public function updateStatus(Request $request, $id)
    {
        // Validate admin role
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('bookings.index')
                ->with('error', 'Anda tidak memiliki akses untuk mengubah status booking.');
        }

        // Validate the request
        $request->validate([
            'status' => 'required|in:pending,confirmed,canceled'
        ]);

        try {
            // Find the booking
            $booking = Booking::findOrFail($id);

            // Store old status for success message
            $oldStatus = $booking->status;

            // Update the status
            $booking->status = $request->status;
            $booking->save();

            // Create success message based on status change
            $statusMessages = [
                'pending' => 'Booking telah diubah menjadi Pending',
                'confirmed' => 'Booking telah dikonfirmasi',
                'canceled' => 'Booking telah dibatalkan'
            ];

            return redirect()->route('bookings.index')
                ->with('success', $statusMessages[$request->status]);

        } catch (\Exception $e) {
            return redirect()->route('bookings.index')
                ->with('error', 'Terjadi kesalahan saat mengupdate status booking: ' . $e->getMessage());
        }
    }

    // hapus booking
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success', 'Booking berhasil dihapus!');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }
}
