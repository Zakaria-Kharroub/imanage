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

    public function show(string $id)
    {
        $teachers=Teacher::findOrFail($id);
        return view('showTeacher',compact('teachers'));
    }

    public function editTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        // Add logic to retrieve classes if needed
        return view('Teacher.editTeacher', compact('teacher'));
    }

    public function updateTeacher(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->date_naissance = $request->input('date_naissance');
        $teacher->cin = $request->input('cin');
        $teacher->classe_id = $request->input('classe_id');
        $teacher->save();
        return redirect()->route('getTeacher');
    }

    public function deleteTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('getTeacher');
    }


}
