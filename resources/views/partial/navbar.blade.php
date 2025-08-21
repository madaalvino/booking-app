<nav class="bg-blue-600 text-white shadow">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <a href="{{ route('home') }}" class="text-xl font-bold">Booking App</a>
    <div class="space-x-4">
      <a href="{{ route('home') }}" class="hover:underline">Home</a>
      <a href="{{ route('rooms.index') }}" class="hover:underline">Daftar Ruangan</a>
      <a href="{{ route('bookings.index') }}" class="hover:underline">Daftar Booking</a>
    </div>
  </div>
</nav>
