<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classe;

class StudentController extends Controller
{
    public function getStudent()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(7);
        $startingIndex = ($students->currentPage() - 1) * $students->perPage() + 1;
        return view('student.student', compact('students', 'startingIndex'));   
    }

    public function createStudent()
    {
        $classes = Classe::all();
        return view('student.createStudent', compact('classes'));
    }
    //     public function createStudent()
    // {
    //     // Get classes with less than 20 students
    //     $classes = Classe::select('classes.id', 'classes.name') 
    //         ->leftJoin('students', 'classes.id', '=', 'students.classe_id')
    //         ->groupBy('classes.id', 'classes.name') 
    //         ->havingRaw('COUNT(students.id) < 5 OR COUNT(students.id) IS NULL')
    //         ->get();

    //     return view('student.createStudent', compact('classes'));
    // }


    public function addStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date_naissance' => 'required|date',
            'cin' => 'required|string',
            'classe_id' => 'required|exists:classes,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->date_naissance = $request->input('date_naissance');
        $student->cin = $request->input('cin');
        $student->classe_id = $request->input('classe_id');
        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $name=time();
            $image -> getClientOriginalExtension();
            $image-> storeAs('public/images/'.$name);
            $student->image = $name;
        }

        $student->save();
        return redirect()->route('getStudent');
    }

    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        // Add logic to retrieve classes if needed
        return view('student.editStudent', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->date_naissance = $request->input('date_naissance');
        $student->cin = $request->input('cin');
        $student->classe_id = $request->input('classe_id');
        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $name=time();
            $image -> getClientOriginalExtension();
            $image-> storeAs('public/images/'.$name);
            $student->image = $name;
        }
        $student->save();
        return redirect()->route('getStudent');
    }
    
    public function show(string $id)
    {
        $student=Student::findOrFail($id);
        return view('student.showStudent',compact('student'));
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('getStudent');
    }
}
