<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ideaslider;
use Image;
use Carbon\Carbon;

class IdeasliderController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('verified');
          $this->middleware('checkrole');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ideaing = Ideaslider::all();
      return view('ideas.index', [
        'ideaing' => $ideaing,
      ]);
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
      $request->validate([
            'idea_title'=>'required',
        ]);

      $info = Ideaslider::create($request->except('_token'));
      if ($request->hasFile('idea_imegrs')) {
         $slider_imegrs = $request->file('idea_imegrs');
         $db_file = $info->id . '.' . $slider_imegrs->getClientOriginalExtension();
          Image::make($slider_imegrs)->resize(1920, 850)->save( base_path('public/uploads/ideaslider_imegrs/' . $db_file ),40 );
          $info->idea_imegrs = $db_file;
          $info->save();
      }

      return back()->with('status', 'Ideaslider insert  successfully!');
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
      $ideas_info = Ideaslider::findOrFail($id);
       return view('ideas.edit', [
         'ideas_info' => $ideas_info,
       ]);
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
      if ($request->hasFile('new_photo')) {
        // new photo uploads -start
        $pack_photo = $request->file('new_photo');
        $filename = $request->id . '.' . $pack_photo->getClientOriginalExtension();
         Image::make($pack_photo)->resize(1920, 850)->save( base_path('public/uploads/ideaslider_imegrs/' . $filename ),40 );
         Ideaslider::findOrFail($request->id)->update([
           'idea_imegrs' => $filename,
         ]);
        // new photo uploads -end
      }
      $product_info = Ideaslider::findOrFail($request->id)->update([
        'idea_title' => $request->idea_title,
      ]);
      return redirect('ideas')->with('edit_status', 'Ideas Update successfully!');
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
