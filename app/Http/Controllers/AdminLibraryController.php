<?php

namespace skulyv\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use skulyv\Assignment;
use skulyv\User;
use skulyv\Profile;
use Illuminate\Support\Facades\DB;

class AdminLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
//        $class =  Profile::find($id)->classes;
//        $assignments = Profile::find($id)->classes->assignments;
//        $result =  Result::find($id);

        $something = Assignment::all();
//        dd($assignments);
        return view('admin.adminShowLibrary', compact('profile', 'class', 'assignments', 'something', 'result'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        $query = DB::table('profiles')->where('user_id', $id)->get();
        $test = $query->toArray();

        $classes = $test[0]->class_id;;

        // $class =  Profile::find($id)->classes;
        $assignments =  DB::table('assignments')->where('class_name_id', $classes);;
//        $result =  Result::find($id);

        $something = Assignment::all();
//        dd($assignments);
        return view('admin.createLibrary', compact('id','profile', 'classes', 'assignments', 'query', 'result'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->profiles->class_id;
        // dd( $request->file('file')->getClientOriginalName());
        $create = Assignment::create([
            'class_name_id' => $id,
            'file_path' => time() . $request->file('file')->getClientOriginalName()
        ]);
        if($create){
            return redirect()->back();
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
        //
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
