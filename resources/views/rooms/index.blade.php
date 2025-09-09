@extends('layout.app')

@section('content')
@if (Auth::check() && Auth::user()->role === 'admin')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 relative overflow-hidden">
    <!-- Background Animation Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-cyan-400/10 to-teal-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12 gap-6">
            <div class="space-y-2">
                <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-indigo-900 bg-clip-text text-transparent">
                    Daftar Ruangan
                </h1>
                <p class="text-gray-600 text-lg">Kelola dan pantau semua ruangan dengan mudah</p>
            </div>
            @if (Auth::check() && Auth::user()->role === 'admin')
                <a href="{{ route('rooms.create') }}"
                   class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300 animate-pulse"></div>
                    <span class="relative z-10 flex items-center gap-3">
                        <svg class="w-6 h-6 transform group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Tambah Ruangan
                    </span>
                </a>
                @else
            @endif
        </div>

        <!-- Success Alert -->
        @if(session('success'))
            <div class="mb-8 transform animate-bounce">
                <div class="relative overflow-hidden px-6 py-4 bg-gradient-to-r from-emerald-400 via-green-500 to-teal-600 text-white font-semibold rounded-2xl shadow-2xl">
                    <div class="absolute inset-0 bg-white opacity-10 animate-pulse"></div>
                    <div class="relative z-10 flex items-center gap-3">
                        <svg class="w-6 h-6 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Main Table Container -->
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>
            <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20">
                <!-- Table Header Glow Effect -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-50 via-blue-50 to-indigo-50">
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                                        </svg>
                                        #
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        Gambar
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                        Nama Ruangan
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        Deskripsi
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        Kapasitas
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                        </svg>
                                        Aksi
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($rooms as $room)
                            <tr class="group hover:bg-gradient-to-r hover:from-blue-50/50 hover:via-indigo-50/50 hover:to-purple-50/50 transition-all duration-500 transform hover:scale-[1.01] hover:shadow-lg relative overflow-hidden">
                                <!-- Row Hover Effect -->
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 via-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 to-purple-600 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>

                                <td class="px-8 py-6 relative z-10">
                                    <span class="inline-flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 text-white font-bold rounded-xl shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        {{ $loop->iteration }}
                                    </span>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    @if($room->image)
                                        <div class="relative group/image">
                                            <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl opacity-0 group-hover/image:opacity-50 transition-opacity duration-300"></div>
                                            <img src="{{ asset('storage/'.$room->image) }}"
                                                 alt="Gambar Ruangan"
                                                 class="relative w-24 h-20 object-cover rounded-xl shadow-lg transform group-hover/image:scale-105 transition-all duration-300 border-2 border-white">
                                        </div>
                                    @else
                                        <div class="w-24 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl shadow-inner flex items-center justify-center group-hover:from-blue-100 group-hover:to-purple-100 transition-colors duration-300">
                                            <svg class="w-8 h-8 text-gray-400 group-hover:text-blue-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="font-bold text-xl bg-gradient-to-r from-blue-800 to-indigo-900 bg-clip-text text-transparent group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                                        {{ $room->name }}
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow duration-300">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 font-medium text-base leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                                            {{ $room->description }}
                                        </span>
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-100 to-indigo-100 group-hover:from-blue-200 group-hover:to-purple-200 text-blue-800 group-hover:text-blue-900 font-bold rounded-full border-2 border-blue-200 group-hover:border-purple-300 transition-all duration-300 shadow-sm group-hover:shadow-md">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        {{ $room->capacity }} Orang
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex gap-3">
                                        @if (Auth::check() && Auth::user()->role === 'admin')
                                            <a href="{{ route('rooms.edit', $room->id) }}"
                                               class="group/btn relative inline-flex items-center px-5 py-3 bg-gradient-to-r from-amber-400 to-orange-500 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <svg class="relative z-10 w-4 h-4 mr-2 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                <span class="relative z-10">Edit</span>
                                            </a>

                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
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
                                        @else
                                            <a href="{{ route('rooms.show', $room->id) }}"
                                                class="group/btn relative inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <span class="relative z-10">Detail & Booking</span>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.animate-shimmer {
    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.5) 50%, transparent 70%);
    background-size: 200% 100%;
    animation: shimmer 2s infinite;
}

.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

.hover\:shadow-3xl:hover {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.35);
}

@keyframes fade-in-up {
    0% { opacity: 0; transform: translateY(20px);}
    100% { opacity: 1; transform: translateY(0);}
}

@keyframes fade-in-down {
    0% { opacity: 0; transform: translateY(-20px);}
    100% { opacity: 1; transform: translateY(0);}
}

.animate-fade-in-up {
    animation: fade-in-up 0.7s cubic-bezier(.4,0,.2,1) both;
}

