<?php

namespace skulyv\Http\Controllers;

use skulyv\Assignment;
use skulyv\ClassName;
use skulyv\Profile;
use skulyv\Result;
use skulyv\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class libraryController extends Controller
{
    //
    public  function index()
    {

        $id = Auth::user()->id;
        $profile = User::find($id);
        $class = Profile::find($id)->classes;
        $assignments = Profile::find($id)->classes->assignments;
        $result =  Result::find($id);
        $every = Assignment::all();
        $something = Assignment::all();
        $classes = ClassName::all();
//        dd($assignments);
        return view('users.library', compact('classes','every','profile', 'class', 'assignments', 'something', 'result'));
    }
}
