<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
use Carbon\Carbon;

class SliderController extends Controller
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
    $sliders =Slider::withTrashed()->get();
    $silder_pis = Slider::all();
        return view('slider.index', [
          'silder_pis' =>$silder_pis ,
          'sliders' =>$sliders ,
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
      $info = Slider::create($request->except('_token'));
      if ($request->hasFile('slider_imegrs')) {
         $slider_imegrs = $request->file('slider_imegrs');
         $db_file = $info->id . '.' . $slider_imegrs->getClientOriginalExtension();
          Image::make($slider_imegrs)->resize(2020, 1050)->save( base_path('public/uploads/slider_imegrs/' . $db_file ),40 );
          $info->slider_imegrs = $db_file;
          $info->save();
      }

      return back()->with('status', 'Slider insert  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('slider.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $slider_info = Slider::findOrFail($id);
      return view('slider.edit', [
        'slider_info' => $slider_info,
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
        $slider_photo = $request->file('new_photo');
        $filename = $request->id . '.' . $slider_photo->getClientOriginalExtension();
         Image::make($slider_photo)->resize(2020, 1050)->save( base_path('public/uploads/slider_imegrs/' . $filename ),40 );
         Slider::findOrFail($request->id)->update([
           'slider_imegrs' => $filename,
         ]);
        // new photo uploads -end
      }
      $product_info = Slider::findOrFail($request->id)->update([
        'slider_title' => $request->slider_title,
        'slider_shot' => $request->slider_shot,
        'slider_long' => $request->slider_long,
      ]);
      return redirect('slider')->with('edit_status', 'Slider Update successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $silder_p = Slider::find($id)->delete();

      return back();
    }
}
