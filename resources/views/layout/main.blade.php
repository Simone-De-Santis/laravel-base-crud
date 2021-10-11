<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Comics | @yield('title')</title>
  {{-- cdn --}}
  @yield('cdns')
</head>

<body>
  <header>
    @yield('header')
  </header>
  <main>
    @yield('content')
  </main>
  <footer>
    @yield('footer')
  </footer>

  @yield('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
