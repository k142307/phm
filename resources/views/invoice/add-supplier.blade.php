@extends('base') @section('content')

<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
  <div class="page-title col-md-3 col-sm-5 col-xs-12 col-lg-6 mtop-10">
    <h4 style="
    color: #555555;
">Add new supplier</h4>
  </div>
  <div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
    @if (Session::has('message'))
    <div class="alert alert-success">
      {{ Session::get('message') }}
    </div>
    @endif
  </div>
  <div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco">

    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">

      <fieldset>
        <form action="{{ route('submit.supplier') }}" method="post">
          {{ csrf_field() }}
        <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Supplier data</h2>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="sname" placeholder="Name">

        </div>
        <!-- /control-group -->


        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">

          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="vat" placeholder="VAT" d="">

        </div>





        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" id="username" placeholder="Address" name="saddress" d="" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12">

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="city" placeholder="City" d="">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" name="province" required>
                  <option value="" disabled selected>Province</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Bibeo">Bibao</option>
                    <option value="barcelona">barcelona</option>
                    <option value="Sevilla">Sevilla</option>
                  </select>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="postal" placeholder="Postal Code" d="">

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="sphone1" placeholder="Phone number 1*" d="">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="sphone2" placeholder="Phone number 2*" d="">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="scell" placeholder="Cell phone number" d="">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="website" placeholder="Website" d="">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="semail" placeholder="Email" d="">

        </div>
      </fieldset>


    </div>
    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
      <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Contact person data</h2>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
        <input type="text" id="username" placeholder="Name" name="name" d="" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di mtop-10">
        <input type="text" id="username" placeholder="Address" name="address"  class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="email" placeholder="Email">
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="phone" placeholder="Phone number">
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="cell" placeholder="Cell phone number" >
      </div>
    </div>
    <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">
      <button type="submit" class="btn btn-warning">Save</button>
    </div>
    </form>
  </div>
</div>

  @endsection
