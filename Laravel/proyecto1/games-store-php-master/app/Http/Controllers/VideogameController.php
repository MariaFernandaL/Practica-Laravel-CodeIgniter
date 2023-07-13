<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    //Show all videogames
    public function index(){
        return view('videogames.index', 
        ['videogames'=> Videogame::latest()->filter(request(['search']))->paginate(4)] );
    }

    //Show one videogame
    public function show(Videogame $videogame){
        return view('videogames.show', [
            "videogame"=> $videogame 
        ]);
    }

    //Show create form
    public function create(){
        return view('videogames.create');
    }   
    //Store a videogame

    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>['required', 'max:450'],
            'price'=>'decimal:0,2'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('logos','public');
        }

        $formFields['user_id'] = auth()->id();
        Videogame::create($formFields);

        return redirect('/videogames');
    }

    public function edit(Videogame $videogame){

        if($videogame->user_id != auth()->id()){
            abort('403', 'No puedes editar este videojuego!');
        }
        return view('videogames.edit',[
            'videogame'=> $videogame
        ]);
    }
    
    public function update(Request $request , Videogame $videogame){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>['required', 'max:450'],
            'price'=>'decimal:1,2'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('logos','public');
        }
        $videogame->update($formFields);

        return redirect('/videogames');

    }

    public function destroy(Videogame $videogame){

        if($videogame->user_id != auth()->id()){
            abort('403', 'No puedes eliminar este videojuego!');
        }
        $videogame->delete();  

        return redirect('/videogames');
    }
   //Manage videogames
   public function manage(){
    return view('videogames.manage', [
        'videogames'=>auth()->user()->videogame()->get()
    ]);
}
}
// Common resources routes
// index - Show all items
// show - Show single item
// store - Create new item
// edit - Edit item
// update - Update item
// destroy - Delete item