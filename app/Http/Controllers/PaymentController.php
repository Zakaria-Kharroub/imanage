<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Student;

class PaymentController extends Controller
{
    public function getPayment(){
        $payments = Payment::all();
        $totalAmount = $payments->sum('amount');
        return view('payment.payment',compact('payments','totalAmount'));
    }

    public function create(){
        $students = Student::select('id', 'name')->get();
        $formations = Formation::select('id', 'name')->get();
        return view('payment.createPayment', compact('students', 'formations'));
    }
    public function addPayment(Request $request){

        $request->validate([
            'amount' => 'required',
            'date' => 'required',
            'student_id' => 'required|exists:students,id',
            'formation_id' => 'required|exists:formations,id',
        ]);
        $payment = new Payment();
        $payment->amount = $request->input('amount');
        $payment->date = $request->input('date');
        $payment->student_id = $request->input('student_id');
        $payment->formation_id = $request->input('formation_id');
        $payment->save();
    
        // Redirect back or wherever appropriate
        return redirect()->route('getPayment');
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
    public function editPayment($id)
    {
        $payment = Payment::findOrFail($id);
        $student = Student::all();
        $formation = Formation::all();
        return view('payment.editPayment', compact('payment','student','formation'));
    }
    public function updatePayment(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->amount = $request->input('amount');
        $payment->student_id = $request->input('student');
        $payment->formation_id = $request->input('formation');
        $payment->save();
        return redirect()->route('getPayment');
    }


    public function receipt($id)
    {
        $payment = Payment::findOrFail($id);

        $student = Student::findOrFail($payment->student_id);
        $formation = Formation::findOrFail($payment->formation_id);

        // Pass the retrieved data to the view
        return view('payment.receipt', [
            'payment' => $payment,
            'student' => $student,
            'formation' => $formation
        ]);
    }

    public function deletePayment($id)
    {
        $payments = Payment::findOrFail($id);
        $payments->delete();
        return redirect()->route('getPayment');
    }

}
