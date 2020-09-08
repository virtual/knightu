<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') | {{ $page->siteTitle }}</title>
        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css?v=2">
            <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-NGN48DC');</script>
          <!-- End Google Tag Manager -->
      </head>
    <body class="antialiased font-sans">
              <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGN48DC"
          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
          <!-- End Google Tag Manager (noscript) -->
      @include('_partials/header')

      @yield('hero')
      @yield('subfeature')

      <main class="max-w-6xl mx-auto xl:w-3/4">
        @yield('content')
      </main>
      @include('_partials/footer')

    </body>
</html>
