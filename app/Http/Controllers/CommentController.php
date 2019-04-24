<?php

namespace skulyv\Http\Controllers;

use skulyv\Assignment;
use skulyv\Comment;
use skulyv\Post;
use skulyv\Profile;
use skulyv\Result;
use skulyv\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
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
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  \skulyv\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id, Comment $comment)
    {

        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \skulyv\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \skulyv\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \skulyv\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function shart($uid)
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        $class = Profile::find($id)->classes;
        $assignments = Profile::find($id)->classes->assignments;
        $result = Result::find($id);

        $something = Assignment::all();
//        dd($assignments);
        $posts = DB::table('posts')
            ->select('posts.*', 'users.first_name')
            ->join('users', 'posts.user_id', '=', 'users.id')->orderBy('id', 'desc')->take(5)->get();
        $post_id = Post::find($uid);
        $comments = DB::table('comments')
            ->where('comments.post_id', $post_id->id)->get();
        $all_comment = DB::table('comments')
            ->select('comments.*',  'users.first_name')
            ->join('users', 'comments.user_id', '=', 'users.id')->where('comments.post_id', $post_id->id)->orderBy('id', 'desc')->get();

        $poss = DB::table('users')->where('id', $post_id->id)->get();
        $image = $post_id->photos;

// dd($image);

        return view('users.comment', compact('comments', 'all_comment','image', 'poss', 'post_id', 'posts',
            'profile', 'class', 'assignments', 'something', 'result'));


    }
    public function comment(Post $id)
    {
        $uid = $id->id;
        $comment = Comment::create([
            'body' => request('comment'),
            'user_id' => Auth::user()->id,
            'post_id' => $uid
        ]);

        return back();
    }
}
