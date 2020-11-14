<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;
use App\Packagecategory;
use App\Address;
use Carbon\Carbon;
use Image;

class PackageController extends Controller
{

  public function __construct()
      {
          // $this->middleware('auth');
          // $this->middleware('verified');
          // $this->middleware('checkrole');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packageing = Package::all();
        $categoreis = Packagecategory::all();

        return view('package.index', [
          'packageing' => $packageing,
          'categoreis' => $categoreis,
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
      $info = Package::create($request->except('_token'));
      if ($request->hasFile('pack_imegrs')) {
         $slider_imegrs = $request->file('pack_imegrs');
         $db_file = $info->id . '.' . $slider_imegrs->getClientOriginalExtension();
          Image::make($slider_imegrs)->resize(427, 640)->save( base_path('public/uploads/Package_imegrs/' . $db_file ),40 );
          $info->pack_imegrs = $db_file;
          $info->save();
      }

      return back()->with('status', 'Package_imegrs insert  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $packagest = Package::find($id);
        return view('package', [
          'packagest' => $packagest,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $addressing = Address::all();
      $package_info = Package::findOrFail($id);
      $categoreis = Packagecategory::all();

       return view('package.edit', [
         'package_info' => $package_info,
         'categoreis' => $categoreis,
         'addressing' => $addressing,
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
         Image::make($pack_photo)->resize(427, 640)->save( base_path('public/uploads/Package_imegrs/' . $filename ),40 );
         Package::findOrFail($request->id)->update([
           'pack_imegrs' => $filename,
         ]);
        // new photo uploads -end
      }
      $product_info = Package::findOrFail($request->id)->update([
        'category_id' => $request->category_id,
        'package_title' => $request->package_title,
        'pack_description' => $request->pack_description,
        'pack_price' => $request->pack_price,
      ]);
      return redirect('package')->with('edit_status', 'Package Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $packagei = Package::find($id)->delete();

      return back();
    }
}
