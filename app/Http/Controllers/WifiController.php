<?php

namespace App\Http\Controllers;

use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    public function getWifi(){
        $wifi = Wifi::paginate(7);
        $startingIndex = ($wifi->currentPage() - 1) * $wifi->perPage() + 1;
        return view('bills.wifi.wifi', compact( 'wifi', 'startingIndex'));
    }
    public function create(){
        return view('bills.wifi.createWifi');
    }
    public function addWifi(Request $request){
        
        $this->validate($request, [
            'date' => 'required',
            'duedate' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        $wifi = new Wifi();
        $wifi->date = $request->input('date');
        $wifi->duedate = $request->input('duedate');
        $wifi->amount = $request->input('amount');
        $wifi->status = $request->input('status');
        $wifi->save();
        return redirect()->route('getWifi');
    }
    public function editWifi($id)
    {
        $wifi = Wifi::findOrFail($id);
        return view('bills.wifi.editWifi', compact('wifi'));
    }
    public function updateWifi(Request $request, $id)
    {
        $wifi = Wifi::findOrFail($id);
        $wifi->date = $request->input('date');
        $wifi->duedate = $request->input('duedate');
        $wifi->amount = $request->input('amount');
        $wifi->status = $request->input('status');
        $wifi->save();
        return redirect()->route('getWifi');
    }
    public function deleteWifi($id)
    {
        $wifi = Wifi::findOrFail($id);
        $wifi->delete();
        return redirect()->route('getWifi');
    }
}
