<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body>
  @include('components.header')

  <div class="container">
    @yield('content')
  </div>

</body>

</html>