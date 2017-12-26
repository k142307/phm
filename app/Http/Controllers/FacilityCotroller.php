<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\facility;
use Session;
use Redirect;

class FacilityCotroller extends Controller
{
    //

    public function submitFacility(Request $req)
    {
      $api = new ApiController();
      $facility = new facility;

      $facility->cname = $req->cname;
      $facility->vat = $req->vat;
      $facility->caddress = $req->caddress;
      $facility->ccity = $req->ccity;
      $facility->cprovince = $req->cprovince;
      $facility->cpostal = $req->cpostal;
      $facility->name = $req->name;
      $facility->address = $req->address;
      $facility->city = $req->city;
      $facility->province = $req->province;
      $facility->postal = $req->postal;
      $facility->phone1 = $req->phone1;
      $facility->phone2 = $req->phone2;
      $facility->cell = $req->cell;
      $facility->website = $req->website;
      $facility->email = $req->email;
      $facility->head = $req->head;
      $facility->establishment_id = "123";
      $facility->save();
      Session::flash('message', "facility Create Successfully!");
      return Redirect::back();

    }

    public function showFacilityList()
    {

      $sl = facility::paginate('4',['name','cname','email']);

      return view('invoice.facility-list')->with('facilities',$sl);
    }
}
