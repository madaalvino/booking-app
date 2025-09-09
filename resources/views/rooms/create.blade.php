@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-2xl mt-8 px-4">
    <!-- Header Section with Back Button -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-4">
            <a href="{{ route('rooms.index') }}"
               class="inline-flex items-center justify-center w-12 h-12 bg-white/80 hover:bg-white border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 text-gray-700 hover:text-gray-900 group"
               title="Kembali ke Daftar Ruangan">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>
            <div class="h-6 w-px bg-gray-300"></div>
            <h1 class="text-3xl font-bold text-blue-800">Tambah Ruangan Baru</h1>
        </div>
    </div>

    <!-- Main Form Card -->
    <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/20 overflow-hidden animate-fade-in-up">
        <!-- Card Header -->
        <div class="bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-6">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">Form Tambah Ruangan</h2>
                    <p class="text-blue-100 mt-1">Lengkapi informasi ruangan dengan detail yang akurat</p>
                </div>
            </div>
        </div>

        <!-- Error Messages -->
        @if($errors->any())
            <div class="mx-8 mt-6 animate-fade-in-down">
                <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-4 shadow-sm">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="text-red-800 font-semibold">Terdapat kesalahan dalam pengisian form:</h3>
                            <ul class="list-disc pl-5 mt-2 text-red-700">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Form Content -->
        <div class="p-8">
            <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Room Name Field -->
                <div class="space-y-2">
                    <label for="name" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Nama Ruangan
                    </label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300"
                           value="{{ old('name') }}"
                           placeholder="Masukkan nama ruangan">
                </div>

                <!-- Description Field -->
                <div class="space-y-2">
                    <label for="description" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                        Deskripsi
                    </label>
                    <textarea name="description"
                              id="description"
                              rows="4"
                              class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 resize-none"
                              placeholder="Berikan deskripsi detail tentang ruangan">{{ old('description') }}</textarea>
                </div>

                <!-- Capacity Field -->
                <div class="space-y-2">
                    <label for="capacity" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Kapasitas
                    </label>
                    <input type="number"
                           name="capacity"
                           id="capacity"
                           class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300"
                           value="{{ old('capacity') }}"
                           placeholder="Jumlah orang yang dapat ditampung"
                           min="1">
                </div>

                <!-- Image Upload Field -->
                <div class="space-y-2">
                    <label for="image" class="flex items-center font-semibold text-gray-700">
                        <svg class="w-4 h-4 mr-2 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Gambar Ruangan
                    </label>
                    <div class="relative">
                        <input type="file"
                               name="image"
                               id="image"
                               accept="image/*"
                               class="w-full px-4 py-3 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 transition-all duration-200 hover:border-gray-300 file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-cyan-50 file:text-cyan-700 hover:file:bg-cyan-100">
                        <p class="text-sm text-gray-500 mt-2">Format yang didukung: JPG, PNG, GIF (Maksimal 2MB)</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button type="submit"
                            class="flex-1 inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg hover:from-blue-600 hover:to-cyan-500 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Simpan Ruangan
                    </button>
                    <a href="{{ route('rooms.index') }}"
                       class="flex-1 sm:flex-none inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gray-100 text-gray-700 font-semibold shadow-md hover:bg-gray-200 hover:shadow-lg transition-all duration-300">
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
                    <li>• Gunakan nama ruangan yang deskriptif dan mudah diingat</li>
                    <li>• Berikan deskripsi yang lengkap tentang fasilitas dan kegunaan ruangan</li>
                    <li>• Pastikan kapasitas sesuai dengan kondisi fisik ruangan</li>
                    <li>• Upload gambar dengan kualitas baik untuk mempermudah identifikasi</li>
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
