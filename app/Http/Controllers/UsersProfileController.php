<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $profile = User::find(1);
        return view('users.profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
        //dd(auth()->user()->profiles->photos->file_path);
        return view('users.editprofile', compact('profile'));
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
        $input = $request->all();
        $input = $request->except('_token');
        dd($input['status']);
//        $input = ([
//            'D_O_B'=> $request->dob,
//            'department' => $request->department,
//            'faculty' => $request->faculty,
//            'current_level' => $request->current_level,
//            'phone_number' => $request->phone_number,
//        ]);
        if($update = Profile::find($id)->update($input))
        {
            return 'its fine';
        }else{
            return 'not fine';
        }

    }
    public  function picture($id, Request $request)
    {
//
            if($file = $request->file('photo_id'))
            {
                $file_name = time() . $file->getClientOriginalName();
                $file->move('images/', $file_name);
                $upload = Photo::create(['file_path' => $file_name]);
                if($update = Profile::find($id)->update(['photo_id' => $upload->id]))
                {
                    return redirect()->back();
                }else{
                    return 'not working';
                }
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
        //
    }
}