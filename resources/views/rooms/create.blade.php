@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-lg mt-10 bg-white/90 rounded-2xl shadow-2xl p-8 animate-fade-in-up">
    <h2 class="text-2xl font-bold text-blue-800 mb-6">Tambah Ruangan</h2>

    @if($errors->any())
        <div class="mb-4 animate-fade-in-down">
            <div class="px-4 py-3 rounded-lg bg-red-100 text-red-800 font-semibold shadow">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        <div>
            <label for="name" class="block font-semibold text-gray-700 mb-1">Nama Ruangan</label>
            <input type="text" name="name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none" value="{{ old('name') }}">
        </div>
        <div>
            <label for="description" class="block font-semibold text-gray-700 mb-1">Deskripsi</label>
            <textarea name="description" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="capacity" class="block font-semibold text-gray-700 mb-1">Kapasitas</label>
            <input type="number" name="capacity" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none" value="{{ old('capacity') }}">
        </div>
        <div>
            <label for="image" class="block font-semibold text-gray-700 mb-1">Gambar Ruangan</label>
            <input type="file" name="image" accept="image/*" class="w-full px-2 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
        </div>
        <button type="submit"
            class="w-full py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow hover:from-blue-600 hover:to-cyan-500 transition-all duration-300">
            Simpan
        </button>
    </form>
</div>
@endsection
