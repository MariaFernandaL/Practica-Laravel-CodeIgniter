<nav class="w-screen h-[150px] relative" >
    <img src={{asset('images/background.jpg')}} class="absolute opacity-20 bottom-0 top-0 w-full h-full object-center object-cover -z-10"  alt="">  

    <ul class="list-none flex items-center w-full h-full">
        <li>
           <a href="/videogames">
            <img src={{asset('images/logo.png')}} class="h-[150px] w-[150px]" alt="Logo">
           </a>
        </a> 
        </li>
        <div class=" flex flex-grow text-white justify-end gap-10">
            @auth
                <li>
                    <span>Bienvenido, {{auth()->user()->name}}</span>
                </li>

                <li >
                    <a href="/videogames/manage" class="font-bold hover:border-b-2 ">
                        Tus videojuegos
                    </a>
                </li>  
               <li class="px-10">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="font-bold  "> Cerrar sesión</button>
                    </form>
                </li>  
            @else  
                <li>
                    <a href="/register"> Registrarse</a>
                </li>

                <li >
                    <a class="px-10" href="/login">
                        Iniciar sesión
                    </a>
                </li>    

            
                
            @endauth

        </div>  

    </ul>    
</nav>  