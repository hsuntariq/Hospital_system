<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    public function addDoctor(Request $req){
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "spec" => 'required',
            "exp" => 'required',
            "status" => 'required',
            "image" => 'required',
        ]);

        $formFields['image'] = $req->file('image')->store('doctor_images', 'public');

        Doctors::create($formFields);
        return back()->with('message', 'Doctor Added Successfully!');

    }

    public function getDoctors(){
        // get the data from the backend
        $doctors = Doctors::all();
        return view('homepage', compact('doctors'));
    }
    public function viewDoctors(){
        // get the data from the backend
        $doctors = Doctors::all();
        return view('admin.view-doctors', compact('doctors'));
    }


    public function singleDoctor($id){
        $doc = Doctors::find($id);
        return view('admin.single-doctor', compact('doc'));
    }



}
