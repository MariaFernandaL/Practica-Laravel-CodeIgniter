@extends('layout')
@section('content')
<section class="w-[80%] h-full flex flex-col items-center justify-center ">
        <h1 class="text-white text-3xl h-[100px] ">Registrate</h1> 
        <form action="/users" class="flex flex-col items-center gap-5" method="POST">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="text-white">Nombre</label>
                <input type="text" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="name" value={{old('name')}} >
                @error('name')
                    <small class="text-red-700">{{$message}}</small> 
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-white">Email</label>
                <input type="text" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="email" value={{old('email')}} >
                @error('email')
                    <small class="text-red-700">{{$message}}</small> 
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="text-white">Contraseña</label>
                <input type="password" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="password" >
                @error('password')
                    <small class="text-red-700">{{$message}}</small> 
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password_confirmation" class="text-white">Confirmar contraseña</label>
                <input type="password" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="password_confirmation" >
                @error('password_confirmation')
                    <small class="text-red-700">{{$message}}</small> 
                @enderror

            </div>
        </div>
        
            <button class="border-[3px] border-purple-950 rounded-lg text-white py-2 w-[150px] px-2 bg-transparent hover:bg-purple-950 hover:text-white transition-colors">Registrarse</button>

        </form>

</section>

    
@endsection