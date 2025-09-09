@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-2xl mt-8 px-4">
    <!-- Header Section with Back Button -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-4">
            <a href="{{ url()->previous() }}"
               class="inline-flex items-center justify-center w-12 h-12 bg-white/80 hover:bg-white border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 text-gray-700 hover:text-gray-900 group"
               title="Kembali">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>
            <div class="h-6 w-px bg-gray-300"></div>
            <h1 class="text-3xl font-bold text-blue-800">Tambah Pengguna Baru</h1>
        </div>
    </div>

    <!-- Main Form Card -->
    <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/20 overflow-hidden animate-fade-in-up">
        <!-- Card Header -->
        <div class="bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-6">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">Form Tambah Pengguna</h2>
                    <p class="text-blue-100 mt-1">Lengkapi informasi pengguna dengan detail yang akurat</p>
                </div>
            </div>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mx-8 mt-6 animate-fade-in-down">
                <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-4 shadow-sm">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="text-red-800 font-semibold">Terdapat kesalahan dalam pengisian form:</h3>
                            <ul class="list-disc pl-5 mt-2 text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Success Messages -->
        @if (session('success'))
            <div class="mx-8 mt-6 animate-fade-in-down">
                <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-4 shadow-sm">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="text-green-800 font-semibold">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Form Content -->
        <div class="p-8">
            <form action="{{ route('auth.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Name Field -->
                <div class="space-y-2">
                    <label for="name" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Nama
                    </label>
                    <input type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           placeholder="Contoh: John Doe"
                           class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 focus:outline-none"
                           required>
                </div>

                <!-- Email Field -->
                <div class="space-y-2">
                    <label for="email" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           placeholder="Contoh: johndoe@example.com"
                           class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 focus:outline-none"
                           required>
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <label for="password" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        Kata Sandi
                    </label>
                    <input type="password"
                           name="password"
                           id="password"
                           placeholder="Minimal 8 karakter"
                           class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 focus:outline-none"
                           required>
                </div>

                <!-- Password Confirmation Field -->
                <div class="space-y-2">
                    <label for="password_confirmation" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        Konfirmasi Kata Sandi
                    </label>
                    <input type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           placeholder="Ketik ulang kata sandi"
                           class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 focus:outline-none"
                           required>
                </div>

                <!-- Role Field -->
                <div class="space-y-2">
                    <label for="role" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Role
                    </label>
                    <select name="role"
                            id="role"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 focus:outline-none"
                            required>
                        <option value="" disabled selected>-- Pilih Role --</option>
                        <option value="pengguna">Pengguna</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3 pt-6">
                    <button type="submit"
                            class="flex-1 inline-flex items-center justify-center py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg hover:from-blue-600 hover:to-cyan-500 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Simpan Pengguna
                    </button>
                    <a href="{{ url()->previous() }}"
                       class="flex-1 inline-flex items-center justify-center py-3 rounded-lg bg-gray-100 text-gray-700 font-semibold shadow-md hover:bg-gray-200 hover:shadow-lg transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Info Card -->
    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-xl p-6">
        <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
            </svg>
            <div>
                <h3 class="font-semibold text-blue-800 mb-2">Tips Pengisian Form:</h3>
                <ul class="text-blue-700 text-sm space-y-1">
                    <li>• Gunakan nama lengkap yang mudah diingat dan identifikasi</li>
                    <li>• Pastikan alamat email valid dan belum terdaftar sebelumnya</li>
                    <li>• Kata sandi harus aman dengan minimal 8 karakter</li>
                    <li>• Pilih role sesuai dengan tingkat akses yang diperlukan</li>
                </ul>
            </div>
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

@keyframes fade-in-down {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.5s ease-out;
}

.animate-fade-in-down {
    animation: fade-in-down 0.3s ease-out;
}
</style>
@endsection
