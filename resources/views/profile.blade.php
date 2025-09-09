@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-4xl mt-8 px-4">
    <!-- Header Section with Navigation -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}"
               class="inline-flex items-center justify-center w-12 h-12 bg-white/80 hover:bg-white border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 text-gray-700 hover:text-gray-900 group"
               title="Kembali ke Home">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>
            <div class="h-6 w-px bg-gray-300"></div>
            <h1 class="text-3xl font-bold text-blue-800">Profil Pengguna</h1>
        </div>
    </div>

    @if (auth()->check())
        <!-- Main Profile Card -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/20 overflow-hidden animate-fade-in-up mb-8">
            <!-- Profile Header -->
            <div class="bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-8">
                <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8">
                    <!-- Profile Avatar -->
                    <div class="relative group">
                        <div class="w-32 h-32 bg-gradient-to-br from-white/20 to-white/10 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-white/20 shadow-2xl">
                            @if(auth()->user()->profile_image)
                                <img src="{{ auth()->user()->profile_image }}"
                                     alt="Foto Profil"
                                     class="w-full h-full object-cover rounded-2xl">
                            @else
                                <span class="text-6xl font-bold text-white">
                                    {{ strtoupper(substr(auth()->user()->username, 0, 1)) }}
                                </span>
                            @endif
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center border-4 border-white shadow-lg">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Profile Info -->
                    <div class="text-center md:text-left space-y-2">
                        <h2 class="text-3xl font-bold text-white">{{ auth()->user()->username }}</h2>
                        <p class="text-blue-100 text-lg">{{ auth()->user()->email }}</p>

                        <!-- Role Badge -->
                        <div class="inline-flex items-center space-x-2">
                            <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm border border-white/20 rounded-full text-white font-semibold">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                                {{ ucfirst(auth()->user()->role) }}
                            </span>
                        </div>

                        <!-- Join Date -->
                        <p class="text-blue-200 text-sm">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Bergabung sejak {{ auth()->user()->created_at->format('d F Y') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Profile Details -->
            <div class="p-8 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Account Information -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-100">
                        <h3 class="flex items-center text-xl font-bold text-blue-800 mb-4">
                            <svg class="w-6 h-6 mr-3 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Informasi Akun
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Username:</span>
                                <span class="font-semibold text-gray-800">{{ auth()->user()->username }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Email:</span>
                                <span class="font-semibold text-gray-800">{{ auth()->user()->email }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Role:</span>
                                <span class="inline-flex items-center px-2 py-1 bg-{{ auth()->user()->role === 'admin' ? 'purple' : 'blue' }}-100 text-{{ auth()->user()->role === 'admin' ? 'purple' : 'blue' }}-800 rounded-full text-xs font-medium">
                                    {{ ucfirst(auth()->user()->role) }}
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Status:</span>
                                <span class="inline-flex items-center px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                    Active
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Summary -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-6 border border-indigo-100">
                        <h3 class="flex items-center text-xl font-bold text-indigo-800 mb-4">
                            <svg class="w-6 h-6 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            Ringkasan Aktivitas
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Booking:</span>
                                <span class="font-semibold text-gray-800">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Booking Aktif:</span>
                                <span class="font-semibold text-gray-800">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Terakhir Login:</span>
                                <span class="font-semibold text-gray-800">Sekarang</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('auth.edit', auth()->user()->id) }}"
                       class="flex-1 inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg hover:from-blue-600 hover:to-cyan-500 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Edit Profil
                    </a>
                    <a href="{{ route('settings') }}"
                       class="flex-1 sm:flex-none inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gray-100 text-gray-700 font-semibold shadow-md hover:bg-gray-200 hover:shadow-lg transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Pengaturan
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Security Card -->
            <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 p-6">
                <h3 class="flex items-center text-lg font-bold text-gray-800 mb-4">
                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5-6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2V8a2 2 0 00-2-2z"/>
                    </svg>
                    Keamanan Akun
                </h3>
                <div class="space-y-3 text-sm">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Two-Factor Auth:</span>
                        <span class="text-red-600 font-medium">Nonaktif</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Login Terakhir:</span>
                        <span class="text-green-600 font-medium">Sekarang</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Password:</span>
                        <button class="text-blue-600 font-medium hover:text-blue-700">Ubah</button>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 p-6">
                <h3 class="flex items-center text-lg font-bold text-gray-800 mb-4">
                    <svg class="w-5 h-5 mr-3 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Aksi Cepat
                </h3>
                <div class="space-y-2">
                    <a href="{{ route('rooms.index') }}" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors duration-200">
                        <svg class="w-4 h-4 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <span class="text-gray-700 font-medium">Lihat Ruangan</span>
                    </a>
                    <a href="{{ route('bookings.index') }}" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors duration-200">
                        <svg class="w-4 h-4 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">Riwayat Booking</span>
                    </a>
                </div>
            </div>
        </div>
    @else
        <!-- Not Logged In State -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/20 overflow-hidden">
            <div class="bg-gradient-to-r from-gray-500 to-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">Akses Terbatas</h2>
                <p class="text-gray-100 mt-1">Silakan login untuk melihat profil Anda</p>
            </div>
            <div class="p-8 text-center">
                <svg class="w-24 h-24 mx-auto text-gray-400 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <p class="text-gray-600 text-lg mb-6">Anda perlu login terlebih dahulu untuk mengakses halaman profil</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 rounded-lg bg-gray-100 text-gray-700 font-semibold shadow-md hover:bg-gray-200 hover:shadow-lg transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>

<style>
@keyframes fade-in-up {
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
    animation: fade-in-up 0.5s ease-out;
}
</style>
@endsection
