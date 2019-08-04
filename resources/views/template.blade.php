<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - ScreenHolic</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    @include('partials.navbar')
    {{-- @include('partials/navbar.blade.php') --}}

    {{-- Dejamos un espacio vacío para insertar el contenido de cada una de las views --}}
    @yield('mainContent')

    @include('partials.footer')
  </body>
</html>
