<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\candidate;
class ElectionController extends Controller
{
    public function choose(){
        $neshida = candidate::select('*')->where('category','Neshida')->get();
        $deawa = candidate::select('*')->where('category','Deawa')->get();
        $charity = candidate::select('*')->where('category','Charity')->get();
        return view('inc/elect')->with('neshida',$neshida)
                                ->with('deawa',$deawa)
                                ->with('charity',$charity);
    }
}
