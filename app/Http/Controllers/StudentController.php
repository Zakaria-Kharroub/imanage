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
        
    // public function show(string $id)
    // {
    //     $students=Student::findOrFail($id);
    //     return view('showStudent',compact('students'));
    // }


    // public function edit(string $id){
    //     $students=Student::findOrFail($id);
    //     return view('teacher.editStudent',compact('students'));
    // }


    // public function update(Request $request , string $id){
    //     $students=Student::findOrFail($id);
    //     $students->update($request->all( ));
    //     return redirect()->route('students.index')->with('seccess');
    // }


    // public function  destroy(string $id){
    //     $students= Student::findOrFail( $id );
    //     $students -> delete();
    //     return redirect()->route('students')->with('success');
    // }


}
