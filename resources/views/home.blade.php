@extends('layout.app')

@section('content')
  <!-- Enhanced Animated Background -->
  <div class="fixed inset-0 -z-10 pointer-events-none overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100"></div>
    <svg width="100%" height="100%" class="absolute inset-0 w-full h-full">
      <defs>
        <radialGradient id="bg1" cx="30%" cy="30%" r="80%">
          <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.3">
            <animate attributeName="stop-color" values="#38bdf8;#6366f1;#8b5cf6;#38bdf8" dur="12s" repeatCount="indefinite"/>
          </stop>
          <stop offset="100%" stop-color="#fff" stop-opacity="0"/>
        </radialGradient>
        <radialGradient id="bg2" cx="70%" cy="70%" r="80%">
          <stop offset="0%" stop-color="#fbbf24" stop-opacity="0.25">
            <animate attributeName="stop-color" values="#fbbf24;#34d399;#f59e0b;#fbbf24" dur="15s" repeatCount="indefinite"/>
          </stop>
          <stop offset="100%" stop-color="#fff" stop-opacity="0"/>
        </radialGradient>
        <radialGradient id="bg3" cx="50%" cy="20%" r="60%">
          <stop offset="0%" stop-color="#ec4899" stop-opacity="0.15">
            <animate attributeName="stop-color" values="#ec4899;#8b5cf6;#06b6d4;#ec4899" dur="18s" repeatCount="indefinite"/>
          </stop>
          <stop offset="100%" stop-color="#fff" stop-opacity="0"/>
        </radialGradient>
      </defs>
      <circle cx="30%" cy="30%" r="400" fill="url(#bg1)">
        <animate attributeName="cy" values="30%;45%;30%" dur="16s" repeatCount="indefinite"/>
        <animate attributeName="cx" values="30%;45%;30%" dur="14s" repeatCount="indefinite"/>
      </circle>
      <circle cx="70%" cy="70%" r="350" fill="url(#bg2)">
        <animate attributeName="cy" values="70%;55%;70%" dur="18s" repeatCount="indefinite"/>
        <animate attributeName="cx" values="70%;55%;70%" dur="16s" repeatCount="indefinite"/>
      </circle>
      <circle cx="50%" cy="20%" r="300" fill="url(#bg3)">
        <animate attributeName="cy" values="20%;35%;20%" dur="20s" repeatCount="indefinite"/>
        <animate attributeName="cx" values="50%;65%;50%" dur="22s" repeatCount="indefinite"/>
      </circle>
      <!-- Enhanced floating particles -->
      <g>
        <circle cx="15%" cy="80%" r="12" fill="#38bdf8" opacity="0.15">
          <animate attributeName="cy" values="80%;60%;80%" dur="12s" repeatCount="indefinite"/>
          <animate attributeName="r" values="12;8;12" dur="8s" repeatCount="indefinite"/>
        </circle>
        <circle cx="85%" cy="20%" r="10" fill="#fbbf24" opacity="0.18">
          <animate attributeName="cy" values="20%;40%;20%" dur="10s" repeatCount="indefinite"/>
          <animate attributeName="r" values="10;6;10" dur="6s" repeatCount="indefinite"/>
        </circle>
        <circle cx="50%" cy="10%" r="8" fill="#6366f1" opacity="0.12">
          <animate attributeName="cy" values="10%;30%;10%" dur="14s" repeatCount="indefinite"/>
          <animate attributeName="r" values="8;4;8" dur="7s" repeatCount="indefinite"/>
        </circle>
        <circle cx="75%" cy="50%" r="6" fill="#ec4899" opacity="0.14">
          <animate attributeName="cy" values="50%;70%;50%" dur="11s" repeatCount="indefinite"/>
          <animate attributeName="cx" values="75%;85%;75%" dur="13s" repeatCount="indefinite"/>
        </circle>
        <circle cx="25%" cy="40%" r="9" fill="#34d399" opacity="0.16">
          <animate attributeName="cy" values="40%;20%;40%" dur="15s" repeatCount="indefinite"/>
          <animate attributeName="cx" values="25%;35%;25%" dur="17s" repeatCount="indefinite"/>
        </circle>
      </g>
    </svg>
  </div>

  <!-- Premium Header Section -->
  <div class="relative mb-16 animate-fade-in-down">
    <div class="relative overflow-hidden bg-gradient-to-br from-white/95 via-blue-50/95 to-indigo-100/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/30">
      <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>
      <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl"></div>

      <div class="px-8 py-8 relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
          <div class="flex items-center gap-6">
            <div class="relative group">
              <div class="absolute -inset-3 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-2xl opacity-20 group-hover:opacity-40 transition-opacity duration-500 blur animate-pulse"></div>
              <div class="relative bg-white/90 p-5 rounded-2xl shadow-xl border-2 border-blue-100 group-hover:border-purple-200 transition-all duration-300 transform group-hover:scale-105">
                <svg class="w-16 h-16 text-blue-600 transform group-hover:rotate-12 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
              </div>
            </div>

            <div class="space-y-3">
              <h1 class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-blue-800 via-indigo-800 to-purple-900 bg-clip-text text-transparent">
                Room Manager
              </h1>
              <p class="text-gray-600 text-xl font-medium">
                Dashboard Manajemen Ruangan Premium
              </p>
              <div class="flex items-center gap-2 text-sm text-gray-500">
                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                <span>System Online</span>
                <div class="w-px h-4 bg-gray-300 mx-2"></div>
                <span>{{ now()->format('d M Y, H:i') }}</span>
              </div>
            </div>
          </div>

          <div class="flex gap-4">
            <a href="{{ route('rooms.create') }}"
               class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
              <svg class="relative z-10 w-6 h-6 mr-3 transform group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
              </svg>
              <span class="relative z-10">Tambah Ruangan</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Enhanced Statistics Dashboard -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
    <!-- Total Ruangan Card -->
    <div class="group relative animate-fade-in-down">
      <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
      <div class="relative bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl shadow-2xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 transform group-hover:scale-110 transition-transform duration-500"></div>
        <div class="relative z-10 flex items-center gap-6">
          <div class="bg-white/25 backdrop-blur-sm rounded-2xl p-4 transform group-hover:rotate-12 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
          </div>
          <div class="flex-1">
            <div class="text-white/90 text-xl font-bold mb-1">Total Ruangan</div>
            <div class="text-4xl font-extrabold text-white group-hover:scale-110 transform transition-transform duration-300">
              {{ $rooms->count() }}
            </div>
            <div class="text-white/70 text-sm mt-1">Ruangan Tersedia</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Booking Card -->
    <div class="group relative animate-fade-in-down delay-100">
      <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
      <div class="relative bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl shadow-2xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 transform group-hover:scale-110 transition-transform duration-500"></div>
        <div class="relative z-10 flex items-center gap-6">
          <div class="bg-white/25 backdrop-blur-sm rounded-2xl p-4 transform group-hover:rotate-12 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
            </svg>
          </div>
          <div class="flex-1">
            <div class="text-white/90 text-xl font-bold mb-1">Total Booking</div>
            <div class="text-4xl font-extrabold text-white group-hover:scale-110 transform transition-transform duration-300">
              {{ $bookings->count() }}
            </div>
            <div class="text-white/70 text-sm mt-1">Reservasi Dibuat</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Booking Card -->
    <div class="group relative animate-fade-in-down delay-200">
      <div class="absolute -inset-1 bg-gradient-to-r from-amber-500 to-orange-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
      <div class="relative bg-gradient-to-br from-amber-500 to-orange-600 rounded-3xl shadow-2xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 transform group-hover:scale-110 transition-transform duration-500"></div>
        <div class="relative z-10 flex items-center gap-6">
          <div class="bg-white/25 backdrop-blur-sm rounded-2xl p-4 transform group-hover:rotate-12 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div class="flex-1">
            <div class="text-white/90 text-xl font-bold mb-1">Booking Pending</div>
            <div class="text-4xl font-extrabold text-white group-hover:scale-110 transform transition-transform duration-300 flex items-center gap-2">
              {{ $bookings->where('status','pending')->count() }}
              <div class="w-3 h-3 bg-white/70 rounded-full animate-pulse"></div>
            </div>
            <div class="text-white/70 text-sm mt-1">Menunggu Konfirmasi</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Popular Room Section -->
  @php
    $popularRoom = $rooms->sortByDesc(fn($room) => $room->bookings->count())->first();
  @endphp
  @if($popularRoom)
  <div class="mb-16 animate-fade-in-up">
    <div class="flex items-center gap-6 mb-8">
      <div class="relative">
        <svg class="w-10 h-10 text-yellow-500 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.176 0l-3.38 2.454c-.784.57-1.838-.196-1.539-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/>
        </svg>
        <div class="absolute -inset-2 bg-yellow-400 rounded-full blur opacity-30 animate-ping"></div>
      </div>
      <div>
        <h2 class="text-3xl font-bold bg-gradient-to-r from-yellow-600 via-orange-600 to-red-600 bg-clip-text text-transparent">
          Ruangan Paling Populer
        </h2>
        <p class="text-gray-600 text-lg">Ruangan dengan booking terbanyak</p>
      </div>
    </div>

    <div class="relative group">
      <div class="absolute -inset-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
      <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden group-hover:scale-[1.02] transition-all duration-500 border border-white/50">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500"></div>

        <div class="flex flex-col lg:flex-row">
          <div class="lg:w-1/3 relative overflow-hidden">
            <img src="{{ $popularRoom->image ? asset('storage/'.$popularRoom->image) : 'https://source.unsplash.com/400x200/?meeting,room,office&sig='.$popularRoom->id }}"
              alt="{{ $popularRoom->name }}"
              class="w-full h-64 lg:h-full object-cover group-hover:scale-110 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>

          <div class="lg:w-2/3 p-8 flex flex-col justify-center">
            <div class="flex items-start justify-between mb-4">
              <div>
                <h3 class="text-3xl font-bold bg-gradient-to-r from-blue-800 via-indigo-900 to-purple-900 bg-clip-text text-transparent mb-2">
                  {{ $popularRoom->name }}
                </h3>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                  {{ $popularRoom->description ?? 'Ruangan premium dengan fasilitas lengkap dan modern.' }}
                </p>
              </div>
            </div>

            <div class="flex items-center gap-6 mb-6">
              <div class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gradient-to-r from-blue-100 to-indigo-100 border-2 border-blue-200">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="text-blue-700 font-bold text-lg">{{ $popularRoom->capacity }} Orang</span>
              </div>

              <div class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gradient-to-r from-green-100 to-emerald-100 border-2 border-green-200">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                </svg>
                <span class="text-green-700 font-bold text-lg">{{ $popularRoom->bookings->count() }} Booking</span>
              </div>
            </div>

            <a href="{{ route('rooms.show', $popularRoom->id) }}"
              class="group/btn relative inline-flex items-center w-fit px-8 py-4 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 text-white font-bold text-lg rounded-2xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></div>
              <svg class="relative z-10 w-6 h-6 mr-3 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
              <span class="relative z-10">Lihat Detail Lengkap</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif

  <!-- Room Cards Section -->
  <div class="mb-16">
    <div class="flex items-center justify-between mb-10">
      <div>
        <h2 class="text-4xl font-bold bg-gradient-to-r from-gray-800 via-blue-800 to-indigo-900 bg-clip-text text-transparent mb-2 animate-fade-in-down">
          Semua Ruangan
        </h2>
        <p class="text-gray-600 text-lg">Jelajahi dan kelola semua ruangan yang tersedia</p>
      </div>

      <div class="flex gap-4">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-xl shadow-lg border border-white/50">
          <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
          <span class="text-gray-700 font-medium">{{ $rooms->count() }} Ruangan</span>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($rooms as $room)
        <div class="group relative animate-fade-in-up" style="animation-delay: {{ $loop->index * 0.1 }}s">
          <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
          <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden group-hover:scale-[1.03] transition-all duration-500 border border-white/50">
            <div class="relative overflow-hidden">
              <img
                src="{{ $room->image ? asset('storage/'.$room->image) : 'https://source.unsplash.com/400x200/?meeting,room,office&sig='.$room->id }}"
                alt="{{ $room->name }}"
                class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">

              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

              <div class="absolute top-4 right-4 inline-flex items-center gap-2 bg-blue-600/90 backdrop-blur-sm text-white text-sm px-4 py-2 rounded-full shadow-lg font-bold transform group-hover:scale-110 transition-all duration-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                {{ $room->capacity }} Orang
              </div>
            </div>

            <div class="p-6">
              <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-800 via-indigo-900 to-purple-900 bg-clip-text text-transparent mb-3 group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                {{ $room->name }}
              </h3>

              <p class="text-gray-600 text-base leading-relaxed mb-6 group-hover:text-gray-700 transition-colors duration-300">
                {{ $room->description ?? 'Ruangan modern dengan fasilitas lengkap untuk berbagai keperluan.' }}
              </p>

              <div class="flex items-center justify-between">
                <div class="inline-flex items-center gap-2 text-sm text-gray-500 font-medium">
                  <svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                  {{ $room->location ?? 'Gedung Utama' }}
                </div>

                <a href="{{ route('rooms.show', $room->id) }}"
                  class="group/btn relative inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                  <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                  <span class="relative z-10">Detail & Booking</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Enhanced Booking Dashboard Table -->
  <div class="mb-12">
    <div class="flex items-center justify-between mb-10">
      <div>
        <h2 class="text-4xl font-extrabold bg-gradient-to-r from-gray-800 via-blue-800 to-indigo-900 bg-clip-text text-transparent mb-2 animate-fade-in-down">
          Dashboard Booking
        </h2>
        <p class="text-gray-600 text-lg">Monitor dan kelola semua reservasi ruangan secara real-time</p>
      </div>

      <div class="flex items-center gap-4">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-xl shadow-lg border border-white/50">
          <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
          <span class="text-gray-700 font-medium">{{ $bookings->count() }} Total Booking</span>
        </div>

        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-xl shadow-lg border border-white/50">
          <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></div>
          <span class="text-gray-700 font-medium">{{ $bookings->where('status','pending')->count() }} Pending</span>
        </div>
      </div>
    </div>

    <div class="relative group">
      <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>
      <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

        <div class="overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="bg-gradient-to-r from-gray-50 via-blue-50 to-indigo-50">
                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                  <span class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                      </svg>
                    </div>
                    Nama Pemesan
                  </span>
                </th>
                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                  <span class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-cyan-500 to-teal-600 rounded-lg flex items-center justify-center">
                      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                      </svg>
                    </div>
                    Email
                  </span>
                </th>
                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                  <span class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                      </svg>
                    </div>
                    Ruangan
                  </span>
                </th>
                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                  <span class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-lg flex items-center justify-center">
                      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                      </svg>
                    </div>
                    Tanggal Booking
                  </span>
                </th>
                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                  <span class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-orange-600 rounded-lg flex items-center justify-center">
                      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                      </svg>
                    </div>
                    Status
                  </span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              @forelse($bookings as $booking)
                <tr class="group hover:bg-gradient-to-r hover:from-blue-50/50 hover:via-indigo-50/50 hover:to-purple-50/50 transition-all duration-500 transform hover:scale-[1.01] hover:shadow-lg relative overflow-hidden">
                  <!-- Enhanced Row Hover Effect -->
                  <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 via-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                  <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-600 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>

                  <td class="px-8 py-6 relative z-10">
                    <div class="flex items-center gap-4">
                      <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">
                        {{ strtoupper(substr($booking->name, 0, 1)) }}
                      </div>
                      <div>
                        <div class="font-bold text-gray-800 group-hover:text-blue-800 transition-colors duration-300 text-lg">
                          {{ $booking->name }}
                        </div>
                        <div class="text-gray-500 text-sm">Pemesan</div>
                      </div>
                    </div>
                  </td>

                  <td class="px-8 py-6 relative z-10">
                    <div class="flex items-center gap-3">
                      <svg class="w-5 h-5 text-gray-400 group-hover:text-cyan-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                      </svg>
                      <span class="text-gray-700 font-medium group-hover:text-gray-900 transition-colors duration-300">
                        {{ $booking->email }}
                      </span>
                    </div>
                  </td>

                  <td class="px-8 py-6 relative z-10">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-gradient-to-r from-blue-100 to-indigo-100 group-hover:from-blue-200 group-hover:to-purple-200 rounded-xl border-2 border-blue-200 group-hover:border-purple-300 transition-all duration-300">
                      <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                      </svg>
                      <span class="font-bold text-xl bg-gradient-to-r from-blue-700 to-indigo-800 bg-clip-text text-transparent group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                        {{ $booking->room->name }}
                      </span>
                    </div>
                  </td>

                  <td class="px-8 py-6 relative z-10">
                    <div class="inline-flex items-center gap-3 px-4 py-3 bg-gray-100 group-hover:bg-gradient-to-r group-hover:from-green-100 group-hover:to-emerald-100 text-gray-700 group-hover:text-green-800 font-bold rounded-xl transition-all duration-300 border-2 border-transparent group-hover:border-green-200">
                      <svg class="w-5 h-5 text-gray-500 group-hover:text-green-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                      </svg>
                      <span class="text-lg">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }}</span>
                    </div>
                  </td>

                  <td class="px-8 py-6 relative z-10">
                    @if($booking->status == 'pending')
                      <span class="inline-flex items-center gap-3 px-6 py-3 text-base rounded-2xl bg-gradient-to-r from-yellow-100 via-amber-100 to-orange-100 text-yellow-800 font-bold shadow-lg border-2 border-yellow-300 animate-pulse">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full animate-ping"></div>
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Pending
                      </span>
                    @elseif($booking->status == 'confirmed')
                      <span class="inline-flex items-center gap-3 px-6 py-3 text-base rounded-2xl bg-gradient-to-r from-green-100 via-emerald-100 to-teal-100 text-green-800 font-bold shadow-lg border-2 border-green-300">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Confirmed</span>
                      </span>
                    @else
                      <span class="inline-flex items-center gap-3 px-6 py-3 text-base rounded-2xl bg-gradient-to-r from-red-100 via-pink-100 to-rose-100 text-red-800 font-bold shadow-lg border-2 border-red-300">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <span>{{ ucfirst($booking->status) }}</span>
                      </span>
                    @endif
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center py-16">
                    <div class="flex flex-col items-center gap-6 animate-fade-in-up">
                      <div class="relative">
                        <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <div class="absolute -inset-2 bg-gray-200 rounded-full blur opacity-50 animate-pulse"></div>
                      </div>
                      <div class="space-y-2 text-center">
                        <div class="text-gray-400 text-2xl font-bold">Belum Ada Booking</div>
                        <p class="text-gray-300 text-lg">Booking ruangan akan muncul di sini secara real-time</p>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Enhanced Custom Styles -->
  <style>
    @keyframes fade-in-down {
      0% {
        opacity: 0;
        transform: translateY(-30px) scale(0.95);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    @keyframes fade-in-up {
      0% {
        opacity: 0;
        transform: translateY(30px) scale(0.95);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    @keyframes shimmer {
      0% { background-position: -200% 0; }
      100% { background-position: 200% 0; }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-10px) rotate(2deg); }
    }

    @keyframes glow {
      0%, 100% { box-shadow: 0 0 5px rgba(59, 130, 246, 0.5); }
      50% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.8), 0 0 30px rgba(59, 130, 246, 0.6); }
    }

    .animate-fade-in-down {
      animation: fade-in-down 0.8s cubic-bezier(0.4, 0, 0.2, 1) both;
    }

    .animate-fade-in-up {
      animation: fade-in-up 0.8s cubic-bezier(0.4, 0, 0.2, 1) both;
    }

    .animate-shimmer {
      background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.6) 50%, transparent 70%);
      background-size: 200% 100%;
      animation: shimmer 2s infinite;
    }

    .animate-float {
      animation: float 6s ease-in-out infinite;
    }

    .animate-glow {
      animation: glow 2s ease-in-out infinite;
    }

    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-500 { animation-delay: 0.5s; }

    .shadow-3xl {
      box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.05);
    }

    .hover\:shadow-3xl:hover {
      box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.1);
    }

    /* Custom scrollbar */
    .overflow-x-auto::-webkit-scrollbar {
      height: 8px;
    }

    .overflow-x-auto::-webkit-scrollbar-track {
      background: rgba(229, 231, 235, 0.5);
      border-radius: 10px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb {
      background: linear-gradient(90deg, #3b82f6, #8b5cf6);
      border-radius: 10px;
      border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(90deg, #2563eb, #7c3aed);
    }
  </style>
@endsection
