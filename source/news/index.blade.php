@extends('_layouts.master')

@section('title')
News
@endsection 
 

@section('content')
 
    <h1 class="font-light text-3xl text-black">News</h1>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/jOzzwzJnArY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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


 

@endsection
