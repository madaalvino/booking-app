<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Booking App</title>
  </head>
  <body class="bg-gradient-to-r from-indigo-900 via-sky-700 to-cyan-500">

    {{-- Navbar --}}



      @yield('content')


    {{-- Footer --}}
    @include('partial.footer')

  </body>
</html>
