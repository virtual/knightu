@extends('_layouts.master')

@section('content')

<main class="main">
    <h1 class="font-light text-3xl text-black">Knight University</h1>

  <section class="bg-white">

    @include('_partials.article', [
      'heading' => 'Students take home the grand prize',
      'desc' => 'More than 130 guests were in attendance',
      'alt' => 'students at a table',
      'img' => '/stock/stefan-stefancik-257625-unsplash.jpg',
      'link' => '#',
      'datetime' => '2020-01-05 11:31'
      ])
  </section>

</main>

@endsection
