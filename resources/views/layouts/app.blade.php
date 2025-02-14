<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body class="@if (Request::is('login') || Request::is('join')) overflow-hidden @else overflow-auto @endif">
  <div class="container mx-auto">
    @include('components.header')
  </div>

  <div class="container mx-auto pt-12">
    @yield('content')
  </div>

</body>

</html>