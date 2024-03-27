<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Formation;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $lastStudent = Student::latest()->first();
    $lastTeacher = Teacher::latest()->first();
    $lastClass = Classe::latest()->first();
    $lastPayment = Payment::latest()->first();

    $totalStudents = Student::count();
    $totalTeachers = Teacher::count();
    $totalClasses = Classe::count();
    $totalAmount = Payment::sum('amount');
    $totalFormations = Formation::count();
    
    $students = Student::all();
    $totalAge = 0;
    foreach ($students as $student) {
        $totalAge += Carbon::parse($student->date_naissance)->age;
    }
    $averageAge = $totalStudents > 0 ? round($totalAge / $totalStudents) : 0;


    return view('welcome', compact( 'averageAge','totalStudents', 'totalTeachers', 'totalClasses','totalFormations','totalAmount','lastStudent','lastTeacher','lastClass','lastPayment'));
}
}
