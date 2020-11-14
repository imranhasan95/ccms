<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Address;
use Carbon\Carbon;
use Image;

class AddressController extends Controller
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
      $addressing = Address::all();
      return view('address.index', [
        'addressing' => $addressing,
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

        $info = Address::create($request->except('_token'));
        if ($request->hasFile('address_imegrs')) {
           $address_imegrs = $request->file('address_imegrs');
           $db_file = $info->id . '.' . $address_imegrs->getClientOriginalExtension();
            Image::make($address_imegrs)->resize(1920, 772)->save( base_path('public/uploads/address_imegrs/' . $db_file ),40 );
            $info->address_imegrs = $db_file;
            $info->save();
        }

        return back()->with('status', 'Address insert  successfully!');
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
      $package_info = Address::findOrFail($id);
       return view('address.edit', [
         'package_info' => $package_info,
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
         Image::make($pack_photo)->resize(1920, 772)->save( base_path('public/uploads/address_imegrs/' . $filename ),40 );
         Address::findOrFail($request->id)->update([
           'address_imegrs' => $filename,
         ]);
        // new photo uploads -end
      }
      $product_info = Address::findOrFail($request->id)->update([
        'address_title' => $request->address_title,
        'address_description' => $request->address_description,
        'address_email' => $request->address_email,
        'address_website' => $request->address_website,
        'address_website' => $request->address_website,
        'address_number' => $request->address_number,
      ]);
      return redirect('address')->with('edit_status', 'Address Update successfully!');
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
