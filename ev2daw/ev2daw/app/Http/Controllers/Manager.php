<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Manager extends Controller
{
    function login(){
        return view('login');
    }

    function regis(){
        return view('regis');
    }

    function create(){
        return view('create');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }else{
            return redirect(route('login'))->with("error", "Login details are invalid :(");
        }
    }

    function regisPost(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('regis'))->with("error", "There needs to be a name!");
        }
        
        return redirect(route('login'))->with("succ", "Registration successful, login to access");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
