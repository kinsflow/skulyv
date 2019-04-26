<?php

namespace skulyv\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllController extends Controller
{
    public function student()
    {
        $id = Auth::user()->profiles->class_id;
        $students = DB::table('profiles')->where('user_id', $id )->get();

        $posts = DB::table('profiles')
            ->where('profiles.class_id', $id)
            ->select('profiles.*', 'users.first_name', 'users.last_name')
            ->join('users', 'profiles.user_id','=', 'users.id')->orderBy('id', 'desc')->get();
        // dd($posts);
        return view('admin.adminStudent', compact('posts'));
    }
    public function result()
    {
        return view('admin.adminResult');
    }

}
