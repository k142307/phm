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

Route::get('/','InvoiceController@getInvoiceReport');

Route::get('get','SupplierController@showSupplierList');

//invoice report
Route::get('/facturacion','InvoiceController@getInvoiceReport');

//create invoice
Route::get('/crear-factura', function () {
    return view('invoice.create-invoice');
});

//submit invoice data to db
Route::post('submit-invoice','InvoiceController@SubmitInvoice')->name('submit.invoice');

Route::get('factura',function()
{
  return view('invoice.invoice-detail');
});

//suplier
Route::get('/proveedores','SupplierController@showSupplierList');

//add suplier
Route::get('/nuevo-proveedor', function () {
    return view('invoice.add-supplier');
});

//add supplier to db
Route::post('submit-supplier','SupplierController@SubmitSupplier')->name('submit.supplier');

//facility data
Route::get('/datos-centro', function () {
    return view('invoice.add-facility');
});
Route::post('submit-facility','FacilityCotroller@submitFacility')->name('submit.facility');
//service list
Route::get('/servicios', function () {
    return view('invoice.service-list');
});
  //create service missing
Route::get('/sgg', function () {
    return view('invoce.index');
});
//invoice list
Route::get('/facturas','InvoiceController@getInvoiceList');

//generate invoice

//get path data
Route::get('/patologias',"PathalogyController@getAllpath");

//pathology action page not created bc only single page is created for only one pathelogy
//get path data completed using db
//user, establisment,services,staff,patient
//added patient id field
//report getting top data from db
//nothing on http://localhost:8000/empleados.htm page
//completed supplier added page
//supplier list with pagination completed
