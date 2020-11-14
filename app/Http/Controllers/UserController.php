<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use App\Http\Requests\PasswoedValidation;

class UserController extends Controller
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
        return view('profile.index');
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
    public function store(PasswoedValidation $request)
    {
        $user_id = Auth::id();
        $from_db = User::find($user_id)->password;
        if (Hash::check($request->old_password, $from_db )) {
          User::find($user_id)->update([
            'password' => Hash::make($request->new_password)
          ]);
        }
        return back()->with('status', 'Password Change Successfully!');
      }
    }
