@extends('layout')
@section('content')

<section class="w-[80%]  flex items-center justify-center flex-wrap ">
    <div class="flex text-white gap-10 w-full">
        <img class="h-[400px] w-[400px]" src={{ $videogame->image ?  asset('storage/'.$videogame->image) : asset('/images/no-image.jpg')}} alt={{"Imagen de" . $videogame->name}}>
       <div class="flex flex-col gap-20 w-[60%] h-full relative">
            <h1 class="text-5xl">{{$videogame->name}}</h1>
            <p class="text-justify ">{{$videogame->description}}</p>  
            <h2 class="font-bold">${{$videogame->price}}</h2>
            <!--<div class="flex justify-center">
                <button class="border border-white py-2 px-3 hover:bg-white hover:text-black transition-colors">Comprar</button>
            </div>
            -->
            @auth
                @if (auth()->id() == $videogame->user_id)
                    <div class="absolute top-0 right-0 flex gap-3 text-xl">
                        <a class="text-purple-900" href="{{'/videogames/edit/'. $videogame->id}}">Editar</a>
            
                        <form action="/videogames/{{$videogame->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="text-red-700"  id="delete-button">Eliminar</button>
                        </form>
                    </div> 
                    
                @endif
            @endauth
        </div> 
    </div>   
</section>

@endsection