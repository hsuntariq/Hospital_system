<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\User;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    public function addDoctor(Request $req){
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "email" => 'required',
            "password" => 'required',
            "age" => 'required',
            "phone" => 'required',
            "address" => 'required',
            "exp" => 'required',
            "status" => 'required',
            "spec" => 'required',
            "image" => 'required',
            "role" => 'required',
        ]);

        $formFields['image'] = $req->file('image')->store('doctor_images', 'public');

        User::create($formFields);
        return back()->with('message', 'Doctor Added Successfully!');

    }

    public function getDoctors(){
        // get the data from the backend
        $nurses = User::where('role', 3)->paginate(3);
        $doctors = User::where('role', 1)->paginate(3);
        $pharmacist = User::where('role', 4)->get();
        $lab = User::where('role', 5)->get();
        $accountant = User::where('role', 6)->get();
        
        return view('homepage', compact('doctors','nurses','pharmacist','lab','accountant'));
    }
    public function viewDoctors(){
        // get the data from the backend
        $doctors = User::where('role', 1)->get();
        return view('admin.view-doctors', compact('doctors'));
    }


    public function singleDoctor($id){
        $doc = User::find($id);
        return view('admin.single-doctor', compact('doc'));
    }

    public function deleteDoctor($id){
        $doc = User::find($id);
        $doc->delete();
        return back()->with('message', 'doctor deleted successfully!');
    }

    public function updateStatus(Request $req,$id){
        $user = User::find($id);
        if($req->input('status') == 'available'){
            $user->update([
                "status" => 'available'
            ]);
        }else{
            $user->update([
                "status" => 'unavailable'
            ]);

        }
        return back();
    
    }



}
