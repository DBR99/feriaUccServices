<?php

namespace App\Http\Controllers;

use App\visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function getVisitors(){
        $visitors = visitor::all();
        return $visitors;
    }

    public function add(Request $request){
        $visitor = visitor::create($request->all());
        return $visitor;
    }
}
