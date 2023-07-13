@props(['videogame'])
<a href="/videogames/{{$videogame->id}}">
    <div class="h-[400px] w-[300px] flex flex-col text-zinc-50 items-center hover:scale-90 transition-all hover:shadow-white hover:shadow-lg">
        <img  class="h-[300px] w-full object-cover object-center" src={{$videogame->image ?  asset('storage/'  . $videogame->image) : asset('images/no-image.jpg')}} alt={{$videogame->name}}/>
        <p class="font-extrabold" >{{$videogame->name}}</p>
        <p>${{$videogame->price}}</p> 
    </div>


</a>
