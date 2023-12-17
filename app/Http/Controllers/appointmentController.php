<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function bookAppointment(Request $req){
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "age" => ['required','min:1','max:3'],
            "contact" => ['required','min:11'],
            "email" => ['required','email'],
            "disease" => ['required'],
            "datetime" => ['required'],
            "doctor" => ['required']
        ]);

        Appointments::create($formFields);
        return back();
        
    }
}
