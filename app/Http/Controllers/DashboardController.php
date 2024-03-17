<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Formation;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $totalStudents = Student::count();
    $totalTeachers = Teacher::count();
    $totalClasses = Classe::count();
    $totalAmount = Payment::sum('amount');
    $totalFormations = Formation::count();

    return view('welcome', compact('totalStudents', 'totalTeachers', 'totalClasses','totalFormations','totalAmount'));
}
}
