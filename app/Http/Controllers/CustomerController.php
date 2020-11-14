<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('customerregister');
    }


    public function store(Request $request)
    {
      User::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'email_verified_at' => Carbon::now(),
        'role' => 2,
        'created_at' => Carbon::now()
      ]);
      return back()->with('status', 'Your Account Register successfully!');
    }

}
