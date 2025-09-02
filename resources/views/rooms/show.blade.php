@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 relative overflow-hidden">
    <!-- Enhanced Animated Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
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
            </defs>
            <circle cx="30%" cy="30%" r="400" fill="url(#bg1)">
                <animate attributeName="cy" values="30%;45%;30%" dur="16s" repeatCount="indefinite"/>
                <animate attributeName="cx" values="30%;45%;30%" dur="14s" repeatCount="indefinite"/>
            </circle>
            <circle cx="70%" cy="70%" r="350" fill="url(#bg2)">
                <animate attributeName="cy" values="70%;55%;70%" dur="18s" repeatCount="indefinite"/>
                <animate attributeName="cx" values="70%;55%;70%" dur="16s" repeatCount="indefinite"/>
            </circle>
        </svg>
    </div>

    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Breadcrumb Navigation -->
        <div class="flex items-center gap-3 mb-8 animate-fade-in-down">
            <a href="{{ route('home') }}" class="group inline-flex items-center gap-2 text-gray-500 hover:text-blue-600 transition-colors duration-300">
                <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                home
            </a>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-700 font-medium">Detail Ruangan</span>
        </div>

        <!-- Room Header Card -->
        <div class="relative group mb-12 animate-fade-in-up">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>
            <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

                <div class="flex flex-col lg:flex-row">
                    <!-- Room Image Section -->
                    <div class="lg:w-1/2 relative overflow-hidden">
                        <div class="relative">
                            <img src="{{ $room->image ? asset('storage/'.$room->image) : 'https://source.unsplash.com/600x400/?meeting,room,office&sig='.$room->id }}"
                                 alt="{{ $room->name }}"
                                 class="w-full h-80 lg:h-96 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                            <!-- Image Overlay Info -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="flex gap-3">
                                    <div class="bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                                        <span class="text-gray-700 font-semibold text-sm">ID: #{{ $room->id }}</span>
                                    </div>
                                    @if($room->bookings->count() > 0)
                                    <div class="bg-blue-600/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                                        <span class="text-white font-semibold text-sm">{{ $room->bookings->count() }} Booking</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Room Info Section -->
                    <div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                        <div class="space-y-6">
                            <div>
                                <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-blue-800 via-indigo-900 to-purple-900 bg-clip-text text-transparent mb-3 group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                                    {{ $room->name }}
                                </h1>
                                <p class="text-gray-600 text-xl leading-relaxed">
                                    {{ $room->description ?? 'Ruangan modern dengan fasilitas lengkap untuk berbagai keperluan meeting, presentasi, dan acara bisnis.' }}
                                </p>
                            </div>

                            <!-- Room Stats -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gradient-to-br from-cyan-100 to-blue-100 p-4 rounded-2xl border-2 border-cyan-200 group-hover:border-blue-300 transition-colors duration-300">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-cyan-700 text-sm font-medium">Kapasitas</div>
                                            <div class="text-cyan-800 text-2xl font-bold">{{ $room->capacity }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gradient-to-br from-emerald-100 to-green-100 p-4 rounded-2xl border-2 border-emerald-200 group-hover:border-green-300 transition-colors duration-300">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-green-600 rounded-xl flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-emerald-700 text-sm font-medium">Total Booking</div>
                                            <div class="text-emerald-800 text-2xl font-bold">{{ $room->bookings->count() }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-4 pt-4">
                                <a href="{{ route('bookings.create') }}?room_id={{ $room->id }}"
                                   class="group/btn relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></div>
                                    <svg class="relative z-10 w-6 h-6 mr-3 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                                    </svg>
                                    <span class="relative z-10">Book Sekarang</span>
                                </a>
                                <a href="{{ route('rooms.edit', $room->id) }}"
                                   class="group/btn relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-red-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></div>
                                    <svg class="relative z-10 w-6 h-6 mr-3 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    <span class="relative z-10">Edit Ruangan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Room Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Facilities Card -->
            <div class="group relative animate-fade-in-up">
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden border border-white/20">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-400/20 to-teal-400/20 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Fasilitas Premium</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                <span>Proyektor HD</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                <span>Sound System</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                <span>AC & Wi-Fi</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                <span>Whiteboard</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Availability Card -->
            <div class="group relative animate-fade-in-up delay-100">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden border border-white/20">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-indigo-400/20 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Status Ketersediaan</h3>
                        <div class="space-y-3">
                            @php
                                $todayBookings = $room->bookings()->whereDate('booking_date', today())->count();
                                $isAvailable = $todayBookings < 8; // Assuming max 8 time slots per day
                            @endphp
                            @if($isAvailable)
                                <div class="inline-flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-green-100 to-emerald-100 rounded-2xl border-2 border-green-300">
                                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                    <span class="text-green-800 font-bold">Tersedia Hari Ini</span>
                                </div>
                            @else
                                <div class="inline-flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-red-100 to-pink-100 rounded-2xl border-2 border-red-300">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <span class="text-red-800 font-bold">Penuh Hari Ini</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="group relative animate-fade-in-up delay-200">
                <div class="absolute -inset-1 bg-gradient-to-r from-purple-500 to-pink-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden border border-white/20">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Aksi Cepat</h3>
                        <div class="space-y-3">
                            <button onclick="shareRoom()"
                                class="w-full flex items-center justify-center gap-3 px-4 py-3 bg-gradient-to-r from-purple-100 to-pink-100 hover:from-purple-200 hover:to-pink-200 rounded-xl border-2 border-purple-200 hover:border-pink-300 transition-all duration-300 group/share">
                                <svg class="w-4 h-4 text-purple-600 transform group-hover/share:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                                <span class="text-purple-800 font-semibold">Share Ruangan</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking History Section -->
        @if($room->bookings->count() > 0)
        <div class="relative group animate-fade-in-up delay-300 mb-12">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>
            <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>

                <!-- Section Header -->
                <div class="px-8 py-6 border-b border-gray-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-bold bg-gradient-to-r from-indigo-800 to-purple-900 bg-clip-text text-transparent">
                                    Riwayat Booking
                                </h3>
                                <p class="text-gray-600 text-lg">Semua reservasi untuk ruangan ini</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl shadow-sm border border-green-200">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-green-700 font-semibold text-sm">{{ $room->bookings->where('status', 'confirmed')->count() }} Confirmed</span>
                            </div>
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-yellow-100 to-amber-100 rounded-xl shadow-sm border border-yellow-200">
                                <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></div>
                                <span class="text-yellow-700 font-semibold text-sm">{{ $room->bookings->where('status', 'pending')->count() }} Pending</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-50 via-indigo-50 to-purple-50">
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        Nama Pemesan
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                                        </svg>
                                        Tanggal & Waktu
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Status
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Aksi
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($room->bookings()->latest()->take(10)->get() as $booking)
                            <tr class="group hover:bg-gradient-to-r hover:from-indigo-50/50 hover:via-purple-50/50 hover:to-pink-50/50 transition-all duration-500 transform hover:scale-[1.01] hover:shadow-lg relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/5 via-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-indigo-500 to-purple-600 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            {{ strtoupper(substr($booking->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div class="font-bold text-xl bg-gradient-to-r from-indigo-800 to-purple-900 bg-clip-text text-transparent group-hover:from-indigo-600 group-hover:to-purple-600 transition-all duration-300">
                                                {{ $booking->name }}
                                            </div>
                                            <div class="text-gray-500 text-sm">{{ $booking->email }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow duration-300">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6m-6 0l-.5 8.5A2 2 0 0013.5 21h-3a2 2 0 01-2-1.5L8 7z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-gray-800 font-bold text-lg group-hover:text-gray-900 transition-colors duration-300">
                                                {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }}
                                            </div>
                                            <div class="text-gray-500 text-sm">
                                                {{ \Carbon\Carbon::parse($booking->booking_date)->format('H:i') }} WIB
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    @if($booking->status == 'pending')
                                        <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-100 to-amber-100 group-hover:from-yellow-200 group-hover:to-amber-200 text-yellow-800 group-hover:text-yellow-900 font-bold rounded-2xl border-2 border-yellow-200 group-hover:border-amber-300 transition-all duration-300 shadow-sm group-hover:shadow-md animate-pulse">
                                            <div class="w-3 h-3 bg-yellow-500 rounded-full animate-ping"></div>
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Pending
                                        </div>
                                    @elseif($booking->status == 'confirmed')
                                        <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-green-100 to-emerald-100 group-hover:from-green-200 group-hover:to-emerald-200 text-green-800 group-hover:text-green-900 font-bold rounded-2xl border-2 border-green-200 group-hover:border-emerald-300 transition-all duration-300 shadow-sm group-hover:shadow-md">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            Confirmed
                                        </div>
                                    @else
                                        <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-red-100 to-pink-100 group-hover:from-red-200 group-hover:to-pink-200 text-red-800 group-hover:text-red-900 font-bold rounded-2xl border-2 border-red-200 group-hover:border-pink-300 transition-all duration-300 shadow-sm group-hover:shadow-md">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                            {{ ucfirst($booking->status) }}
                                        </div>
                                    @endif
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex gap-3">
                                        <a href="{{ route('bookings.edit', $booking->id) }}"
                                           class="group/btn relative inline-flex items-center px-5 py-3 bg-gradient-to-r from-amber-400 to-orange-500 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                            <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                            <svg class="relative z-10 w-4 h-4 mr-2 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                            <span class="relative z-10">Edit</span>
                                        </a>
                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus booking ini?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="group/btn relative inline-flex items-center px-5 py-3 bg-gradient-to-r from-red-500 to-pink-600 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-purple-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <svg class="relative z-10 w-4 h-4 mr-2 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                                <span class="relative z-10">Hapus</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-16 relative">
                                    <div class="flex flex-col items-center justify-center space-y-4 animate-fade-in-up">
                                        <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                                            <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-xl font-bold text-gray-500 mb-2">Belum ada booking</h3>
                                            <p class="text-gray-400">Ruangan ini belum pernah dibooking</p>
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
        @endif

        <!-- Room Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <!-- Total Bookings -->
            <div class="group relative animate-fade-in-up">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-2xl shadow-xl p-6 transform transition-all duration-300 hover:scale-105 border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-gray-500 text-sm font-medium">Total</div>
                            <div class="text-2xl font-bold text-gray-800">{{ $room->bookings->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Confirmed Bookings -->
            <div class="group relative animate-fade-in-up delay-100">
                <div class="absolute -inset-1 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-2xl shadow-xl p-6 transform transition-all duration-300 hover:scale-105 border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-gray-500 text-sm font-medium">Confirmed</div>
                            <div class="text-2xl font-bold text-gray-800">{{ $room->bookings->where('status', 'confirmed')->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Bookings -->
            <div class="group relative animate-fade-in-up delay-200">
                <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-amber-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-2xl shadow-xl p-6 transform transition-all duration-300 hover:scale-105 border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-amber-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-gray-500 text-sm font-medium">Pending</div>
                            <div class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                                {{ $room->bookings->where('status', 'pending')->count() }}
                                @if($room->bookings->where('status', 'pending')->count() > 0)
                                <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Utilization Rate -->
            <div class="group relative animate-fade-in-up delay-300">
                <div class="absolute -inset-1 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative bg-white/95 backdrop-blur-xl rounded-2xl shadow-xl p-6 transform transition-all duration-300 hover:scale-105 border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-gray-500 text-sm font-medium">Popularitas</div>
                            @php
                                $totalRooms = \App\Models\Room::count();
                                $thisRoomBookings = $room->bookings->count();
                                $allBookings = \App\Models\Booking::count();
                                $popularity = $allBookings > 0 ? round(($thisRoomBookings / $allBookings) * 100) : 0;
                            @endphp
                            <div class="text-2xl font-bold text-gray-800">{{ $popularity }}%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="text-center animate-fade-in-up delay-500">
            <a href="{{ route('home') }}"
               class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-gray-600 via-slate-700 to-gray-800 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <svg class="relative z-10 w-6 h-6 mr-3 transform group-hover:-rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span class="relative z-10">Kembali ke Home</span>
            </a>
        </div>
    </div>
</div>

<!-- JavaScript for Share Function -->
<script>
function shareRoom() {
    if (navigator.share) {
        navigator.share({
            title: '{{ $room->name }} - Room Booking',
            text: 'Lihat detail ruangan {{ $room->name }} dengan kapasitas {{ $room->capacity }} orang',
            url: window.location.href
        }).then(() => {
            showNotification('Berhasil dibagikan!', 'success');
        }).catch(() => {
            fallbackShare();
        });
    } else {
        fallbackShare();
    }
}

function fallbackShare() {
    navigator.clipboard.writeText(window.location.href).then(() => {
        showNotification('Link berhasil disalin ke clipboard!', 'success');
    }).catch(() => {
        showNotification('Gagal menyalin link', 'error');
    });
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-3 rounded-lg font-semibold shadow-lg transform transition-all duration-300 ${
        type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    notification.textContent = message;
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
        notification.style.opacity = '1';
    }, 100);
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        notification.style.opacity = '0';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}
</script>

<style>
@keyframes fade-in-down {
    0% { opacity: 0; transform: translateY(-30px) scale(0.95); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
}

@keyframes fade-in-up {
    0% { opacity: 0; transform: translateY(30px) scale(0.95); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
}

.animate-fade-in-down { animation: fade-in-down 0.8s cubic-bezier(0.4, 0, 0.2, 1) both; }
.animate-fade-in-up { animation: fade-in-up 0.8s cubic-bezier(0.4, 0, 0.2, 1) both; }
.animate-shimmer { background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.6) 50%, transparent 70%); background-size: 200% 100%; animation: shimmer 2s infinite; }
.animate-float { animation: float 6s ease-in-out infinite; }

.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-500 { animation-delay: 0.5s; }

.shadow-3xl { box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.05); }
.hover\:shadow-3xl:hover { box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.1); }

.overflow-x-auto::-webkit-scrollbar { height: 8px; }
.overflow-x-auto::-webkit-scrollbar-track { background: rgba(229, 231, 235, 0.5); border-radius: 10px; }
.overflow-x-auto::-webkit-scrollbar-thumb { background: linear-gradient(90deg, #3b82f6, #8b5cf6); border-radius: 10px; border: 2px solid rgba(255, 255, 255, 0.2); }
.overflow-x-auto::-webkit-scrollbar-thumb:hover { background: linear-gradient(90deg, #2563eb, #7c3aed); }
</style>
@endsection
