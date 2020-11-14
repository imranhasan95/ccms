<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Time;
use Carbon\Carbon;
use Auth;

class TimeController extends Controller
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
      $timeing = Time::all();

      return view('time.index', [
        'timeing' => $timeing,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'event_shift_time'=>'required',

        ]);

      Time::insert([
        'event_shift_time' => $request->event_shift_time,
        'created_at' => Carbon::now()
      ]);

      return back()->with('status', 'Time insert  successfully!');
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
      $times_info = Time::findOrFail($id);

       return view('time.edit', [
         'times_info' => $times_info,
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
      Time::findOrFail($request->id)->update([
        'event_shift_time' => $request->event_shift_time,
      ]);
      return redirect('time')->with('edit_status', 'Time Update successfully!');
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
