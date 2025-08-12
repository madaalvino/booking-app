<nav class="bg-white border-b border-gray-200 px-4 py-3 shadow-sm">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-2 text-2xl font-extrabold text-blue-600">
            <svg class="w-7 h-7 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5 0a2 2 0 002-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-1.5.67A2 2 0 009.5 5H6a2 2 0 00-2 2v11a2 2 0 002 2h12z"/>
            </svg>
            MyApp
        </a>
        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
            <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="navbar-toggle" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="navbar-menu" class="md:hidden hidden px-4 pb-3">
        <a href="{{ url('/') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="{{ url('/about') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">About</a>
        <a href="{{ url('/contact') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Contact</a>
    </div>
    <script>
        // Simple mobile menu toggle
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('navbar-toggle');
            const menu = document.getElementById('navbar-menu');
            btn.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</nav>
