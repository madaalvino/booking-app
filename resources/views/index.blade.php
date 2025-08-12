@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-blue-700 mb-2">Booking Ruangan</h1>
        <p class="text-gray-600">Pesan ruangan dengan mudah dan cepat untuk kebutuhan meeting, seminar, atau acara lainnya.</p>
    </div>
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Form Booking -->
        <div class="w-full md:w-1/2 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Form Booking</h2>
            <form action="{{ url('/booking') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Nama</label>
                    <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Ruangan</label>
                    <select name="ruangan" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                        <option value="">Pilih Ruangan</option>
                        <option value="Ruang Meeting 1">Ruang Meeting 1</option>
                        <option value="Ruang Meeting 2">Ruang Meeting 2</option>
                        <option value="Aula">Aula</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Tanggal</label>
                    <input type="date" name="tanggal" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Waktu</label>
                    <input type="time" name="waktu" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                </div>
                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-semibold rounded-lg px-4 py-2 hover:bg-blue-700 transition duration-200">Pesan Sekarang</button>
                </div>
            </form>
        </div>
        <!-- Info Ruangan dengan Foto -->
        <div class="w-full md:w-1/2 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Info Ruangan</h2>
            <div class="space-y-6">
                <div class="flex gap-4 items-center border-b pb-4">
                    <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80" alt="Ruang Meeting 1" class="w-24 h-20 object-cover rounded-lg shadow">
                    <div>
                        <h3 class="font-semibold text-gray-800">Ruang Meeting 1</h3>
                        <p class="text-gray-600 text-sm">Kapasitas: 10 orang</p>
                        <p class="text-gray-600 text-sm">Fasilitas: Proyektor, Whiteboard, Wifi</p>
                    </div>
                </div>
                <div class="flex gap-4 items-center border-b pb-4">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Ruang Meeting 2" class="w-24 h-20 object-cover rounded-lg shadow">
                    <div>
                        <h3 class="font-semibold text-gray-800">Ruang Meeting 2</h3>
                        <p class="text-gray-600 text-sm">Kapasitas: 20 orang</p>
                        <p class="text-gray-600 text-sm">Fasilitas: Proyektor, Whiteboard, Wifi, Teleconference</p>
                    </div>
                </div>
                <div class="flex gap-4 items-center">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Aula" class="w-24 h-20 object-cover rounded-lg shadow">
                    <div>
                        <h3 class="font-semibold text-gray-800">Aula</h3>
                        <p class="text-gray-600 text-sm">Kapasitas: 100 orang</p>
                        <p class="text-gray-600 text-sm">Fasilitas: Panggung, Proyektor, Wifi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

