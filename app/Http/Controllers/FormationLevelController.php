<?php

namespace App\Http\Controllers;
use App\formationLevel;
use Illuminate\Http\Request;

class FormationLevelController extends Controller
{
    public function getLevelFormations(){
        $formationLevels = formationLevel::all();
        return $formationLevels;
    }
    public function add(Request $request){
        $formationLevel = formationLevel::create($request->all());
        return $formationLevel;
    }
    public function get($id){
        $formationLevel = formationLevel::find($id);
        return $formationLevel;
    }
}
