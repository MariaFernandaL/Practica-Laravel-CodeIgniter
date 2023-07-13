@extends('layout')
@section('content')

<section class="w-[80%] h-full flex flex-col items-center justify-center ">

   <h1 class="text-white text-3xl h-[100px] ">Edita un video-juego</h1> 

    <form action="/videogames/{{$videogame->id}}" method="POST" class="flex flex-col items-center gap-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="name" class="text-white">Nombre</label>
            <input type="text" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="name" value={{$videogame->name}} >
            @error('name')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="price" class="text-white">Precio</label>
            <input type="number" step="any" min="0" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="price" value={{$videogame->price}}  >
            @error('price')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-white">Description</label>
            <textarea name="description" class="text-white rounded-2xl w-[400px] px-2 py-3 bg-transparent border border-white">
                {{$videogame->description}}
            </textarea>
            @error('description')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col items-center gap-5">
            <label for="name" class="text-white">Imagen del Videojuego</label>
            <img  class="h-[300px] w-[300px] object-cover object-center" src={{$videogame->image ?  asset('storage/'  . $videogame->image) : asset('images/no-image.jpg')}} alt={{$videogame->name}}/>

            <input type="file" name="image" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" >
            @error('image')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <button 
        class="border-[3px] border-purple-950 rounded-lg text-white py-2 w-[150px] px-2 bg-transparent hover:bg-purple-950 hover:text-white transition-colors">
            Editar  
        </button>

    </form>

</section>
@endsection