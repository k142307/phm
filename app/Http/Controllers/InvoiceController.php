<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoice;
class InvoiceController extends Controller
{
    //
    public function SubmitInvoice(Request $req)
    {
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
      $invoice->establisment_id = "ddd";
      $invoice->postal = $req->postal;
      $invoice->save();
      dd($req->all());

      # code...
    }
}
