<form action="/videogames" class="relative w-full flex justify-center ">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg w-2/4">
      <div class="absolute top-4 left-3">
        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
      </div>
      <input type="text" name="search" class="h-14 bg-transparent w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none text-white"
        placeholder="Search games..." />
      <div class="absolute top-2 right-2">
        <button type="submit" class="h-10 w-20 text-white rounded-lg bg-purple-800 hover:bg-purple-900">
          Search
        </button>
      </div>
    </div>
    <a href="/videogames/create" class="absolute w-[120px] h-[40px] text-center p-2 bg-purple-900 top-6 right-5 rounded-lg cursor-pointer  text-white hover:bg-purple-950 transition-colors">Crear Juego</a>

    
  </form>