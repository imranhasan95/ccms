<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Post;
use App\Package;
use App\Address;
use App\Ideaslider;
use App\Packagecategory;

class FrontendController extends Controller
{
  public function index ()
  {
    $silder_pis = Slider::all();
    $posts = Post::all();
    $packageing = Package::all();
    $packageing = Package::all();
    $addressing = Address::all();
    $ideaing = Ideaslider::all();
    $categoreis = Packagecategory::all();



    return view('welcome', [
      'silder_pis' => $silder_pis,
      'posts' => $posts,
      'packageing' => $packageing,
      'addressing' => $addressing,
      'ideaing' => $ideaing,
      'categoreis' => $categoreis,

    ]);
  }
}
