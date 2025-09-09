@extends('layout.app')

@section('content')
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
                    Daftar Pengguna
                </h1>
                <p class="text-gray-600 text-lg">Kelola dan pantau semua pengguna terdaftar dengan mudah</p>
            </div>
            @if (Auth::check() && Auth::user()->role === 'admin')
                <a href="{{ route('auth.create') }}"
                   class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-600 via-blue-600 to-indigo-600 text-white font-bold text-lg rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-3xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300 animate-pulse"></div>
                    <span class="relative z-10 flex items-center gap-3">
                        <svg class="w-6 h-6 transform group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Tambah Pengguna Baru
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

        <!-- Main Table Container -->
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-cyan-600 via-blue-600 to-purple-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>
            <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20">
                <!-- Table Header Glow Effect -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500"></div>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-50 via-blue-50 to-indigo-50">
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        Nama Pengguna
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        Email
                                    </span>
                                </th>
                                <th class="px-8 py-6 text-left font-bold text-gray-800 text-lg tracking-wide border-b border-gray-200">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                        Role
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
                            @forelse($users as $user)
                            <tr class="group hover:bg-gradient-to-r hover:from-cyan-50/50 hover:via-blue-50/50 hover:to-indigo-50/50 transition-all duration-500 transform hover:scale-[1.01] hover:shadow-lg relative overflow-hidden">
                                <!-- Row Hover Effect -->
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/5 via-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-cyan-500 to-blue-600 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                            <span class="text-white font-bold text-lg">
                                                {{ strtoupper(substr($user->username, 0, 1)) }}
                                            </span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-xl bg-gradient-to-r from-blue-800 to-indigo-900 bg-clip-text text-transparent group-hover:from-cyan-600 group-hover:to-blue-600 transition-all duration-300">
                                                {{ $user->username }}
                                            </p>
                                            <p class="text-sm text-gray-500">ID: #{{ $user->id }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow duration-300">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 font-medium text-base group-hover:text-gray-900 transition-colors duration-300">
                                            {{ $user->email }}
                                        </span>
                                    </div>
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    @if($user->role === 'admin')
                                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-red-100 to-pink-100 group-hover:from-red-200 group-hover:to-pink-200 text-red-800 group-hover:text-red-900 font-bold rounded-full border-2 border-red-200 group-hover:border-pink-300 transition-all duration-300 shadow-sm group-hover:shadow-md">
                                            <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                                            Admin
                                        </div>
                                    @else
                                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-100 to-indigo-100 group-hover:from-blue-200 group-hover:to-indigo-200 text-blue-800 group-hover:text-blue-900 font-bold rounded-full border-2 border-blue-200 group-hover:border-indigo-300 transition-all duration-300 shadow-sm group-hover:shadow-md">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                                            User
                                        </div>
                                    @endif
                                </td>

                                <td class="px-8 py-6 relative z-10">
                                    @if (Auth::check() && Auth::user()->role === 'admin' && Auth::id() !== $user->id && $user->role !== 'admin')
                                        <div class="flex gap-3">
                                            <a href="{{ route('auth.edit', $user->id) }}"
                                               class="group/btn relative inline-flex items-center px-5 py-3 bg-gradient-to-r from-amber-400 to-orange-500 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <svg class="relative z-10 w-4 h-4 mr-2 transform group-hover/btn:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                <span class="relative z-10">Edit</span>
                                            </a>

                                            <form action="{{ route('auth.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengguna {{ $user->username }}?')" class="inline">
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
                                    @else
                                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-gray-100 to-gray-200 rounded-lg shadow-sm">
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
                                <td colspan="4" class="text-center py-16 relative">
                                    <div class="flex flex-col items-center justify-center space-y-4">
                                        <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                                            <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-xl font-bold text-gray-500 mb-2">Belum ada pengguna</h3>
                                            <p class="text-gray-400">Mulai dengan menambahkan pengguna pertama Anda</p>
                                        </div>
                                        @if (Auth::check() && Auth::user()->role === 'admin')
                                            <a href="{{ route('auth.create') }}"
                                               class="group/btn relative inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-600 via-blue-600 to-indigo-600 text-white font-bold rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                                <svg class="relative z-10 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                </svg>
                                                <span class="relative z-10">Tambah Pengguna</span>
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
@endsection
