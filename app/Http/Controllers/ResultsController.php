<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Profile;
use App\Result;
use App\User;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        $class = Profile::find($id)->classes;
        $assignments = Profile::find($id)->classes->assignments;
        $result =  Result::find($id);
        $results = User::find($id)->results;

        $something = Assignment::all();
        $user = User::findOrFail($id)->results;
        $year2018 = DB::table('results')->where('year', '2018')->where('user_id', $id)->get();
        $year2015 = DB::table('results')->where('year', '2015')->where('user_id', $id)->get();

//        dd($year2018);
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
