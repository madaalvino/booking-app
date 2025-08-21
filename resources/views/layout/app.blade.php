<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Booking App</title>
  </head>
  <body class="bg-gray-100 text-gray-900">

    {{-- Navbar --}}
    @include('partial.navbar')

    <main class="container mx-auto px-4 py-6 min-h-screen">
      @yield('content')
    </main>

    {{-- Footer --}}
    @include('partial.footer')

  </body>
</html>
