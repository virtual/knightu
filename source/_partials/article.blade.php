
<article class="max-w-sm rounded overflow-hidden shadow-lg">
  <div class="image-container">@if(!empty($img)) <a href="{{ $link }}"><img src="{{ $page->baseUrl }}/resources/img{{$img}}" alt="{{$alt}}"></a>@endif</div>  
  <div class="px-6 py-4">
    <header><div class="font-bold text-xl mb-2"><a href="{{ $link }}">{{ $heading }}</a></div>
    @if(!empty($datetime))<p class="datetime"><time datetime="{{$datetime}}"><?php echo date("F j, Y", strtotime($datetime)) ?> </time></p>@endif
    </header>
    <p class="text-gray-700 text-base">
      {{ $desc }}
    </p>
  </div> 
</article>
