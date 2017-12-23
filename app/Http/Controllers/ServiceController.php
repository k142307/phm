<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
class ServiceController extends Controller
{

  protected $myarray;
  public function ShowServiceList()
  {
    $api = new ApiController(session('token'));
    $response = $api->MakeConnection();
    $response = $response->Services;
    $i = 0;
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

      $myarray[] = array("id"=>$i, "name"=>$name, "timetable"=>$timetable, "staff"=>$staff, "cost"=>$cost,"length"=>$length);
      $i++;
    }
    return view('invoice.service-list')->with('services',$myarray);

  //  dd($response->Services);
  }

  public function DetailService(Request $req)
  {
    $api = new ApiController(session('token'));
    $response = $api->MakeConnection();
    $response = $response->Services[$req->id];

    $name = $response->Service->name;
    $des = $response->Service->description;
    $cost = $response->Service->price;
    $length = $response->Service->duration;
    $tags = $response->Service->tag;
    $tags = explode(",",$tags);

    $myarray = array(
      "name"=>$name,
      "des"=>$des,
      "tags"=>$tags,
      "cost"=>$cost,
      "length"=>$length);

      return view('invoice.service-detail')->with('services',$myarray);


    echo $name;
  }

}
