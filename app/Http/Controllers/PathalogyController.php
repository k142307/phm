<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pathology;
class PathalogyController extends Controller
{

  public function getAllpath()
  {

    $path = pathology::all();

    return view('medical.pathology')->with('path',$path);
    # code...
  }
    //
}
