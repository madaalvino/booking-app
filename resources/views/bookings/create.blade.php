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

    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block font-semibold text-gray-700 mb-1">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
        </div>

        <div>
            <label class="block font-semibold text-gray-700 mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
        </div>

        <div>
            <label class="block font-semibold text-gray-700 mb-1">Tanggal Booking</label>
            <input type="datetime-local" name="booking_date" value="{{ old('booking_date') }}"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
        </div>

        <div>
            <label class="block font-semibold text-gray-700 mb-1">Pilih Ruangan</label>
            <select name="room_id"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }} (kapasitas {{ $room->capacity }})</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-semibold text-gray-700 mb-1">Status</label>
            <select name="status"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div>

        <div class="flex gap-3">
            <button type="submit"
                class="flex-1 py-2 rounded-lg bg-gradient-to-r from-green-500 to-cyan-600 text-white font-bold shadow hover:from-cyan-600 hover:to-green-500 transition-all duration-300">
                Simpan
            </button>
            <a href="{{ route('bookings.index') }}"
                class="flex-1 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white font-bold shadow text-center transition-all duration-300">
                Kembali
            </a>
        </div>
    </form>

    <style>
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px);}
            100% { opacity: 1; transform: translateY(0);}
        }
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px);}
            100% { opacity: 1; transform: translateY(0);}
        }
        .animate-fade-in-up { animation: fade-in-up 0.7s cubic-bezier(.4,0,.2,1) both;}
        .animate-fade-in-down { animation: fade-in-down 0.7s cubic-bezier(.4,0,.2,1) both;}
    </style>
</div>
@endsection
