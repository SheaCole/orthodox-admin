<?php

namespace App\Http\Controllers;

use App\People;

use Illuminate\Http\Request;

use App\Http\Requests;

class Pages extends Controller
{
//Main site pages
  public function welcome()
  {
    return view('home.welcome');
  }

  public function about()
  {
    return view('home.about');
  }

  public function calendar()
  {
    return view('home.calendar');
  }

  public function all()
  {
    return People::all();
  }

  public function settings()
  {
    return view('home.settings');
  }


//People pages
  public function people()
  {
    $people = People::all();

    return view('home.people',compact('people'));
  }

  public function profile($slug)
  {
    $person = People::whereSlug($slug)->first();
    return view('home.profile', compact('person'));
  }

}
