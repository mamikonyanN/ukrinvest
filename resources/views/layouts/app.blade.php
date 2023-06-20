<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="/favicon.png">
  <title>@yield('title', 'Ukrinvest')</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="/css/icon.css">
  <link rel="stylesheet" href="/css/utils.css">
</head>
<body class="d-flex min-vh-100 flex-column">
  @include('layouts/header')
  <div class="flex-grow-1" data-bs-spy="scroll" data-bs-target="#app-navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">
    @yield('content')
  </div>
  @include('layouts/footer')
  @stack('head')
</body>
</html>
