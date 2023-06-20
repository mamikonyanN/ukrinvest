<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="/favicon.png">
  <title>@yield('title', 'Ukrinvest')</title>

  <link rel="stylesheet" href="/css/icon.css">
  <link rel="stylesheet" href="/css/utils.css">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  @yield('content')
</body>
</html>
