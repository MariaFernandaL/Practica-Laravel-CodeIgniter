<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameShop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-screen h-screen bg-black flex items-center flex-col gap-10 relative">
   @include('partials/_nav')
    <main class="flex items-center flex-col gap-5 w-full">
        @yield('content')
        
    </main> 
    @include('partials/_footer')

</body>
</html>