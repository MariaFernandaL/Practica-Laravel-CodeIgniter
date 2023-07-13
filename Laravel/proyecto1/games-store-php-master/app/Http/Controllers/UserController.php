<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register form
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formField = ($request->validate([
            'name'=>'required',
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=>'required|confirmed|min:5',
            'password_confirmation'=>'required'


        ]));

        //Hash password to database
        $formField['password'] = bcrypt($formField['password'] );

        //Store user
        $user = User::create($formField);

        //Login the user created
        auth()->login($user);

        return redirect('/videogames');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/videogames');
    }

    //Show login form

    public function login(){
        return view('users.login');
    }
    //Auth user
    public function auth(Request $request){

        $formField = $request->validate([
            'email'=> ['required', 'email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formField)){
            $request->session()->regenerate();
            return redirect('/videogames');
        }   
        
        return back()->withErrors([
            'email'=>'Invalid credentials'
        ]);
    }
}
