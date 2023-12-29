<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function SignUp(Request $req){
        $formFields = $req->validate([
            'name' => ['required'],
            'age' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'password' => ['required'],
            'image' => ['required','mimes:png,jpg,jpeg'],
        ]);

        $formFields['image'] = $req->file('image')->store('user_images', 'public');
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message', 'Welcome ' . auth()->user()->name);
    }


    public function Logout(Request $req){
        auth()->logout();
        $req->session()->regenerateToken();
        return redirect('/')->with('message', 'Get Well Soon!');
    }

    public function Login(Request $req){
        $formFields = $req->validate([
            "email" => ['required'],
            "password" => ['required']
        ]);

        if(auth()->attempt($formFields)){
            $req->session()->regenerateToken();
            return redirect('/')->with('message', 'Welcome back ' . auth()->user()->name);
        } else{
            return back()->with('message', 'Invalid Credentials');
        }   

    }


    public function getUser(){
        $data = [
            "doctor"=>[
                "value" => User::where('role',1)->get(),
                "icon" => 'bi bi-person'
            ],
            "users" => [
                "value"=>User::where('role',0)->get(),
                "icon" => 'bi bi-house',
            ],
            "admins"=>[
                "value"=>User::where('role',2)->get(),
                "icon" => 'bi bi-link'
            ]
        ];
        return view('admin.dashboard', compact('data'));
    }


}