.animate-fade-in-down {
    animation: fade-in-down 0.7s cubic-bezier(.4,0,.2,1) both;
}
</style>
@else

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 relative overflow-hidden">
    <!-- Background Animation Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-cyan-400/10 to-teal-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-gradient-to-br from-indigo-400/5 to-purple-400/5 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>

    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12 gap-6">
            <div class="space-y-2">
                <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-indigo-900 bg-clip-text text-transparent animate-fade-in-down">
                    Daftar Ruangan
                </h1>
                <p class="text-gray-600 text-lg">Pilih ruangan sesuai kebutuhan Anda</p>
            </div>
            @if (Auth::check() && Auth::user()->role === 'admin')
                <a href="{{ route('rooms.create') }}"
                   class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300 animate-pulse"></div>
                    <span class="relative z-10 flex items-center gap-3">
                        <svg class="w-6 h-6 transform group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Tambah Ruangan
                    </span>
                </a>
            @endif
        </div>

        <!-- Success Alert -->
        @if(session('success'))
            <div class="mb-8 transform animate-bounce">
                <div class="relative overflow-hidden px-6 py-4 bg-gradient-to-r from-emerald-400 via-green-500 to-teal-600 text-white font-semibold rounded-2xl shadow-2xl">
                    <div class="absolute inset-0 bg-white opacity-10 animate-pulse"></div>
                    <div class="relative z-10 flex items-center gap-3">
                        <svg class="w-6 h-6 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Room Cards Section -->

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($rooms as $room)
                    <div class="group relative animate-fade-in-up" style="animation-delay: {{ $loop->index * 0.1 }}s">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden group-hover:scale-[1.03] transition-all duration-500 border border-white/50">

                            <!-- Image Section -->
                            <div class="relative overflow-hidden">
                                @if($room->image)
                                    <img src="{{ asset('storage/'.$room->image) }}"
                                         alt="{{ $room->name }}"
                                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <div class="w-full h-56 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center group-hover:from-blue-200 group-hover:to-purple-300 transition-all duration-500">
                                        <div class="text-center">
                                            <svg class="w-16 h-16 text-gray-400 group-hover:text-blue-500 mx-auto mb-2 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                            <p class="text-gray-500 font-medium">{{ $room->name }}</p>
                                        </div>
                                    </div>
                                @endif

                                <!-- Overlay Gradient -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                <!-- Capacity Badge -->
                                <div class="absolute top-4 right-4 inline-flex items-center gap-2 bg-blue-600/90 backdrop-blur-sm text-white text-sm px-4 py-2 rounded-full shadow-lg font-bold transform group-hover:scale-110 transition-all duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    {{ $room->capacity }} Orang
                                </div>

                                <!-- Status Badge -->
                                <div class="absolute top-4 left-4 inline-flex items-center gap-2 bg-green-500/90 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full shadow-lg font-bold">
                                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                                    Tersedia
                                </div>
                            </div>

                            <!-- Content Section -->
                            <div class="p-6">
                                <!-- Room Name -->
                                <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-800 via-indigo-900 to-purple-900 bg-clip-text text-transparent mb-3 group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                                    {{ $room->name }}
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 text-base leading-relaxed mb-6 group-hover:text-gray-700 transition-colors duration-300">
                                    {{ Str::limit($room->description ?? 'Ruangan modern dengan fasilitas lengkap untuk berbagai keperluan.', 80) }}
                                </p>

                                <!-- Facilities Icons -->
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="flex items-center justify-center w-8 h-8 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-300">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-lg group-hover:bg-green-200 transition-colors duration-300">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-center w-8 h-8 bg-purple-100 rounded-lg group-hover:bg-purple-200 transition-colors duration-300">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-center w-8 h-8 bg-cyan-100 rounded-lg group-hover:bg-cyan-200 transition-colors duration-300">
                                        <svg class="w-4 h-4 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="flex items-center justify-between">
                                    @if (Auth::check() && Auth::user()->role === 'admin')
                                        <div class="flex gap-2">
                                            <a href="{{ route('rooms.edit', $room->id) }}"
                                               class="group/btn relative inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-400 to-orange-500 text-white font-bold rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <svg class="relative z-10 w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                <span class="relative z-10 text-sm">Edit</span>
                                            </a>

                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="group/btn relative inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-600 text-white font-bold rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                    <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-purple-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                    <svg class="relative z-10 w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                    <span class="relative z-10 text-sm">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="inline-flex items-center gap-2 text-sm text-gray-500 font-medium">
                                            <svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            Gedung Utama
                                        </div>
                                    @endif

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

            <!-- Empty State -->
            @if($rooms->count() == 0)
                <div class="text-center py-16">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl blur opacity-20"></div>
                        <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl p-12 shadow-2xl border border-white/20">
                            <svg class="w-24 h-24 text-gray-400 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Belum Ada Ruangan</h3>
                            <p class="text-gray-600 mb-6">Tidak ada ruangan yang tersedia saat ini.</p>
                            @if (Auth::check() && Auth::user()->role === 'admin')
                                <a href="{{ route('rooms.create') }}"
                                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Tambah Ruangan Pertama
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.animate-shimmer {
    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.5) 50%, transparent 70%);
    background-size: 200% 100%;
    animation: shimmer 2s infinite;
}

.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

.hover\:shadow-3xl:hover {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.35);
}

@keyframes fade-in-up {
    0% { opacity: 0; transform: translateY(20px);}
    100% { opacity: 1; transform: translateY(0);}
}

@keyframes fade-in-down {
    0% { opacity: 0; transform: translateY(-20px);}
    100% { opacity: 1; transform: translateY(0);}
}

.animate-fade-in-up {
    animation: fade-in-up 0.7s cubic-bezier(.4,0,.2,1) both;
}

.animate-fade-in-down {
    animation: fade-in-down 0.7s cubic-bezier(.4,0,.2,1) both;
}
</style>

@endif
@endsection
