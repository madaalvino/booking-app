@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white/90 shadow-2xl p-8 rounded-2xl animate-fade-in-up mt-10">
    <h2 class="text-2xl font-bold text-blue-800 mb-6">Daftar Booking</h2>

    <a href="{{ route('bookings.create') }}"
       class="inline-block mb-6 px-5 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold shadow hover:from-blue-600 hover:to-cyan-500 transition-all duration-300">
        + Tambah Booking
    </a>

    @if(session('success'))
        <div class="mb-4 animate-fade-in-down">
            <div class="px-4 py-3 rounded-lg bg-green-100 text-green-800 font-semibold shadow">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gradient-to-r from-blue-100 via-cyan-100 to-teal-100 text-gray-700">
                    <th class="px-4 py-3 text-left font-semibold">Nama</th>
                    <th class="px-4 py-3 text-left font-semibold">Email</th>
                    <th class="px-4 py-3 text-left font-semibold">Tanggal Booking</th>
                    <th class="px-4 py-3 text-left font-semibold">Ruangan</th>
                    <th class="px-4 py-3 text-left font-semibold">Status</th>
                    <th class="px-4 py-3 text-left font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                <tr class="border-b last:border-none hover:bg-cyan-50/70 transition-all duration-200 group">
                    <td class="px-4 py-3">{{ $booking->name }}</td>
                    <td class="px-4 py-3">{{ $booking->email }}</td>
                    <td class="px-4 py-3">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d-m-Y H:i') }}</td>
                    <td class="px-4 py-3 font-semibold text-blue-700">{{ $booking->room->name ?? '-' }}</td>
                    <td class="px-4 py-3 capitalize">
                        @if($booking->status == 'pending')
                            <span class="inline-block px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 font-semibold text-xs animate-pulse">Pending</span>
                        @elseif($booking->status == 'confirmed')
                            <span class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-800 font-semibold text-xs">Confirmed</span>
                        @else
                            <span class="inline-block px-3 py-1 rounded-full bg-red-100 text-red-800 font-semibold text-xs">{{ ucfirst($booking->status) }}</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 flex gap-2">
                        <a href="{{ route('bookings.edit', $booking->id) }}"
                           class="px-3 py-1 rounded-lg bg-yellow-400/90 text-white font-semibold shadow hover:bg-yellow-500 transition-all duration-200 text-xs">
                            Edit
                        </a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus booking ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 rounded-lg bg-red-500/90 text-white font-semibold shadow hover:bg-red-600 transition-all duration-200 text-xs">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-8 text-gray-400 animate-fade-in-up">Belum ada booking.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

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
