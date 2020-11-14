<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packagecategory;
use Carbon\Carbon;
use Auth;

class PackagecategoryController extends Controller
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
      $categorys = Packagecategory::all();
      return view('packagecategory.index', [
        'categorys' => $categorys,
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
            'category_name'=>'required',
        ]);

      Packagecategory::insert([
        'category_name' => $request->category_name,
        'added_by' => Auth::id(),
        'created_at' => Carbon::now()
      ]);

      return back();
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
      $category_info = Packagecategory::findOrFail($id);
       return view('packagecategory.edit', [
         'category_info' => $category_info,
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
      Packagecategory::findOrFail($request->id)->update([
        'category_name' => $request->category_name,
      ]);
      return redirect('packagecategory')->with('edit_status', 'package category Update successfully!');
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
