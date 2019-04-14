<?php

namespace skulyv\Http\Controllers;

use skulyv\Assignment;
use skulyv\Profile;
use skulyv\Result;
use Skulyv\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
//        $class =  Profile::find($id)->classes;
//        $assignments = Profile::find($id)->classes->assignments;
//        $result =  Result::find($id);

        $something = Assignment::all();
//        dd($assignments);
        return view('admin.assignment', compact('id', 'profile', 'class', 'assignments', 'something', 'result'));
    }
}
