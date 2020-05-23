<?php

namespace App\Http\Controllers;
use App\program;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function getPrograms(){
        $programs = program::all();
        return $programs;
    }
    public function add(Request $request){
        $program = program::create($request->all());
        return $program;
    }
}
