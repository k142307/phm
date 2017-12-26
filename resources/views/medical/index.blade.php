@extends('base') @section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-di pbottMob-0 mbott-5  pbott-20 ptopMob-50" style="
    background-color: #555555;
    box-shadow: rgb(178, 178, 178) 5px 5px 17px;
    padding-top: 20px;
">
  <h1 class="p10 text-center no-marg" style="
    color: white;
    font-weight: 600;
    font-size: 30px;
">WELCOME TO PHYSIOMANAGER</h1>
  <p class="no-margin-bott text-center no-margin-top p5" style="
    color: white;
">Patient Manager created by Fisiosite.com</p>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2>Select patient type</h2>
  </div>
  <div class="col-lg-12 col-md-12 col-md-offset-0 col-sm-12 col-xs-12 pbott-20">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <button type="button " class="btn-lg boton-verde margin-5 col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick=" window.location.href='phm' ">New patient</button></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

      <button type="button" class="btn-lg boton-verde margin-5 col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick=" window.location.href='paciente-existente.htm' ">Existing patient</button></div>
  </div>
</div>
@endsection
