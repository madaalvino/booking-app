@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Ruangan</h2>
        <a href="{{ route('rooms.create') }}"
           class="inline-block px-5 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold shadow hover:from-blue-600 hover:to-cyan-500 transition-all duration-300">
            + Tambah Ruangan
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 animate-fade-in-down">
            <div class="px-4 py-3 rounded-lg bg-green-100 text-green-800 font-semibold shadow">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="overflow-x-auto bg-white/90 shadow-2xl rounded-2xl p-4 animate-fade-in-up backdrop-blur">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gradient-to-r from-blue-100 via-cyan-100 to-teal-100 text-gray-700">
                    <th class="px-4 py-3 text-left font-semibold">No</th>
                    <th class="px-4 py-3 text-left font-semibold">Gambar</th>
                    <th class="px-4 py-3 text-left font-semibold">Nama Ruangan</th>
                    <th class="px-4 py-3 text-left font-semibold">Deskripsi</th>
                    <th class="px-4 py-3 text-left font-semibold">Kapasitas</th>
                    <th class="px-4 py-3 text-left font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr class="border-b last:border-none hover:bg-cyan-50/70 transition-all duration-200 group">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">
                        @if($room->image)
                            <img src="{{ asset('storage/'.$room->image) }}" alt="Gambar Ruangan" class="w-20 h-14 object-cover rounded shadow">
                        @else
                            <span class="text-gray-400 text-xs">-</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 font-bold text-blue-800">{{ $room->name }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $room->description }}</td>
                    <td class="px-4 py-3">
                        <span class="inline-block px-3 py-1 rounded-full bg-blue-100 text-blue-700 font-semibold text-xs">
                            {{ $room->capacity }} Orang
                        </span>
                    </td>
                    <td class="px-4 py-3 flex gap-2">
                        <a href="{{ route('rooms.edit', $room->id) }}"
                           class="px-3 py-1 rounded-lg bg-yellow-400/90 text-white font-semibold shadow hover:bg-yellow-500 transition-all duration-200 text-xs">
                            Edit
                        </a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 rounded-lg bg-red-500/90 text-white font-semibold shadow hover:bg-red-600 transition-all duration-200 text-xs">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
