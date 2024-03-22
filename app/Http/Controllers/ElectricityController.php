<?php

namespace App\Http\Controllers;

use App\Models\Electricity;
use Illuminate\Http\Request;

class ElectricityController extends Controller
{
    public function getElectricity(){
        
        $electricity = Electricity::paginate(7);
        $startingIndex = ($electricity->currentPage() - 1) * $electricity->perPage() + 1;
        return view('bills.electricity.electricity', compact( 'electricity', 'startingIndex'));
    }
    public function create(){
        return view('bills.electricity.createElec');
    }
    public function addElectricity(Request $request){
        
        $this->validate($request, [
            'date' => 'required',
            'duedate' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        $electricity = new Electricity();
        $electricity->date = $request->input('date');
        $electricity->duedate = $request->input('duedate');
        $electricity->amount = $request->input('amount');
        $electricity->status = $request->input('status');
        $electricity->save();
        return redirect()->route('getElec');
    }
    public function editElec($id)
    {
        $electricity = Electricity::findOrFail($id);
        return view('bills.electricity.editElec', compact('electricity'));
    }
    public function updateElec(Request $request, $id)
    {
        $electricity = Electricity::findOrFail($id);
        $electricity->date = $request->input('date');
        $electricity->duedate = $request->input('duedate');
        $electricity->amount = $request->input('amount');
        $electricity->status = $request->input('status');
        $electricity->save();
        return redirect()->route('getElec');
    }
    public function deleteElectricity($id)
    {
        $electricity = Electricity::findOrFail($id);
        $electricity->delete();
        return redirect()->route('getElec');
    }
}
