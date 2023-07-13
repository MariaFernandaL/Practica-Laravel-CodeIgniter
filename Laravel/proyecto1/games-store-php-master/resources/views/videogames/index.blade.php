@extends('layout')
@section('content')
<h1 class="text-4xl text-white  font-mono">Tienda de Videojuegos</h1>
@include('partials/_searcher')

@if((count($videogames)==0))
    <p class="text-white">No hay video juegos disponibles :(</p>
@endif

<section class="w-[80%] flex flex-col items-center justify-center gap-10 relative z-10">
    <div class="flex gap-5 flex-wrap justify-evenly z-10">
        @foreach ($videogames as $videogame)
            <x-videogame-card :videogame="$videogame" />
        @endforeach
    </div>
    <div class="w-full">
        {{$videogames->links()}}
    </div>

</section>
@endsection