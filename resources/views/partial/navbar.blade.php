<nav class="relative shadow-2xl z-20 border-b border-white/10">
  <!-- Animated Background Patterns -->
  <div class="absolute inset-0 w-full h-full pointer-events-none z-0 overflow-hidden">
    <!-- Geometric Pattern -->
    <svg width="100%" height="100%" class="absolute inset-0">
      <defs>
        <!-- Modern Hexagon Pattern -->
        <pattern id="hexPattern" x="0" y="0" width="60" height="52" patternUnits="userSpaceOnUse">
          <polygon points="30,1 45,15 45,37 30,51 15,37 15,15" fill="none" stroke="#ffffff08" stroke-width="1"/>
          <circle cx="30" cy="26" r="2" fill="#ffffff15"/>
        </pattern>
        <!-- Flowing Lines Pattern -->
        <pattern id="flowPattern" x="0" y="0" width="100" height="40" patternUnits="userSpaceOnUse">
          <path d="M0,20 Q25,5 50,20 T100,20" stroke="#ffffff06" stroke-width="1" fill="none"/>
          <path d="M0,30 Q25,15 50,30 T100,30" stroke="#ffffff04" stroke-width="1" fill="none"/>
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#hexPattern)" />
      <rect width="100%" height="100%" fill="url(#flowPattern)" />
    </svg>

    <!-- Floating Orbs -->
    <div class="absolute top-2 left-1/4 w-32 h-32 bg-gradient-to-br from-cyan-400/10 to-blue-400/5 rounded-full blur-2xl animate-pulse"></div>
    <div class="absolute -top-6 right-1/3 w-24 h-24 bg-gradient-to-br from-blue-400/10 to-indigo-400/5 rounded-full blur-2xl animate-pulse delay-1000"></div>
  </div>

  <!-- Main Gradient Background with Glass Effect -->
  <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-slate-900 via-blue-900 to-cyan-900 opacity-95 z-0"></div>
  <div class="absolute inset-0 w-full h-full bg-gradient-to-b from-transparent via-transparent to-black/10 z-1"></div>

  <!-- Main Navigation Content -->
  <div class="relative z-10 container mx-auto px-6 py-4">
    <div class="flex justify-between items-center">
      <!-- Logo Section with Enhanced Design -->
      <div class="flex items-center space-x-4">
        <a href="{{ route('home') }}" class="group flex items-center space-x-3">
          <!-- Logo Icon -->
          <div class="relative">
            <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center shadow-xl group-hover:shadow-cyan-500/25 transition-all duration-300 group-hover:scale-110">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
            </div>
            <div class="absolute -top-1 -right-1 w-4 h-4 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full animate-pulse"></div>
          </div>

          <!-- Brand Text -->
          <div class="flex flex-col">
            <span class="text-2xl font-black bg-gradient-to-r from-white via-cyan-100 to-blue-200 bg-clip-text text-transparent tracking-wide group-hover:from-yellow-200 group-hover:via-cyan-200 group-hover:to-white transition-all duration-300">
              Booking App
            </span>
            <span class="text-xs text-cyan-200/70 font-medium tracking-widest uppercase">
              Room Management
            </span>
          </div>
        </a>
      </div>

      <!-- Main Navigation Links -->
      <div class="hidden lg:flex items-center space-x-2">
        <a href="{{ route('home') }}" class="group relative px-6 py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm"></div>
          <div class="absolute inset-0 border border-cyan-400/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <span class="relative flex items-center space-x-2 group-hover:text-cyan-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span>Home</span>
          </span>
        </a>

        <a href="{{ route('rooms.index') }}" class="group relative px-6 py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm"></div>
          <div class="absolute inset-0 border border-cyan-400/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <span class="relative flex items-center space-x-2 group-hover:text-cyan-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <span>Daftar Ruangan</span>
          </span>
        </a>

        <a href="{{ route('bookings.index') }}" class="group relative px-6 py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm"></div>
          <div class="absolute inset-0 border border-cyan-400/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <span class="relative flex items-center space-x-2 group-hover:text-cyan-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
@if (Auth::check() && Auth::user()->role === 'admin')
            <span>Daftar Booking</span>
          </span>
@else
          <span>Daftar Booking Saya</span>
          </span>
