<!-- resources/views/partial/navbar.blade.php -->
<nav class="relative shadow-xl z-20">
  <!-- SVG Motif Pattern -->
  <div class="absolute inset-0 w-full h-full pointer-events-none z-0">
    <svg width="100%" height="100%">
      <defs>
        <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <circle cx="1" cy="1" r="1.5" fill="#ffffff22"/>
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#dots)" />
    </svg>
  </div>
  <!-- Gradient Background -->
  <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-indigo-900 via-sky-700 to-cyan-500 opacity-95 z-0"></div>
  <div class="relative z-30 container mx-auto px-4 py-3 flex justify-between items-center">
    <a href="{{ route('home') }}" class="text-3xl font-black tracking-wider text-white drop-shadow-lg hover:text-yellow-300 transition-all duration-300">Booking App</a>
    <div class="flex items-center space-x-8">
      <a href="{{ route('home') }}" class="relative px-4 py-2 rounded-lg text-white font-semibold hover:bg-cyan-700/70 hover:text-yellow-300 transition-all duration-300 shadow hover:scale-105" aria-label="Home">Home</a>
      <a href="{{ route('rooms.index') }}" class="relative px-4 py-2 rounded-lg text-white font-semibold hover:bg-cyan-700/70 hover:text-yellow-300 transition-all duration-300 shadow hover:scale-105" aria-label="Daftar Ruangan">Daftar Ruangan</a>
      <a href="{{ route('bookings.index') }}" class="relative px-4 py-2 rounded-lg text-white font-semibold hover:bg-cyan-700/70 hover:text-yellow-300 transition-all duration-300 shadow hover:scale-105" aria-label="Daftar Booking">Daftar Booking</a>
      <!-- User Dropdown -->
      <div x-data="{ open: false }" class="relative z-50" x-init="open = false" @keydown.escape="open = false" x-cloak>
        <button @click="open = !open"
                class="flex items-center px-4 py-2 rounded-lg bg-sky-800 hover:bg-sky-900 transition-all duration-300 focus:outline-none shadow hover:scale-105"
                aria-label="User Menu"
                aria-haspopup="true"
                :aria-expanded="open">
          <span class="mr-2 text-lg">👤</span>
          <svg class="w-4 h-4 fill-current text-white transition-all duration-300" :class="{'rotate-180': open}" viewBox="0 0 20 20">
            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
          </svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 scale-90 -translate-y-4"
          x-transition:enter-end="opacity-100 scale-100 translate-y-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 scale-100 translate-y-0"
          x-transition:leave-end="opacity-0 scale-90 -translate-y-4"
          @click.away="open = false"
          class="absolute right-0 mt-3 w-52 bg-white/90 backdrop-blur-md rounded-xl shadow-2xl ring-1 ring-cyan-200 z-100 origin-top-right"
          role="menu"
          aria-orientation="vertical"
          :style="open ? '' : 'display: none;'">
          <a href="{{ route('profile') }}" class="block px-5 py-3 text-gray-700 font-medium hover:bg-cyan-50 transition-all duration-200" role="menuitem">Profile</a>
          <a href="{{ route('settings') }}" class="block px-5 py-3 text-gray-700 font-medium hover:bg-cyan-50 transition-all duration-200" role="menuitem">Settings</a>
          <div class="border-t my-1"></div>
          <form action="{{ route('logout') }}" method="POST" class="block">
            @csrf
            <button type="submit" class="block w-full text-left px-5 py-3 text-red-600 font-medium hover:bg-red-100 transition-all duration-200" role="menuitem">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="//unpkg.com/alpinejs" defer></script>
