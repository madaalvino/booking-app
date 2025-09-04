@extends('layout.app')
@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Detail Booking</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p><strong>Nama:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Tanggal Booking:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('d-m-Y H:i') }}</p>
            <p><strong>Ruangan:</strong> {{ $booking->room->name ?? 'Tidak ada ruangan' }}</p>
            <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
            <a href="{{ route('bookings.index') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kembali</a>
        </div>
    </div>
@endsection
