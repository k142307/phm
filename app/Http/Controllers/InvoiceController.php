<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoice;
use App\Http\Controllers\ApiController;
use Session;
use Redirect;
use DateTime;
class InvoiceController extends Controller
{
    //
    public function test(Request $req)
    {
      dd($req->id);
      # code...
    }

    public function SubmitInvoice(Request $req)
    {
      $api = new ApiController();
      $invoice = new invoice;
      $invoice->person = $req->person;
      $invoice->fname = $req->fname;
      $invoice->lname = $req->lname;
      $invoice->nif = $req->nif;
      $invoice->address = $req->address;
      $invoice->city = $req->city;
      $invoice->province = $req->province;
      $invoice->phone = $req->phone;
      $invoice->cell = $req->cell;
      $invoice->email = $req->email;
      $invoice->service = $req->service;
      $invoice->amount = $req->amount;
      $invoice->invoicedate = $req->invoicedate;
      $invoice->invoicepaymentdate	 = $req->invoicepaymentdate;
      $invoice->vat = $req->vat;
      $invoice->payment = $req->payment;
      $invoice->ccc = $req->ccc;
      $invoice->serviceissue = $req->serviceissue;
      $invoice->establisment_id = $api->getEstid();
      $invoice->postal = $req->postal;
      $invoice->regdate = $this->getDate();
      $invoice->fk_pat_id = "1234";
      $invoice->save();
      Session::flash('message', "Invoice Create Successfully!");
      return Redirect::back();

      # code...
    }

    public function getInvoiceList()
    {
      $invoice = invoice::paginate('4',['id','fname','service','invoicedate','payment']);
      return view('invoice.invoice-list')->with('iv',$invoice);
    }

    public function getInvoiceReport()
    {
      $invoice = invoice::take(5)->get();
      return view('invoice.invoice-report')->with('invoice',$invoice);
      # code...
    }
    public function getDate()
    {
      $dt = new DateTime();
      return $dt->format('Y-m-d');
      # code...
    }
}
