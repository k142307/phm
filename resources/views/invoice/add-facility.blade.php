@extends('base') @section('content')

<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
  <div class="page-title col-md-3 col-sm-5 col-xs-12 col-lg-6 mtop-10">
    <h4 style="
    color: #555555;">Professional Fiscal Data</h4>
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

        <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Company data</h2>
        <form  action="{{ route('submit.facility') }}" method="post">
          {{ csrf_field() }}
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="cname" placeholder="Administrator name">

        </div>
        <!-- /control-group -->


        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">

          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="vat" placeholder="VAT" >

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" id="username" placeholder="Address" name="caddress" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="City" name="ccity">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" name="cprovince" required>
                  <option value="" disabled selected>Province</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Bibeo">Bibao</option>
                    <option value="barcelona">barcelona</option>
                    <option value="Sevilla">Sevilla</option>
                  </select>
          <!-- /controls -->
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
          <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Postal Code" name="cpostal">

        </div>

      </fieldset>


    </div>
    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">


      <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Facility data</h2>


      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
        <input type="text" id="username" placeholder="Name"  class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="name">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di mtop-10">
        <input type="text" id="username" placeholder="Address"  class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="address">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="City" name="city">
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" name="province" required>
                <option value="" disabled selected>Province</option>
                  <option value="Madrid">Madrid</option>
                  <option value="Bibeo">Bibao</option>
                  <option value="barcelona">barcelona</option>
                  <option value="Sevilla">Sevilla</option>
                </select>
        <!-- /controls -->
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Postal Code" name="postal">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Phone number 1*" name="phone1">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Phone number 2*" name="phone2">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Cell phone number" name="cell">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Website" name="website">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="email" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Email" name="email">

      </div>


      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Security Head / Administrator" name="head">
        <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di no-margin-bott"> <strong>See employee data</strong></p>
      </div>
      <div class="input-group ptop-10 no-padding-di pbott-10">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Add picture</button>
          </span><input type="text" class="form-control p10" placeholder="Nothing selected">

      </div>
    </div>



    <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">
      <button type="submit" class="btn btn-warning">Save</button>
    </div>
    </form>
  </div>
</div>

@endsection
