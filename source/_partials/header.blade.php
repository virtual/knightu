@include('_partials/topbar')
<header class="flex w-full py-6  ">
  <div class="max-w-6xl xl:w-3/4 mx-auto flex justify-between">
    <div class="w-full sm:w-1/2 md:w-1/3">
      <a href="{{ $page->baseUrl }}">@include('_svg/logo')</a>
    </div>
    <div class="flex items-center w-full sm:w-1/2 md:w-2/3">
      @include('_partials/menu')
    </div>
  </div>
</header>