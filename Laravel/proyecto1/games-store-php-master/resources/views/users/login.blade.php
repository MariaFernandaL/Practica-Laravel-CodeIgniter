@extends('layout')
@section('content')

<section class="w-[80%] h-full flex flex-col items-center justify-center ">

    <h1 class="text-white text-3xl h-[100px] ">Inicia Sesión</h1> 
    <div class="w-full flex items-center justify-center">
        <img src={{asset('images/logo.png')}} alt="logo">
        <div class="flex flex-col h-full w-full justify-center">
            <form action="users/auth" method="POST" class="flex flex-col items-center   justify-center gap-5" >
                @csrf
                <div class="flex flex-col">
                    <label for="email" class="text-white">Email</label>
                    <input type="text" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="email" value={{old('email')}} >
                    @error('email')
                        <small class="text-red-700">{{$message}}</small> 
                    @enderror
                </div>
                <div class="flex flex-col ">
                    <label for="password" class="text-white">Contraseña</label>
                    <input type="password" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="password" >
                    @error('password')
                        <small class="text-red-700">{{$message}}</small> 
                    @enderror
                </div>
                <button class="border-[3px] border-purple-950 rounded-lg text-white py-2 w-[150px] px-2 bg-transparent hover:bg-purple-950 hover:text-white transition-colors">Iniciar Sesión</button>
 
            </form> 
        </div>
         
    </div>

</section>


@endsection