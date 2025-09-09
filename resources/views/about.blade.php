@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-6xl mt-8 px-4">
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
            <h1 class="text-3xl font-bold text-blue-800">Tentang Aplikasi</h1>
        </div>
    </div>

    <!-- Main About Card -->
    <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/20 overflow-hidden animate-fade-in-up mb-8">
        <!-- Hero Header -->
        <div class="bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-12">
            <div class="text-center">
                <!-- App Logo/Icon -->
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/20 shadow-2xl mx-auto">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl flex items-center justify-center border-4 border-white shadow-lg">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>

                <h2 class="text-4xl font-bold text-white mb-4">Booking App</h2>
                <p class="text-blue-100 text-xl mb-2">Sistem Manajemen Booking Ruangan</p>
                <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm border border-white/20 rounded-full text-white font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    Version 1.0
                </div>
            </div>
        </div>

        <!-- About Content -->
        <div class="p-8">
            <div class="max-w-4xl mx-auto">
                <!-- Description -->
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Solusi Modern untuk Manajemen Ruangan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Booking App adalah sistem manajemen booking ruangan yang dirancang untuk memudahkan pengelolaan dan pemesanan ruangan secara efisien. Dengan interface yang modern dan user-friendly, aplikasi ini menyediakan solusi lengkap untuk kebutuhan booking ruangan Anda.
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- Feature 1 -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-100 text-center hover:shadow-lg transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-blue-800 mb-2">Easy Booking</h4>
                        <p class="text-gray-600 text-sm">Sistem booking yang mudah dan intuitif untuk semua pengguna</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-6 border border-indigo-100 text-center hover:shadow-lg transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-indigo-800 mb-2">Room Management</h4>
                        <p class="text-gray-600 text-sm">Kelola semua ruangan dengan sistem yang terorganisir</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 text-center hover:shadow-lg transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-green-800 mb-2">Secure System</h4>
                        <p class="text-gray-600 text-sm">Sistem keamanan yang terjamin untuk data pengguna</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-100 text-center hover:shadow-lg transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-orange-800 mb-2">Real-time Analytics</h4>
                        <p class="text-gray-600 text-sm">Laporan dan statistik booking secara real-time</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100 text-center hover:shadow-lg transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-purple-800 mb-2">Mobile Friendly</h4>
                        <p class="text-gray-600 text-sm">Responsive design yang dapat diakses dari berbagai device</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6 border border-teal-100 text-center hover:shadow-lg transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-teal-800 mb-2">User Management</h4>
                        <p class="text-gray-600 text-sm">Manajemen pengguna dengan role dan permission</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Technology Stack -->
        <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 p-6">
            <h3 class="flex items-center text-lg font-bold text-gray-800 mb-4">
                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
                Technology Stack
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Framework:</span>
                    <span class="font-semibold text-red-600">Laravel</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Frontend:</span>
                    <span class="font-semibold text-blue-600">Blade Template & Tailwind CSS</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Database:</span>
                    <span class="font-semibold text-green-600">MySQL</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">JavaScript:</span>
                    <span class="font-semibold text-yellow-600">Alpine.js</span>
                </div>
            </div>
        </div>

        <!-- Contact & Support -->
        <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 p-6">
            <h3 class="flex items-center text-lg font-bold text-gray-800 mb-4">
                <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Support & Contact
            </h3>
            <div class="space-y-3 text-sm">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Email Support:</span>
                    <a href="mailto:support@bookingapp.com" class="text-blue-600 font-medium hover:text-blue-700">support@bookingapp.com</a>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Developer:</span>
                    <span class="text-gray-800 font-medium">Booking App Team</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Version:</span>
                    <span class="text-green-600 font-medium">v1.0.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Last Update:</span>
                    <span class="text-gray-600 font-medium">{{ date('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision -->
    <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-8 py-6">
            <h3 class="text-2xl font-bold text-white">Visi & Misi</h3>
        </div>
        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Vision -->
                <div>
                    <h4 class="flex items-center text-xl font-bold text-indigo-800 mb-4">
                        <svg class="w-6 h-6 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        Visi
                    </h4>
                    <p class="text-gray-600 leading-relaxed">
                        Menjadi platform terdepan dalam manajemen booking ruangan yang memberikan solusi efisien, modern, dan user-friendly untuk semua kebutuhan pemesanan ruangan di berbagai institusi dan organisasi.
                    </p>
                </div>

                <!-- Mission -->
                <div>
                    <h4 class="flex items-center text-xl font-bold text-purple-800 mb-4">
                        <svg class="w-6 h-6 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Misi
                    </h4>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-purple-500 mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Menyediakan sistem booking yang mudah dan intuitif
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-purple-500 mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Mengoptimalkan efisiensi penggunaan ruangan
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-purple-500 mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Memberikan pengalaman pengguna yang terbaik
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-purple-500 mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Terus berinovasi mengikuti perkembangan teknologi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="text-center">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Mulai Menggunakan Booking App</h3>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('rooms.index') }}"
               class="inline-flex items-center justify-center px-8 py-4 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg hover:from-blue-600 hover:to-cyan-500 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                Lihat Ruangan
            </a>
            <a href="{{ route('bookings.index') }}"
               class="inline-flex items-center justify-center px-8 py-4 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold shadow-lg hover:from-purple-600 hover:to-indigo-500 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Mulai Booking
            </a>
        </div>
    </div>
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
