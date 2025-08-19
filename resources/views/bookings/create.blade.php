@extends('layout.app')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow p-6 rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Tambah Booking</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
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
            <input type="datetime-local" name="booking_date" value="{{ old('booking_date') }}" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-medium">Pilih Ruangan</label>
            <select name="room_id" class="w-full border-gray-300 rounded p-2">
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }} (kapasitas {{ $room->capacity }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Status</label>
            <select name="status" class="w-full border-gray-300 rounded p-2">
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('bookings.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
    </form>
</div>
@endsection
