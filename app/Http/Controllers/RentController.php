<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function getRent(){
        $rent = Rent::paginate(7);
        $startingIndex = ($rent->currentPage() - 1) * $rent->perPage() + 1;
        return view('bills.rent.rent', compact( 'rent', 'startingIndex'));
    }
    public function create(){
        return view('bills.rent.createRent');
    }
    public function addRent(Request $request){
        
        $this->validate($request, [
            'date' => 'required',
            'duedate' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        $Rent = new Rent();
        $Rent->date = $request->input('date');
        $Rent->duedate = $request->input('duedate');
        $Rent->amount = $request->input('amount');
        $Rent->status = $request->input('status');
        $Rent->save();
        return redirect()->route('getRent');
    }
    public function editRent($id)
    {
        $rent = Rent::findOrFail($id);
        return view('bills.rent.editRent', compact('rent'));
    }
    public function updateRent(Request $request, $id)
    {
        $rent = Rent::findOrFail($id);
        $rent->date = $request->input('date');
        $rent->duedate = $request->input('duedate');
        $rent->amount = $request->input('amount');
        $rent->status = $request->input('status');
        $rent->save();
        return redirect()->route('getRent');
    }
    public function deleteRent($id)
    {
        $rent = Rent::findOrFail($id);
        $rent->delete();
        return redirect()->route('getRent');
    }
}
