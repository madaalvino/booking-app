@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-lg mt-10 bg-white/90 rounded-2xl shadow-2xl p-8 animate-fade-in-up">
    <h2 class="text-2xl font-bold text-blue-800 mb-6">Edit Ruangan</h2>

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

    <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block font-semibold text-gray-700 mb-1">Nama Ruangan</label>
            <input type="text" name="name" id="name"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none"
                value="{{ old('name', $room->name) }}" required>
        </div>
        <div>
            <label for="description" class="block font-semibold text-gray-700 mb-1">Deskripsi</label>
            <textarea name="description" id="description"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none"
                rows="3" required>{{ old('description', $room->description) }}</textarea>
        </div>
        <div>
            <label for="capacity" class="block font-semibold text-gray-700 mb-1">Kapasitas</label>
            <input type="number" name="capacity" id="capacity"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none"
                value="{{ old('capacity', $room->capacity) }}" min="1" required>
        </div>
        <div>
            <label for="image" class="block font-semibold text-gray-700 mb-1">Gambar Ruangan</label>
            @if($room->image)
                <img src="{{ asset('storage/'.$room->image) }}" alt="Gambar Ruangan" class="mb-2 rounded-lg w-full h-40 object-cover">
            @endif
            <input type="file" name="image" accept="image/*" class="w-full px-2 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
            <small class="text-gray-500">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>
        <button type="submit"
            class="w-full py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow hover:from-blue-600 hover:to-cyan-500 transition-all duration-300">
            Update
        </button>
    </form>

    <style>
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px);}
            100% { opacity: 1; transform: translateY(0);}
        }
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px);}
            100% { opacity: 1; transform: translateY(0);}
        }
        .animate-fade-in-up { animation: fade-in-up 0.7s cubic-bezier(.4,0,.2,1) both;}
        .animate-fade-in-down { animation: fade-in-down 0.7s cubic-bezier(.4,0,.2,1) both;}
    </style>
</div>
@endsection
