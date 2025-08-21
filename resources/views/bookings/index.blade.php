@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow p-6 rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Daftar Booking</h2>

    <a href="{{ route('bookings.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Booking</a>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Nama</th>
                <th class="border border-gray-300 p-2">Email</th>
                <th class="border border-gray-300 p-2">Tanggal Booking</th>
                <th class="border border-gray-300 p-2">Ruangan</th>
                <th class="border border-gray-300 p-2">Status</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td class="border border-gray-300 p-2">{{ $booking->name }}</td>
                <td class="border border-gray-300 p-2">{{ $booking->email }}</td>
                <td class="border border-gray-300 p-2">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d-m-Y H:i') }}</td>
                <td class="border border-gray-300 p-2">{{ $booking->room->name ?? '-' }}</td>
                <td class="border border-gray-300 p-2 capitalize">{{ $booking->status }}</td>
                <td class="border border-gray-300 p-2 space-x-2">
                    <a href="{{ route('bookings.edit', $booking->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus booking ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($bookings->isEmpty())
        <p class="mt-4 text-gray-500">Belum ada booking.</p>
    @endif
</div>
@endsection
