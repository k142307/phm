<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('medical.index');
});
//invoice report
Route::get('/facturacion', function () {
    return view('invoice.invoice-report');
});
//create invoice
Route::get('/crear-factura', function () {
    return view('invoice.create-invoice');
});
//suplier
Route::get('/proveedores', function () {
    return view('invoice.supplier-list');
});
//add suplier
Route::get('/nuevo-proveedor', function () {
    return view('invoice.add-supplier');
});
//facility data
Route::get('/datos-centro', function () {
    return view('medical.index');
});
//service list
Route::get('/servicios', function () {
    return view('invoice.service-list');
});
  //create service missing
Route::get('/sgg', function () {
    return view('invoce.index');
});
//invoice list
Route::get('/facturas', function () {
    return view('invoice.invoice-list');
});
//generate invoice
Route::get('/factura', function () {
    return view('medical.index');
});


Route::get('/patologias',"PathalogyController@getAllpath");

//pathology action page not created bc only single page is created for only one pathelogy
