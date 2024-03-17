<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;


class FormationController extends Controller
{
    //

    public function getFormation(){

        $formations = Formation::all();
        return view('formation.formation',compact('formations'));
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
}
