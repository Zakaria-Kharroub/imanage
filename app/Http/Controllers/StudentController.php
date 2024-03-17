<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classe;


class StudentController extends Controller
{
    //

    public function getStudent(){
        $students = Student::all();
        return view('student.student', compact('students'));
    }

    public function createStudent(){
        $classes = Classe::all();
        return view('student.createStudent', compact('classes'));
    }

    public function addStudent(Request $request){
        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->date_naissance = $request->input('date_naissance');
        $student->cin = $request->input('cin');
        $student->classe_id = $request->input('classe_id');
        $student->save();
        return redirect()->route('getStudent');

    }
        






}
