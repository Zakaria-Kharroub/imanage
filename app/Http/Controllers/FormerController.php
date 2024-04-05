<?php

namespace App\Http\Controllers;

use App\Models\Former;
use Illuminate\Http\Request;

class FormerController extends Controller
{
    public function getFormer(){
        
        $former = Former::paginate(7);
        $startingIndex = ($former->currentPage() - 1) * $former->perPage() + 1;
        return view('bills.former.former', compact( 'former', 'startingIndex'));
    }
    public function createFormer(){
        return view('bills.former.createFormer');
    }
    public function addFormer(Request $request){
        
        $this->validate($request, [
            'name' => 'required|string',
            'date' => 'required',
            'duedate' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);
        $former = new Former();
        $former->name = $request->input('name');
        $former->date = $request->input('date');
        $former->duedate = $request->input('duedate');
        $former->amount = $request->input('amount');
        $former->status = $request->input('status');
        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $name=time();
            $image -> getClientOriginalExtension();
            $image-> storeAs('public/images/'.$name);
            $former->image = $name;
        }
        $former->save();
        return redirect()->route('getFormer');
    }
    public function editFormer($id)
    {
        $former = Former::findOrFail($id);
        return view('bills.former.editFormer', compact('former'));
    }
    public function updateFormer(Request $request, $id)
    {
        $former = Former::findOrFail($id);
        $former->name = $request->input('name');
        $former->date = $request->input('date');
        $former->duedate = $request->input('duedate');
        $former->amount = $request->input('amount');
        $former->status = $request->input('status');
        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $name=time();
            $image -> getClientOriginalExtension();
            $image-> storeAs('public/images/'.$name);
            $former->image = $name;
        }
        $former->save();
        return redirect()->route('getFormer');
    }
    public function deleteFormer($id)
    {
        $former = Former::findOrFail($id);
        $former->delete();
        return redirect()->route('getFormer');
    }
}