@endif
        </a>

        @if (Auth::check() && Auth::user()->role === 'admin')
          <a href="{{ route('auth.show') }}" class="group relative px-6 py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/20 to-purple-600/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm"></div>
            <div class="absolute inset-0 border border-indigo-400/20 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
            <span class="relative flex items-center space-x-2 group-hover:text-indigo-200">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
              </svg>
              <span>Daftar Pengguna</span>
              <span class="px-2 py-1 bg-gradient-to-r from-yellow-400 to-orange-500 text-xs text-black font-bold rounded-full">ADMIN</span>
            </span>
          </a>
        @endif
      </div>

      <!-- User Section -->
      <div class="flex items-center space-x-4">
        <!-- Enhanced User Dropdown -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" @keydown.escape="open = false"
            class="group flex items-center px-4 py-3 rounded-xl bg-gradient-to-r from-blue-600/30 to-cyan-600/30 backdrop-blur-sm border border-white/20 hover:from-blue-500/40 hover:to-cyan-500/40 transition-all duration-300 focus:outline-none shadow-xl hover:shadow-cyan-500/25 hover:scale-105">

            <!-- Enhanced User Avatar -->
            <div class="relative">
              <div class="w-8 h-8 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center mr-3 shadow-lg">
                <span class="text-white font-bold text-sm">
                  {{ Auth::check() ? strtoupper(substr(Auth::user()->username, 0, 1)) : 'G' }}
                </span>
              </div>
              <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-gradient-to-br from-green-400 to-emerald-500 border-2 border-white rounded-full"></div>
            </div>

            <!-- User Info -->
            <div class="flex flex-col items-start mr-3">
              <span class="text-white font-semibold text-sm">
                {{ Auth::check() ? Auth::user()->username : 'Guest' }}
              </span>
              <span class="text-cyan-200/70 text-xs">
                {{ Auth::check() ? ucfirst(Auth::user()->role) : 'Visitor' }}
              </span>
            </div>

            <!-- Dropdown Arrow -->
            <svg class="w-4 h-4 fill-current text-white transition-all duration-300 group-hover:text-cyan-200"
                 :class="{'rotate-180': open}" viewBox="0 0 20 20">
              <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
            </svg>
          </button>

          <!-- Enhanced Dropdown Menu -->
          <div x-show="open"
               x-transition:enter="transition ease-out duration-300"
               x-transition:enter-start="opacity-0 scale-90 -translate-y-4"
               x-transition:enter-end="opacity-100 scale-100 translate-y-0"
               x-transition:leave="transition ease-in duration-200"
               x-transition:leave-start="opacity-100 scale-100 translate-y-0"
               x-transition:leave-end="opacity-0 scale-90 -translate-y-4"
               @click.away="open = false"
               class="absolute right-0 mt-3 w-72 bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl ring-1 ring-gray-200/50 z-50 origin-top-right overflow-hidden"
               style="display: none;">

            @if (Auth::check())
              <!-- User Profile Header -->
              <div class="px-6 py-4 bg-gradient-to-r from-cyan-50 to-blue-50 border-b border-gray-100/50">
                <div class="flex items-center space-x-3">
                  <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                    <span class="text-white font-bold text-lg">
                      {{ strtoupper(substr(Auth::user()->username, 0, 1)) }}
                    </span>
                  </div>
                  <div>
                    <p class="font-semibold text-gray-900">{{ Auth::user()->username }}</p>
                    <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ Auth::user()->role === 'admin' ? 'purple' : 'blue' }}-100 text-{{ Auth::user()->role === 'admin' ? 'purple' : 'blue' }}-800 mt-1">
                      {{ ucfirst(Auth::user()->role) }}
                    </span>
                  </div>
                </div>
              </div>

              <!-- Menu Items -->
              <div class="py-2">
                <a href="{{ route('profile') }}" class="group flex items-center px-6 py-3 text-gray-700 font-medium hover:bg-gradient-to-r hover:from-cyan-50 hover:to-blue-50 transition-all duration-200">
                  <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                  </svg>
                  <span class="group-hover:text-cyan-700">Profile Settings</span>
                </a>

                <a href="{{ route('settings') }}" class="group flex items-center px-6 py-3 text-gray-700 font-medium hover:bg-gradient-to-r hover:from-cyan-50 hover:to-blue-50 transition-all duration-200">
                  <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                  <span class="group-hover:text-cyan-700">Account Settings</span>
                </a>

                <!-- NEW: About Menu Item -->
              <a href="{{ route('about') }}" class="group flex items-center px-6 py-3 text-gray-700 font-medium hover:bg-gradient-to-r hover:from-cyan-50 hover:to-blue-50 transition-all duration-200">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="group-hover:text-cyan-700">About</span>
              </a>

                <div class="border-t border-gray-100 my-2"></div>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="group flex items-center px-6 py-3 text-red-600 font-medium hover:bg-red-50 transition-all duration-200">
                  <svg class="w-5 h-5 mr-3 text-red-400 group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                  </svg>
                  <span class="group-hover:text-red-700">Sign Out</span>
                </a>
              </div>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
              </form>
            @else
              <!-- Guest User Options -->
              <div class="py-2">
                <a href="{{ route('login') }}" class="group flex items-center px-6 py-3 text-gray-700 font-medium hover:bg-gradient-to-r hover:from-cyan-50 hover:to-blue-50 transition-all duration-200">
                  <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                  </svg>
                  <span class="group-hover:text-cyan-700">Sign In</span>
                </a>

                <a href="{{ route('register') }}" class="group flex items-center px-6 py-3 text-gray-700 font-medium hover:bg-gradient-to-r hover:from-cyan-50 hover:to-blue-50 transition-all duration-200">
                  <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                  </svg>
                  <span class="group-hover:text-cyan-700">Create Account</span>
                </a>
              </div>
            @endif
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden p-2 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Bottom Border Glow -->
  <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-400/50 to-transparent"></div>
</nav>

<!-- Enhanced Alpine.js Integration -->
<script src="//unpkg.com/alpinejs" defer></script>

<style>
  @keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
  }

  @keyframes glow {
    0%, 100% { box-shadow: 0 0 20px rgba(6, 182, 212, 0.1); }
    50% { box-shadow: 0 0 40px rgba(6, 182, 212, 0.2), 0 0 60px rgba(6, 182, 212, 0.1); }
  }

  .animate-float {
    animation: float 6s ease-in-out infinite;
  }

  .animate-glow {
    animation: glow 3s ease-in-out infinite;
  }
</style>
