<?php

namespace skulyv\Http\Controllers;

use skulyv\Assignment;
use skulyv\Profile;
use skulyv\Result;
use skulyv\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Result::create([
            'user_id' => $request->id,
            'course_code' => $request->code,
            'course_title' => $request->title,
            'ca1' => $request->ca1,
            'ca2' => $request->ca2,
            'year' => $request->year,
            'exam' => $request->exam,
            ]);
            if($input)
            {
                return redirect()->back()->with('flash', 'result successfully uploaded');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $id = Auth::user()->id;
        $profile = Auth::id();
        $class =  Auth::user()->profiles->classes;
        $assignments = Auth::user()->profiles->classes->assignments;
        $result =  Result::find($id);
        $results = Auth::user()->profiles->results;

        $something = Assignment::all();
        $user     = Auth::user()->profiles->results;
        $year2018 = DB::table('results')->where('year', '2018')->where('user_id', $id)->get();
        $year2015 = DB::table('results')->where('year', '2015')->where('user_id', $id)->get();

    //    dd($profile);
        return view('users.results', compact(
            'profile', 'class', 'assignments', 'something', 'result', 'results','year2018', 'year2015'
        ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
