<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function bookAppointment(Request $req){
        $id = auth()->user()->id;
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "age" => ['required','min:1','max:3'],
            "contact" => ['required','min:11'],
            "email" => ['required','email'],
            "disease" => ['required'],
            "datetime" => ['required'],
            "doc_id" => 'required',
        ]);
        $formFields['user_id'] = auth()->user()->id;
        Appointment::create($formFields);
        return back()->with('message','Appointment Booked Successfully!');
        // echo $id;
    }

    public function getAppointments(){
        $id = auth()->user()->id;
        $appointment = Appointment::where('user_id', $id)->get();
        return view('users.appointments', compact('appointment'));
    }

}
