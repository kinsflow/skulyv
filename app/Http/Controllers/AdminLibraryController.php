<?php

namespace skulyv\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use skulyv\Assignment;
use skulyv\User;
use skulyv\Result;

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
       $something   = Auth::user()->profiles->classes;
//        $result =  Result::find($id);
        $some = Assignment::orderBy('created_at', 'DESC')->get();
        // $something = Assignment::find(4)->class;
    //    dd($assignments);
        return view('admin.adminShowLibrary', compact('profile','some', 'class', 'assignments', 'something', 'result'));

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
        global $global;
        $test = $query->toArray();
        $classes = $test[0]->class_id;;

        // $class =  Profile::find($id)->classes;
        $assignments =  DB::table('assignments')->where('class_name_id', $classes);;
//        $result =  Result::find($id);

       // $something = Assignment::find($id)->class;
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
        $file = $request->file('file');
        $create = Assignment::create([
            'class_name_id' => $id,
            'file_path' => time() . $request->file('file')->getClientOriginalName()
        ]);
        $file->move('files/', $create->file_path);
        if($create && $file){
            return redirect('admin/doc/all')->with('flash', 'you added a new document');
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
        // $id = $id;
        $something = Assignment::find($id)->class;
        $profile = User::find($id);
        $classes =  Auth::user()->profiles->classes;
        $assignments = Auth::user()->profiles->classes->assignments;
        // $result = Result::find($id);

        $something = Assignment::find($id)->class;
    //     foreach($something as $some)
    //     {

    //     }
    // dd($something->name);
        return view('admin.editLibrary', compact('id','profile','something',  'classes', 'assignments', 'some', 'result'));

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
        $input = $request->file;
        $save = Assignment::updateOrCreate([
           'file_path' => $input
        ]);
        if($save)
        {
        return redirect('admin/doc/all');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = Assignment::destroy($id);
        if($input)
        {
            // $name = Assignment::find($id)->class;
            // dd($name);
            $flash = Session::flash('flash', 'a file has been deleted ');
            return redirect('admin/doc/all');
        }
    }
    public function news()
    {
        return view('admin.adminNews');
    }
}
