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
        ]);

        Doctors::create($formFields);
        return back();

    }
}
