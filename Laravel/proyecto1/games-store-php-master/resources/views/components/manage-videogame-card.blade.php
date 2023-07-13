@props(['videogame'])

<div class="flex  items-center w-full border-b-2 border-b-white py-4">
    <div class="flex-grow">
        <img  class="h-[150px] w-[200px] object-cover object-center" src={{$videogame->image ?  asset('storage/'  . $videogame->image) : asset('images/no-image.jpg')}} alt={{$videogame->name}}/>
    </div>
    <h2 class="text-white text-center w-full ">{{$videogame->name}}</h2> 
    <div class="flex gap- flex-grow justify-end gap-10">
        <a class="text-purple-900" href="{{'/videogames/edit/'. $videogame->id}}">Editar</a>
    
        <form action="/videogames/{{$videogame->id}}" method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-700">Eliminar</button>
        </form>
        </div>               
    </div>  

</div>
