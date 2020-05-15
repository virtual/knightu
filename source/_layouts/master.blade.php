<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->siteTitle }}</title>
        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css">
    </head>
    <body class="antialiased font-sans">
      @include('_partials/header')

      @yield('hero')
      @yield('subfeature')

      <main class="max-w-6xl mx-auto">
        @yield('content')
      </main>
      @include('_partials/footer')

    </body>
</html>
