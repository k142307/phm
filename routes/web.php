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

//medical history
Route::get('tipo-paciente',function(){
  return view('medical.index');
});

//new patient 1st page
//medical history
Route::get('phm',function(){
  return view('medical.phm');
});

//new patient 2nd page
//clinicala history
Route::get('historias-clinicas',function(){
  return view('medical.clinic-history');
});
//new patient 3rd (1) page
//phm muscle
Route::get('PHM-MUSCULO',function(){
  return view('medical.phm-muscle');
});

//new patient 3rd (2) page
//neuro
Route::get('PHM-NEURO',function(){
  return view('medical.phm-neuro');
});
//new patient 3rd (2) page
//urogine
Route::get('PHM-UROGINE',function(){
  return view('medical.phm-urogine');
});

//new patient 4th page
//resumen
Route::get('resumen',function(){
  return view('medical.resumen');
});

//new patient card 5th page
//summary
Route::get('fin-tratamiento',function(){
  return view('medical.treatment-end');
});

//patient list
Route::get('pacientes',function(){
  return view('medical.patient-list');
});

Route::group(['prefix'=>"token/{token}",'middleware'=>'token'],function(){

Route::get('/','InvoiceController@getInvoiceReport');

//invoice report
Route::get('/facturacion','InvoiceController@getInvoiceReport')->name('facturacion');

//service list
Route::get('servicios','ServiceController@ShowServiceList')->name('service');

//service detail
Route::get('/info-servicio/{id}','ServiceController@DetailService')->name('service.detail');

});
Route::get('add-service','ServiceController@AddNewService');

Route::get('/token','ApiController@getEstid');

Route::get('get','SupplierController@showSupplierList');




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

//show facility list data
Route::get('/facility-list','FacilityCotroller@showFacilityList');

//facility data
Route::get('/datos-centro', function () {
    return view('invoice.add-facility');
});
Route::post('submit-facility','FacilityCotroller@submitFacility')->name('submit.facility');




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
//
// 1)invoice
// invoice report list complete (filter based searching remaining)
// generate invoice complete
// invoice list compeleted
// 2)supplier
// supplier list and add new supplier completed
// 3)facility
// add new facility and created facility list (as not given)
// 4)service
// service list and service detail compeleted from api
//
//
// incomplete
// supplier detail page not created so need a detail about what info need to show
// same as with facility detail page
// need some detail about invoice detail page to compelte
// also for service add page,need detail about what info should add
