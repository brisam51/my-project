<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{

    //
    public function studentlist(){
        $students=student::all();
        return view('student',compact('students'));
    }

    public function addStudent(){
        return view('form_data');
    }

    public function store(Request $request){
        student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ]);
       // return redirect()->route('list');
    }
}
