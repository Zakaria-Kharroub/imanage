<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Student;

class PaymentController extends Controller
{
    public function getPayment(){
        $Payment = Payment::all();
        $totalAmount = $Payment->sum('amount');
        return view('payment.payment',compact('Payment','totalAmount'));
    }

    public function create(){
        $students = Student::select('id', 'name')->get();
        $formations = Formation::select('id', 'name')->get();
        return view('payment.createPayment', compact('students', 'formations'));
    }
    public function addPayment(Request $request){

        $validatedData = $request->validate([
            'amount' => 'required',
            'date' => 'required',
            'student_id' => 'required|exists:students,id',
            'formation_id' => 'required|exists:formations,id',
        ]);

        // Create a new payment
        Payment::create($validatedData);

        // Redirect back or wherever appropriate
        return redirect()->route('getPayment')->with('success', 'Payment added successfully.');
    }

    // public function show(string $id)
    // {
    //     $Payments=Payment::findOrFail($id);
    //     return view('showPayment',compact('Payments'));
    // }

    // public function editPayment($id)
    // {
    //     $Payment = Payment::findOrFail($id);
    //     // Add logic to retrieve classes if needed
    //     return view('Payment.editPayment', compact('Payment'));
    // }

    // public function updatePayment(Request $request, $id)
    // {
    //     $Payment = Payment::findOrFail($id);
    //     $Payment->name = $request->input('name');
    //     $Payment->email = $request->input('email');
    //     $Payment->phone = $request->input('phone');
    //     $Payment->date_naissance = $request->input('date_naissance');
    //     $Payment->cin = $request->input('cin');
    //     $Payment->classe_id = $request->input('classe_id');
    //     $Payment->save();
    //     return redirect()->route('getPayment');
    // }

    public function deletePayment($id)
    {
        $Payment = Payment::findOrFail($id);
        $Payment->delete();
        return redirect()->route('getPayment');
    }

}
