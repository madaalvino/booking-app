@extends('layout.app')

@section('content')
  <!-- Animated Background -->
  <div class="fixed inset-0 -z-10 pointer-events-none">
    <svg width="100%" height="100%" class="absolute inset-0 w-full h-full">
      <defs>
        <radialGradient id="bg1" cx="30%" cy="30%" r="80%">
          <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.25">
            <animate attributeName="stop-color" values="#38bdf8;#6366f1;#38bdf8" dur="8s" repeatCount="indefinite"/>
          </stop>
          <stop offset="100%" stop-color="#fff" stop-opacity="0"/>
        </radialGradient>
        <radialGradient id="bg2" cx="70%" cy="70%" r="80%">
          <stop offset="0%" stop-color="#fbbf24" stop-opacity="0.18">
            <animate attributeName="stop-color" values="#fbbf24;#34d399;#fbbf24" dur="10s" repeatCount="indefinite"/>
          </stop>
          <stop offset="100%" stop-color="#fff" stop-opacity="0"/>
        </radialGradient>
      </defs>
      <circle cx="30%" cy="30%" r="400" fill="url(#bg1)">
        <animate attributeName="cy" values="30%;40%;30%" dur="12s" repeatCount="indefinite"/>
        <animate attributeName="cx" values="30%;40%;30%" dur="10s" repeatCount="indefinite"/>
      </circle>
      <circle cx="70%" cy="70%" r="350" fill="url(#bg2)">
        <animate attributeName="cy" values="70%;60%;70%" dur="14s" repeatCount="indefinite"/>
        <animate attributeName="cx" values="70%;60%;70%" dur="11s" repeatCount="indefinite"/>
      </circle>
      <!-- Animated floating dots -->
      <g>
        <circle cx="15%" cy="80%" r="8" fill="#38bdf8" opacity="0.12">
          <animate attributeName="cy" values="80%;60%;80%" dur="9s" repeatCount="indefinite"/>
        </circle>
        <circle cx="85%" cy="20%" r="6" fill="#fbbf24" opacity="0.13">
          <animate attributeName="cy" values="20%;40%;20%" dur="8s" repeatCount="indefinite"/>
        </circle>
        <circle cx="50%" cy="10%" r="5" fill="#6366f1" opacity="0.10">
          <animate attributeName="cy" values="10%;30%;10%" dur="12s" repeatCount="indefinite"/>
        </circle>
      </g>
    </svg>
  </div>
  <!-- END Animated Background -->

  <!-- Section: Statistik Dashboard -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl shadow-xl p-6 flex items-center gap-4 animate-fade-in-down">
      <div class="bg-white/30 rounded-full p-3">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-7.13a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
      </div>
      <div>
        <div class="text-white text-lg font-bold">Total Ruangan</div>
        <div class="text-2xl font-extrabold text-white">{{ $rooms->count() }}</div>
      </div>
    </div>
    <div class="bg-gradient-to-r from-green-400 to-teal-500 rounded-2xl shadow-xl p-6 flex items-center gap-4 animate-fade-in-down delay-100">
      <div class="bg-white/30 rounded-full p-3">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6"/></svg>
      </div>
      <div>
        <div class="text-white text-lg font-bold">Total Booking</div>
        <div class="text-2xl font-extrabold text-white">{{ $bookings->count() }}</div>
      </div>
    </div>
    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl shadow-xl p-6 flex items-center gap-4 animate-fade-in-down delay-200">
      <div class="bg-white/30 rounded-full p-3">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"/></svg>
      </div>
      <div>
        <div class="text-white text-lg font-bold">Booking Pending</div>
        <div class="text-2xl font-extrabold text-white">
          {{ $bookings->where('status','pending')->count() }}
        </div>
      </div>
    </div>
  </div>

  <!-- Section: Ruangan Populer -->
  @php
    $popularRoom = $rooms->sortByDesc(fn($room) => $room->bookings->count())->first();
  @endphp
  @if($popularRoom)
  <div class="mb-10 animate-fade-in-up">
    <div class="flex items-center gap-4 mb-3">
      <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.176 0l-3.38 2.454c-.784.57-1.838-.196-1.539-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
      <span class="text-lg font-bold text-yellow-700">Ruangan Paling Populer</span>
    </div>
    <div class="bg-white/90 rounded-2xl shadow-xl flex flex-col md:flex-row overflow-hidden group hover:scale-[1.02] transition-all duration-300">
      <img src="{{ $popularRoom->image ? asset('storage/'.$popularRoom->image) : 'https://source.unsplash.com/400x200/?meeting,room,office&sig='.$popularRoom->id }}"
        alt="{{ $popularRoom->name }}" class="w-full md:w-64 h-48 object-cover">
      <div class="p-6 flex-1">
        <h3 class="text-2xl font-bold text-blue-800 mb-1">{{ $popularRoom->name }}</h3>
        <p class="text-gray-600 text-sm mb-3">{{ $popularRoom->description ?? 'Tidak ada deskripsi.' }}</p>
        <div class="flex items-center gap-4 mb-2">
          <span class="inline-block px-3 py-1 rounded-full bg-blue-100 text-blue-700 font-semibold text-xs">
            {{ $popularRoom->capacity }} Orang
          </span>
          <span class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-700 font-semibold text-xs">
            {{ $popularRoom->bookings->count() }} Booking
          </span>
        </div>
        <a href="{{ route('rooms.show', $popularRoom->id) }}"
          class="inline-block mt-2 px-4 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold shadow hover:from-blue-600 hover:to-cyan-500 transition-all duration-300">
          Lihat Detail
        </a>
      </div>
    </div>
  </div>
  @endif

  <!-- Section: Kartu Ruangan -->
  <div class="mb-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 animate-fade-in-down">Daftar Ruangan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($rooms as $room)
        <div class="bg-white/90 rounded-2xl shadow-xl overflow-hidden group animate-fade-in-up hover:scale-[1.03] transition-all duration-300">
          <div class="relative">
            <img
              src="{{ $room->image ? asset('storage/'.$room->image) : 'https://source.unsplash.com/400x200/?meeting,room,office&sig='.$room->id }}"
              alt="{{ $room->name }}"
              class="w-full h-48 object-cover group-hover:brightness-90 transition">
            <span class="absolute top-3 right-3 bg-blue-600/90 text-white text-xs px-3 py-1 rounded-full shadow font-semibold">{{ $room->capacity }} Orang</span>
          </div>
          <div class="p-5">
            <h3 class="text-xl font-bold text-blue-800 mb-1">{{ $room->name }}</h3>
            <p class="text-gray-600 text-sm mb-3">{{ $room->description ?? 'Tidak ada deskripsi.' }}</p>
            <div class="flex items-center justify-between">
              <span class="inline-flex items-center gap-1 text-xs text-gray-500">
                <svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-7.13a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                {{ $room->location ?? 'Gedung Utama' }}
              </span>
              <a href="{{ route('rooms.show', $room->id) }}"
                class="px-4 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold shadow hover:from-blue-600 hover:to-cyan-500 transition-all duration-300">
                Detail & Booking
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Section: Tabel Booking -->
  <div class="mb-8">
    <h2 class="text-3xl font-extrabold text-gray-800 mb-2 animate-fade-in-down">Dashboard Booking</h2>
    <p class="text-gray-500">Lihat status booking ruangan Anda secara real-time.</p>
  </div>

  <div class="overflow-x-auto bg-white/80 shadow-2xl rounded-2xl p-4 animate-fade-in-up backdrop-blur">
    <table class="w-full table-auto">
      <thead>
        <tr class="bg-gradient-to-r from-blue-100 via-cyan-100 to-teal-100 text-gray-700">
          <th class="px-4 py-3 text-left font-semibold">Nama</th>
          <th class="px-4 py-3 text-left font-semibold">Email</th>
          <th class="px-4 py-3 text-left font-semibold">Ruangan</th>
          <th class="px-4 py-3 text-left font-semibold">Tanggal Booking</th>
          <th class="px-4 py-3 text-left font-semibold">Status</th>
        </tr>
      </thead>
      <tbody>
        @forelse($bookings as $booking)
          <tr class="border-b last:border-none hover:bg-cyan-50/70 transition-all duration-200 group">
            <td class="px-4 py-3 flex items-center gap-2">
              <span class="inline-block w-2 h-2 rounded-full bg-gradient-to-br from-blue-400 to-cyan-400 group-hover:scale-125 transition"></span>
              <span>{{ $booking->name }}</span>
            </td>
            <td class="px-4 py-3">{{ $booking->email }}</td>
            <td class="px-4 py-3 font-semibold text-blue-700">{{ $booking->room->name }}</td>
            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }}</td>
            <td class="px-4 py-3">
              @if($booking->status == 'pending')
                <span class="inline-flex items-center gap-1 px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-800 font-semibold animate-pulse">
                  <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="10"/></svg>
                  Pending
                </span>
              @elseif($booking->status == 'confirmed')
                <span class="inline-flex items-center gap-1 px-2 py-1 text-xs rounded bg-green-100 text-green-800 font-semibold">
                  <svg class="w-3 h-3 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 7.293a1 1 0 00-1.414 0L9 13.586l-2.293-2.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                  Confirmed
                </span>
              @else
                <span class="inline-flex items-center gap-1 px-2 py-1 text-xs rounded bg-red-100 text-red-800 font-semibold">
                  <svg class="w-3 h-3 text-red-500" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="10"/></svg>
                  {{ ucfirst($booking->status) }}
                </span>
              @endif
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center py-8 text-gray-400 animate-fade-in-up">Belum ada booking</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <style>
    @keyframes fade-in-down {
      0% { opacity: 0; transform: translateY(-20px);}
      100% { opacity: 1; transform: translateY(0);}
    }
    @keyframes fade-in-up {
      0% { opacity: 0; transform: translateY(20px);}
      100% { opacity: 1; transform: translateY(0);}
    }
    .animate-fade-in-down { animation: fade-in-down 0.7s cubic-bezier(.4,0,.2,1) both;}
    .animate-fade-in-up { animation: fade-in-up 0.7s cubic-bezier(.4,0,.2,1) both;}
    .delay-100 { animation-delay: .1s }
    .delay-200 { animation-delay: .2s }
  </style>
@endsection
