<?php

namespace App\Http\Controllers;

use App\Models\Water;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    public function getwater(){
        
        $water = Water::paginate(7);
        $startingIndex = ($water->currentPage() - 1) * $water->perPage() + 1;
        return view('bills.water.water', compact( 'water', 'startingIndex'));
    }
    public function create(){
        return view('bills.water.createWater');
    }
    public function addwater(Request $request){
        
        $this->validate($request, [
            'date' => 'required',
            'duedate' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        $water = new Water();
        $water->date = $request->input('date');
        $water->duedate = $request->input('duedate');
        $water->amount = $request->input('amount');
        $water->status = $request->input('status');
        $water->save();
        return redirect()->route('getWater');
    }
    public function editWater($id)
    {
        $water = Water::findOrFail($id);
        return view('bills.water.editWater', compact('water'));
    }
    public function updateWater(Request $request, $id)
    {
        $water = Water::findOrFail($id);
        $water->date = $request->input('date');
        $water->duedate = $request->input('duedate');
        $water->amount = $request->input('amount');
        $water->status = $request->input('status');
        $water->save();
        return redirect()->route('getWater');
    }
    public function deleteWater($id)
    {
        $water = Water::findOrFail($id);
        $water->delete();
        return redirect()->route('getWater');
    }
}
