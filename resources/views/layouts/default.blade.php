<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('includes.head')
</head>

<body class="flex flex-col h-screen justify-between">
  @include('partials._session_message')
  @include('includes.navbar')
  @yield('content')
  @include('includes.footer')
  @vite('resources/js/components/common.js')
  @vite('resources/js/address-suggestion.js')
</body>

</html>
