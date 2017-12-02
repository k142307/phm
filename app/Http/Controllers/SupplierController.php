<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\supplier;
use Session;
use Redirect;
class SupplierController extends Controller
{
    //

    public function SubmitSupplier(Request $req)
    {
      $api = new ApiController();
      $supplier = new supplier;
      $supplier->sname = $req->sname;
      $supplier->vat = $req->vat;
      $supplier->saddress = $req->saddress;
      $supplier->sphone1 = $req->sphone1;
      $supplier->city = $req->city;
      $supplier->province = $req->province;
      $supplier->postal = $req->postal;
      $supplier->sphone2 = $req->sphone2;
      $supplier->scell = $req->scell;
      $supplier->semail = $req->semail;
      $supplier->website = $req->website;
      $supplier->name = $req->name;
      $supplier->address = $req->address;
      $supplier->email	 = $req->email;
      $supplier->phone= $req->phone;
      $supplier->cell= $req->cell;
      $supplier->regdate = $this->getDate();
      $supplier->establishment_id = "23";
      $supplier->save();
      Session::flash('message', "supplier Create Successfully!");
      return Redirect::back();
    }

    public function getDate()
    {
      $dt = new DateTime();
      return $dt->format('Y-m-d');
      # code...
    }
}
