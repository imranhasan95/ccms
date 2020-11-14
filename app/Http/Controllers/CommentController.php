<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Carbon\Carbon;

class CommentController extends Controller
{
  function comment(Request $request)
       {

         $request->validate([
               'comment_body'=>'required',
           ]);

           $input = $request->all();
           $input['user_id'] = auth()->user()->id;

           Comment::create($input);

           return back();

       }
}
