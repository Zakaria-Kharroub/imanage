<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //

    public function getTeacher(){
        $teachers = Teacher::all();
        return view('teacher.teacher',compact('teachers'));
    }

    public function create(){
        return view('teacher.createTeacher');
    }

    public function addTeacher(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date_naissance' => 'required',
            'cin' => 'required'
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->date_naissance = $request->input('date_naissance');
        $teacher->cin = $request->input('cin');
        $teacher->save();

        return redirect()->route('getTeacher')->with('info','Teacher Added Successfully');

    }



        
        



}
