@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-purple-50 relative">
    <!-- Enhanced Background Animation -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-72 h-72 bg-gradient-to-br from-indigo-200/20 to-purple-200/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-32 left-16 w-80 h-80 bg-gradient-to-tr from-blue-200/15 to-cyan-200/15 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-pink-100/10 to-indigo-100/10 rounded-full blur-3xl animate-pulse"></div>
    </div>

    <div class="container mx-auto px-6 py-8 relative z-10">
        <!-- Enhanced Header Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full shadow-xl mb-6 animate-bounce-subtle">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
            </div>
            <h1 class="text-5xl lg:text-6xl font-black mb-4 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-gradient">
                Daftar Pengguna
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Kelola dan pantau semua pengguna terdaftar dengan mudah
            </p>
        </div>

        <!-- Action Button -->
        @if (Auth::check() && Auth::user()->role === 'admin')
            <div class="flex justify-center mb-10">
                <a href="{{ route('auth.create') }}"
                   class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold rounded-2xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <svg class="relative z-10 w-6 h-6 mr-3 transform group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    <span class="relative z-10 text-lg">Tambah Pengguna Baru</span>
                    <div class="absolute top-0 left-0 w-full h-full bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                </a>
            </div>
        @endif

        <!-- Enhanced Table Container -->
        <div class="relative max-w-7xl mx-auto">
            <!-- Glow Effect -->
            <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500/20 via-purple-500/20 to-pink-500/20 rounded-3xl blur-xl opacity-60 animate-pulse-slow"></div>

            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/50 overflow-hidden">
                <!-- Table Header with Stats -->
                <div class="bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 px-8 py-6 border-b border-indigo-100">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">Total Pengguna</h3>
                                <p class="text-indigo-600 font-semibold text-lg">{{ count($users) }} pengguna terdaftar</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-ping"></div>
                            <span>Live Data</span>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <th class="px-8 py-6 text-left">
                                    <div class="flex items-center gap-3 font-bold text-gray-800 text-lg group cursor-pointer">
                                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        </div>
                                        <span class="group-hover:text-indigo-600 transition-colors duration-300">Nama Pengguna</span>
                                    </div>
                                </th>
                                <th class="px-8 py-6 text-left">
                                    <div class="flex items-center gap-3 font-bold text-gray-800 text-lg group cursor-pointer">
                                        <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <span class="group-hover:text-emerald-600 transition-colors duration-300">Email</span>
                                    </div>
                                </th>
                                <th class="px-8 py-6 text-left">
                                    <div class="flex items-center gap-3 font-bold text-gray-800 text-lg group cursor-pointer">
                                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                            </svg>
                                        </div>
                                        <span class="group-hover:text-purple-600 transition-colors duration-300">Role</span>
                                    </div>
                                </th>
                                <th class="px-8 py-6 text-left">
                                    <div class="flex items-center gap-3 font-bold text-gray-800 text-lg group cursor-pointer">
                                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-orange-600 rounded-lg flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                            </svg>
                                        </div>
                                        <span class="group-hover:text-amber-600 transition-colors duration-300">Aksi</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100/50">
                            @forelse($users as $index => $user)
                            <tr class="group hover:bg-gradient-to-r hover:from-indigo-50/30 hover:via-purple-50/30 hover:to-pink-50/30 transition-all duration-500 relative animate-slide-in" style="animation-delay: {{ $index * 100 }}ms">
                                <!-- Hover Effects -->
                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/5 via-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>

                                <!-- User Avatar & Name -->
                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full flex items-center justify-center shadow-lg font-bold text-white text-lg group-hover:scale-110 transition-transform duration-300">
                                            {{ strtoupper(substr($user->username, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-xl text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">
                                                {{ $user->username }}
                                            </p>
                                            <p class="text-sm text-gray-500">ID: #{{ $user->id }}</p>
                                        </div>
                                    </div>
                                </td>

                                <!-- Email -->
                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 font-medium text-base group-hover:text-emerald-600 transition-colors duration-300">
                                            {{ $user->email }}
                                        </span>
                                    </div>
                                </td>

                                <!-- Role Badge -->
                                <td class="px-8 py-6 relative z-10">
                                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold
                                        {{ $user->role === 'admin'
                                            ? 'bg-gradient-to-r from-red-100 to-pink-100 text-red-700 border border-red-200'
                                            : 'bg-gradient-to-r from-blue-100 to-indigo-100 text-blue-700 border border-blue-200'
                                        }}
                                        shadow-lg group-hover:scale-105 transition-transform duration-300">
                                        <div class="w-2 h-2 {{ $user->role === 'admin' ? 'bg-red-500' : 'bg-blue-500' }} rounded-full mr-2 animate-pulse"></div>
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>

                                <!-- Actions -->
                                <td class="px-8 py-6 relative z-10">
                                    @if (Auth::check() && Auth::user()->role === 'admin' && Auth::id() !== $user->id && $user->role !== 'admin')
                                        <div class="flex gap-3">
                                            <!-- Edit Button -->
                                            <a href="{{ route('auth.edit', $user->id) }}"
                                               class="group/btn relative inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-400 to-orange-500 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <svg class="relative z-10 w-4 h-4 mr-2 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                <span class="relative z-10">Edit</span>
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('auth.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengguna {{ $user->username }}?')" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="group/btn relative inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-600 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                    <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-purple-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                    <svg class="relative z-10 w-4 h-4 mr-2 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                    <span class="relative z-10">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="flex items-center gap-2 px-4 py-2 bg-gray-100 rounded-lg">
                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                            </svg>
                                            <span class="text-gray-500 text-sm font-medium">
                                                {{ Auth::user()->role !== 'admin' ? 'Akses Terbatas' : 'Tidak Bisa Edit Admin' }}
                                            </span>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-16">
                                    <div class="text-center">
                                        <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full shadow-lg mb-6 animate-bounce-subtle">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-2xl font-bold text-gray-500 mb-2">Belum Ada Pengguna</h3>
                                        <p class="text-gray-400 mb-6">Mulai dengan menambahkan pengguna pertama Anda</p>
                                        @if (Auth::check() && Auth::user()->role === 'admin')
                                            <a href="{{ route('auth.create') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                </svg>
                                                Tambah Pengguna
                                            </a>
                                        @endif
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
</div>

<!-- Custom CSS for animations -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(3deg); }
    }

    @keyframes float-delayed {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(-2deg); }
    }

    @keyframes bounce-subtle {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }

    @keyframes slide-in {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes gradient {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 0.6; }
        50% { opacity: 0.8; }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float-delayed 8s ease-in-out infinite;
    }

    .animate-bounce-subtle {
        animation: bounce-subtle 3s ease-in-out infinite;
    }

    .animate-slide-in {
        animation: slide-in 0.6s ease-out forwards;
        opacity: 0;
    }

    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient 3s ease infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
</style>
@endsection 
