<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required|integer',
        ]);

        Room::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil ditambahkan');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required|integer',
        ]);

        $room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil diperbarui');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil dihapus');
    }
}

