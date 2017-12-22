<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
class ServiceController extends Controller
{

  protected $myarray;
  public function ShowServiceList()
  {
    $api = new ApiController();
    $response = $api->MakeConnection();
    $response = $response->Services;
    foreach ($response as $key => $value) {

      $name = $value->Service->name;
      $cost = $value->Service->price;
      $length = $value->Service->duration;
      if(sizeof($value->Timetable)>0)
      {
        $timetable = "OK";
      }
      else
      {
        $timetable = "NO SCHEDULE";
      }

      if(sizeof($value->Staff)>0)
      {
        $staff = "OK";
      }
      else
      {
        $staff = "NO PROFESSIONAL";
      }

      $myarray[] = array("name"=>$name, "timetable"=>$timetable, "staff"=>$staff, "cost"=>$cost,"length"=>$length);
    }
    return view('invoice.service-list')->with('services',$myarray);

  //  dd($response->Services);
  }
}
