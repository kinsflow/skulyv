<?php

namespace skulyv\Http\Controllers;
use skulyv\Assignment;
use skulyv\Profile;
use skulyv\Result;
use skulyv\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        $class =  Profile::find($id)->classes;
        $assignments = Profile::find($id)->classes->assignments;
        $result =  Result::find($id);

        $something = Assignment::all();
//        dd($assignments);
        return view('home', compact('profile', 'class', 'assignments', 'something', 'result'));
    }
}
