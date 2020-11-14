<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Post;
use App\User;
use Carbon\Carbon;
use Image;

class PostController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('verified');
          // $this->middleware('checkrole');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'post_name'=>'required',
            'title'=>'required',
            'body'=>'required',

        ]);

      $info = Post::create($request->except('_token'));
      if ($request->hasFile('post_images')) {
         $post_imegrs = $request->file('post_images');
         $db_file = $info->id . '.' . $post_imegrs->getClientOriginalExtension();
          Image::make($post_imegrs)->resize(1170, 788)->save( base_path('public/uploads/post_images/' . $db_file ),40 );
          $info->post_images = $db_file;
          $info->save();
      }

            return back()->with('status', 'Post insert successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
        return view('post.show', compact('post'));
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
