@extends('layout.app')

@section('content')
  <h2 class="text-2xl font-semibold mb-4">Dashboard Booking</h2>

  <div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="w-full table-auto">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 text-left">Nama</th>
          <th class="px-4 py-2 text-left">Email</th>
          <th class="px-4 py-2 text-left">Ruangan</th>
          <th class="px-4 py-2 text-left">Tanggal Booking</th>
          <th class="px-4 py-2 text-left">Status</th>
        </tr>
      </thead>
      <tbody>
        @forelse($bookings as $booking)
          <tr class="border-b">
            <td class="px-4 py-2">{{ $booking->name }}</td>
            <td class="px-4 py-2">{{ $booking->email }}</td>
            <td class="px-4 py-2">{{ $booking->room->name }}</td>
            <td class="px-4 py-2">{{ $booking->booking_date }}</td>
            <td class="px-4 py-2">
              <span class="px-2 py-1 text-xs rounded
                {{ $booking->status == 'pending' ? 'bg-yellow-200 text-yellow-800' :
                   ($booking->status == 'confirmed' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800') }}">
                {{ ucfirst($booking->status) }}
              </span>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center py-4">Belum ada booking</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
