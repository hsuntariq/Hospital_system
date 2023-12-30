<?php

namespace App\Http\Controllers;

use App\Charts\testChart;
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
        $user = User::all();
        $doctor = User::where('role', 1)->count();
        $admin = User::where('role', 2)->count();
        $nurses = User::where('role', 3)->count();
        $pharmacist = User::where('role', 4)->count();
        $laboratorist = User::where('role', 5)->count();
        $accoutant = User::where('role', 6)->count();
        $data = [
            "doctor"=>[
                "value" => User::where('role',1)->count(),
                "icon" => 'bi bi-person'
            ],
            "users" => [
                "value"=>User::where('role',0)->count(),
                "icon" => 'bi bi-house',
            ],
            "admins"=>[
                "value"=>User::where('role',2)->count(),
                "icon" => 'bi bi-link'
            ],
            "nurse"=>[
                "value"=>User::where('role',3)->count(),
                "icon" => 'bi bi-link'
            ],
            "pharmacist"=>[
                "value"=>User::where('role',4)->count(),
                "icon" => 'bi bi-link'
            ],
            "laboratorist"=>[
                "value"=>User::where('role',5)->count(),
                "icon" => 'bi bi-link'
            ],
            "accountant"=>[
                "value"=>User::where('role',6)->count(),
                "icon" => 'bi bi-link'
            ],
        ];


        $chart = new testChart();
        $chart->labels(['doctors', 'admins', 'nurses', 'pharmacist', 'laboratorist', 'accountant']);
        $chart->dataset('strength', 'line', [$doctor, $admin, $nurses, $pharmacist, $laboratorist, $accoutant]);
        $chart2 = new testChart();
        $chart2->labels(['doctors', 'admins', 'nurses', 'pharmacist', 'laboratorist', 'accountant']);
        $chart2->dataset('strength', 'pie', [$doctor, $admin, $nurses, $pharmacist, $laboratorist, $accoutant])->options([
            "backgroundColor" => ['pink','red','orange','blue','green','purple']
        ]);
        $chart3 = new testChart();
        $chart3->labels($user->pluck('name'));
        $chart3->dataset('age', 'line', $user->pluck('age'));

        
       

        return view('admin.dashboard', compact('data','chart','chart2','chart3'));
    }


}
