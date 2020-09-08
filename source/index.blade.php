@extends('_layouts.master')

@section('title')
Home
@endsection

@section('hero')
@include('_partials.hero')
@endsection

@section('subfeature')
<div class="sm:pt-40 sm:pb-20 pt-20 pb-10" style="background: linear-gradient(90deg, #2F115F 0%, #691B99 100%)">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 text-white">
            <div>
                <h2 class="text-4xl font-bold mb-2 text-yellow-300">Discover your path</h2>
                <p class="text-white">With <strong>over 40 accredited programs</strong>, Knight University brings you
                    the programs you need to gain the skills and knowledge to pursue your career.</p>

                <p class="text-yellow-300"><a href="#">or browse all programs and courses</a></p>
            </div>
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2">
                    <div>
                        <div>
                            <p class="text-yellow-300"><a href="#">Arts</a></p>
                        </div>
                        <div>
                            <p class="text-yellow-300"><a href="#">Arts</a></p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="text-yellow-300"><a href="#">Arts</a></p>
                        </div>
                        <div>
                            <p class="text-yellow-300"><a href="#">Arts</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('content')
 
    <h1 class="font-light text-3xl text-black">Knight University</h1>

    <section class="bg-white">

        @include('_partials.article', [
        'heading' => 'Students take home the grand prize',
        'desc' => 'More than 130 guests were in attendance',
        'alt' => 'students at a table',
        'img' => '/stock/stefan-stefancik-257625-unsplash.jpg',
        'link' => './news',
        'datetime' => '2020-01-05 11:31'
        ])
    </section>

    <section>

      <h2 id="alumni">All about Alumni anchor</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, repellat iure. Quo quibusdam adipisci, repudiandae, inventore dolores autem asperiores eos, deleniti reprehenderit nam laboriosam omnis ipsum impedit quaerat voluptatibus fugit.</p>
    </section>
 

@endsection
