<nav aria-label="Main navigation">
<ul class="flex justify-between">
  <li><a class="hover:bg-yellow-100 py-2 px-4" href="#">About</a></li>
  <li><a class="hover:bg-yellow-100 py-2 px-4" href="#">Academics</a></li>
  <li><a class="hover:bg-yellow-100 py-2 px-4" href="#">Admissions</a></li>
  <li><a class="hover:bg-yellow-100 py-2 px-4" href="#">Student Life</a></li>
  <li><a class="hover:bg-yellow-100 py-2 px-4" href="#">Resources</a></li>
  <li>
    @include('_components.button', [
        'text' => 'Apply',
        'link' => '#'
        ])
  </li>
  <li><a class="hover:bg-yellow-100 py-2 px-4" href="#">Search</a></li>
</ul>
</nav>
