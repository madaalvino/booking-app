@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 relative overflow-hidden">
    <!-- Background Animation Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-cyan-400/10 to-teal-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Header Section with Back Button -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center space-x-6">
                <a href="{{ route('bookings.index') }}"
                   class="group inline-flex items-center justify-center w-14 h-14 bg-white/90 hover:bg-white border border-gray-300 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-gray-700 hover:text-blue-600"
                   title="Kembali ke Daftar Booking">
                    <svg class="w-6 h-6 group-hover:scale-110 group-hover:-translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                </a>
                <div class="h-8 w-px bg-gray-300/50"></div>
                <div>
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-indigo-900 bg-clip-text text-transparent">
                        Detail Booking
                    </h1>
                    <p class="text-gray-600 mt-1">Informasi lengkap tentang booking Anda</p>
                </div>
            </div>
        </div>

        <!-- Main Detail Card -->
        <div class="relative group max-w-4xl mx-auto">
            <!-- Card Glow Effect -->
            <div class="absolute -inset-1 bg-gradient-to-r from-cyan-600 via-blue-600 to-purple-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>

            <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 px-8 py-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-white">{{ $booking->name }}</h2>
                                <p class="text-blue-100">ID Booking: #{{ str_pad($booking->id, 4, '0', STR_PAD_LEFT) }}</p>
                            </div>
                        </div>

                        <!-- Status Badge -->
                        <div class="text-right">
                            @if($booking->status == 'pending')
                                <div class="inline-flex items-center gap-2 px-6 py-3 bg-yellow-100/20 backdrop-blur-sm text-yellow-200 font-bold rounded-2xl border-2 border-yellow-200/30 animate-pulse">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Pending
                                </div>
                            @elseif($booking->status == 'confirmed')
                                <div class="inline-flex items-center gap-2 px-6 py-3 bg-green-100/20 backdrop-blur-sm text-green-200 font-bold rounded-2xl border-2 border-green-200/30">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Confirmed
                                </div>
                            @else
                                <div class="inline-flex items-center gap-2 px-6 py-3 bg-red-100/20 backdrop-blur-sm text-red-200 font-bold rounded-2xl border-2 border-red-200/30">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                    {{ ucfirst($booking->status) }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-8 space-y-8">
                    <!-- Information Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Contact Information -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                Informasi Kontak
                            </h3>

                            <!-- Name -->
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Nama Lengkap</p>
                                        <p class="text-xl font-bold text-gray-900 mt-1">{{ $booking->name }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Alamat Email</p>
                                        <p class="text-xl font-bold text-gray-900 mt-1">{{ $booking->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Details -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                Detail Booking
                            </h3>

                            <!-- Booking Date -->
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Tanggal & Waktu</p>
                                        <p class="text-xl font-bold text-gray-900 mt-1">
                                            {{ \Carbon\Carbon::parse($booking->booking_date)->format('d F Y') }}
                                        </p>
                                        <p class="text-lg text-gray-600 mt-1">
                                            {{ \Carbon\Carbon::parse($booking->booking_date)->format('H:i') }} WIB
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Room Information -->
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-shadow duration-300">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Ruangan</p>
                                        <p class="text-xl font-bold text-gray-900 mt-1">
                                            {{ $booking->room->name ?? 'Tidak ada ruangan' }}
                                        </p>
                                        @if($booking->room)
                                            <p class="text-sm text-gray-600 mt-1">
                                                Kapasitas: {{ $booking->room->capacity ?? 'N/A' }} orang
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="border-t border-gray-200 pt-8">
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('bookings.index') }}"
                               class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-gradient-to-r from-gray-600 to-gray-700 text-white font-bold shadow-lg hover:from-gray-700 hover:to-gray-800 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Kembali ke Daftar
                            </a>

                            @if (Auth::check() && Auth::user()->role === 'admin')
                                <a href="{{ route('bookings.edit', $booking->id) }}"
                                   class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold shadow-lg hover:from-orange-600 hover:to-red-600 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    Edit Booking
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info Card -->
        <div class="mt-8 max-w-4xl mx-auto">
            <div class="bg-blue-50/50 border border-blue-200/50 rounded-2xl p-6 backdrop-blur-sm">
                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-blue-800 mb-2">Informasi Penting</h3>
                        <ul class="text-blue-700 text-sm space-y-1">
                            <li>• Harap datang 15 menit sebelum waktu booking</li>
                            <li>• Pastikan membawa identitas diri saat check-in</li>
                            <li>• Hubungi admin jika ada perubahan jadwal</li>
                            @if($booking->status == 'pending')
                                <li class="text-amber-700 font-medium">• Status booking masih pending, menunggu konfirmasi admin</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.6s ease-out;
}
</style>
@endsection
