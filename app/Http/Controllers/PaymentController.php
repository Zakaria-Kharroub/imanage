<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function getPayment(){
        $Payments = Payment::all();
        return view('payment.payment',compact('Payments'));
    }

    public function create(){
        return view('payment.createPayment');
    }

    public function addPayment(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date_naissance' => 'required',
            'cin' => 'required'
        ]);

        $Payment = new Payment();
        $Payment->name = $request->input('name');
        $Payment->email = $request->input('email');
        $Payment->phone = $request->input('phone');
        $Payment->date_naissance = $request->input('date_naissance');
        $Payment->cin = $request->input('cin');
        $Payment->save();

        return redirect()->route('getPayment')->with('info','Payment Added Successfully');

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
