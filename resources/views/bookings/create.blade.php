@extends('layout.app')

@section('content')
<div class="max-w-lg mx-auto bg-white/90 shadow-2xl p-8 rounded-2xl animate-fade-in-up mt-10">
    <h2 class="text-2xl font-bold text-blue-800 mb-6">Tambah Booking</h2>

    @if ($errors->any())
        <div class="mb-4 animate-fade-in-down">
            <div class="px-4 py-3 rounded-lg bg-red-100 text-red-800 font-semibold shadow">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label class="block font-medium">Nama</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-300">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-300">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Tanggal Booking</label>
        <input type="date" name="booking_date" value="{{ old('booking_date') }}" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-300">
    </div>
    <div class="mb-4">
        <label class="block font-medium">Ruangan</label>
        <select name="room_id" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-300">
            <option value="">-- Pilih Ruangan --</option>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}" {{ old('room_id') == $room->id ? 'selected' : '' }}>{{ $room->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Status</label>
        <select name="status" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-300">
            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="canceled" {{ old('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
    </div>
    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Simpan</button>
    <a href="{{ route('bookings.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
</form>
</div>
@endsection
