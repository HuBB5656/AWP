<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidate;

class CanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inc/createCandidate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);
        $newCandidate = new candidate;
        $newCandidate->name = $request->input('name');
        $newCandidate->category = $request->input('category');
        $newCandidate->desc = $request->input('desc');
        $newCandidate->save();

        return redirect('/getCandidate')->with('success','Registered !'); 
     }
    public function showAll(){
        $allCandidate = candidate::all();
        return view('inc/getCandidate')->with('allCandidate',$allCandidate);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = candidate::find($id);
        return view('inc/candidate')->with('candidate', $candidate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = candidate::find($id);
        return view('inc/editCandidate')->with('candidate',$candidate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);
        $candidate = candidate::find($id);
        $candidate->name = $request->input('name');
        $candidate->category = $request->input('category');
        $candidate->desc = $request->input('desc');
        $candidate->save();

        return redirect('/getCandidate')->with('success','candidate is updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = candidate::find($id);
        $candidate->delete();
        return redirect('/getCandidate')->with('success','Candidate Deleted');
    }
}
