<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register(){
        return view('register',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email:dns',
            'password'=>'required|min:4|max:50'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }

}
