<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;


class FormationController extends Controller
{
    //

    public function getFormation(){

        $formations = Formation::paginate(7);
        $startingIndex = ($formations->currentPage() - 1) * $formations->perPage() + 1;
        return view('formation.formation',compact('formations', 'startingIndex'));
    }

    public function createFormation(){
        return view('formation.createFormation');
    }

    public function addFormation(Request $request){
        
        $formation = new Formation();
        $formation->name = $request->input('name');
        $formation->description = $request->input('description');
        $formation->dure = $request->input('dure');
        $formation->datedebut = $request->input('datedebut');
        $formation->save();
        return redirect('/formations');
    }
    public function deleteFormation($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('getFormation');
    }
}
