<?php

namespace skulyv\Http\Controllers;

use skulyv\Assignment;
use skulyv\ClassName;
use skulyv\Post;
use skulyv\Profile;
use skulyv\Result;
use skulyv\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use skulyv\Photo;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $post_id = Post::findOrFail($id);
        $id = Auth::user()->id;
        $profile = User::find($id);
        $class =  Auth::user()->profiles->classes;
        $assignments = Auth::user()->profiles->classes->assignments;
        $result =  Result::find($id);
        $every = Assignment::all();
        $something = Assignment::all();
        $classes = ClassName::all();
        $medical = DB::table('medicals')->where('user_id', $id)->get();
        $posts = DB::table('posts')
            ->select('posts.*', 'users.first_name')
            ->join('users', 'posts.user_id', '=', 'users.id')->orderBy('id', 'desc')->get();

//        dd($posts);
        return view('users.news', compact('posts','classes','every','profile', 'class', 'assignments',
            'something', 'result', 'medical'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
    public function news(Request $request)
    {
        if($file = $request->file('photo'))
        {
            $file_name = time() . $file->getClientOriginalName();
            $file->move('images/', $file_name);
            $upload = Photo::create(['file_path' => $file_name]);
            $input['photo_id'] = $upload->id;
        }


       $post =  Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'photo_id' => $input['photo_id']
            ]);


            if ($post) {
                return redirect()
            ->back()
            ->with('flash', 'post creation successful');
            }else{
                return 'not successful';
            }


    }
}
