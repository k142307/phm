@extends('base') @section('content')
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
  <div class="page-title col-md-3 col-sm-5 col-xs-12 col-lg-6 mtop-10">
    <h4 style="
         color: #555555;
         ">New invoice</h4>
  </div>
  <div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
    @if (Session::has('message'))
    <div class="alert alert-success">
      {{ Session::get('message') }}
    </div>
    @endif
  </div>


  <form class="" action="{{ route('submit.invoice') }}" method="post">

    {{ csrf_field() }}
    <div class="x_content">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p10">
        <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Select who the invoice is being issued to</h2>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde no-padding-di m-bott-20 mtop-10">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 borde-2px">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15"><input type="radio" name="person" value="patient"></div>
            <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Patient</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 borde-2px">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15"><input type="radio" name="person" value="supplier"></div>
            <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Supplier</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 borde-2px">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15"><input type="radio" name="person" value="insurance"></div>
            <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Insurance Company</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 mtop-10">
          <fieldset>
            <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Invoicing data</h2>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="fname" placeholder="First name" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="lname" placeholder="Last name" required>
            </div>
            <!-- /control-group -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="nif" placeholder="NIF / NIE" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" id="username" name="address" placeholder="Address" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="city" placeholder="City" required>
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
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="postal" placeholder="Postal Code" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="phone" placeholder="Phone number" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="cell" placeholder="Cell phone number" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="email" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" placeholder="Email" name="email" required>
            </div>
          </fieldset>
        </div>
        <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 mtop-10">
          <fieldset>
            <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Invoiced services</h2>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="service" placeholder="Enter Service" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" name="amount" placeholder="Amount" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="invoicedate" placeholder="Invoice date" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="invoicepaymentdate" placeholder="Invoice payment date" required>
            </div>
            <!-- /control-group -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" placeholder="d" name="vat" required>
                       <option value="" disabled selected>Select VAT</option>
                       <option value="Madrid">Madrid</option>
                       <option value="Bibeo">Bibao</option>
                       <option value="barcelona">barcelona</option>
                       <option value="Sevilla">Sevilla</option>
                       </select>
              <!-- /controls -->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" placeholder="d" name="payment" required>
                      <option value="" disabled selected>Payment Method</option>
                        <option value="check">Check</option>
                        <option value="cash">Cash</option>
                        <option value="bank transfer">Bank Transfer</option>
                      </select>
              <!-- /controls -->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="ccc" placeholder="C.C.C.: 0049 5143 12 7895643980" required>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
              <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" name="serviceissue" placeholder="+ Add service to issue" required>
            </div>
          </fieldset>
        </div>
        <div class="text-center p20 col-lg-12">
          <button type="submit" class="btn btn-warning" style="
                  ">Save</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
