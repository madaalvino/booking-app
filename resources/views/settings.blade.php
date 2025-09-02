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
                    Pengaturan
                </h1>
                <p class="text-gray-600 text-lg">Kelola preferensi dan keamanan akun Anda</p>
            </div>
        </div>

        <!-- Settings Card -->
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-all duration-500"></div>
            <div class="relative overflow-hidden bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 p-6">
                <div class="p-4 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-lg font-semibold text-gray-800">Pengaturan Akun</h3>
                    <p class="text-gray-600 mt-2">Informasi akun Anda ditampilkan di sini. Fitur pengeditan akan tersedia nanti.</p>
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
</style>
@endsection
