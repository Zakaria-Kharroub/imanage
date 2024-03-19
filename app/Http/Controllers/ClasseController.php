<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Teacher;
use App\Models\Formation;
use App\Models\Student;


class ClasseController extends Controller
{
    //


    public function getClass(){
        
        $classes = Classe::paginate(7);
        $teachers = Teacher::all();
        $formations = Formation::all();
        $startingIndex = ($classes->currentPage() - 1) * $classes->perPage() + 1;
        return view('class.class', compact('classes', 'teachers', 'formations', 'startingIndex'));
    }

    public function createClass(){
        $classes = Classe::all();
        $teachers = Teacher::all();
        $formations = Formation::all();
        return view('class.createClass', compact('classes', 'teachers','formations'));
    }

    public function addClass(Request $request){
        $request->validate([
            'name' => 'required',
            'teacher_id' => 'required',
            'formation_id' => 'required'
        ]);

        $class = new Classe();
        $class->name = $request->input('name');
        $class->teacher_id = $request->input('teacher_id');
        $class->formation_id = $request->input('formation_id');
        $class->save();
        return redirect()->route('getClass');
    }


    public function detailClass($id){
        $students = Student::where('classe_id', $id)->get();
        return view('class.detailClass', compact('students'));
    }

}
