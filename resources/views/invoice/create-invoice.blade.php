@extends('base')
@section('content')


<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
    <div class="page-title col-md-3 col-sm-5 col-xs-12 col-lg-6 mtop-10">
              <h4 style="
    color: #555555;
">New invoice</h4>
            </div>



                <div class="x_content">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p10">

                      <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Select who the invoice is being issued to</h2>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde no-padding-di m-bott-20 mtop-10">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 borde-2px">
                    <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Patient</p></div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 borde-2px">
                    <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Supplier</p></div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 borde-2px">
                    <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Insurance company</p></div></div>
<div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 mtop-10">

                            <fieldset>

                                        <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Invoicing data</h2><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="First name">

                                            </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Last name" disabled="">

                                            </div><!-- /control-group -->


                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">

                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="NIF / NIE" disabled="">

                                        </div>





<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
    <input type="text" id="username" value="Address" disabled="" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12">

</div>

<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
    <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="City" disabled="">
</div>

<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
    <a class="fondo-desplegable col-lg-11 col-md-11 col-sm-11 col-xs-10 btn" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
    <i class="icon-user icon-white">

    </i>Province
    </a>

    <a class="col-lg-1 col-md-1 col-sm-1 col-xs-2 btn dropdown-toggle" data-toggle="dropdown" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">

    <span class="caret"></span></a><ul class="dropdown-menu">
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-pencil"></i>Madrid</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-trash"></i>Bibao</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="icon-ban-circle"></i>Barcelona</a>
        </li>
      <li class="divider"></li>
      <li>
      <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="i">

      </i>Sevilla</a></li>
     </ul>    <!-- /controls -->
                                        </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Postal Code" disabled="">

                                            </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Phone number " disabled="">

                                            </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Cell phone number" disabled="">

                                            </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Email" disabled="">

                                            </div>

</fieldset>


</div>

<div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 mtop-10">

                            <fieldset>

                                        <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Invoiced services</h2>
<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Select service">

                                            </div>

<div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Amount" disabled="">

                                            </div>
<div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Invoice date" disabled="">

                                            </div><div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="Invoice payment date" disabled="">

                                            </div><!-- /control-group -->














<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
    <a class="fondo-desplegable col-lg-11 col-md-11 col-sm-11 col-xs-10 btn" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
    <i class="icon-user icon-white">

    </i>Select VAT</a>

    <a class="col-lg-1 col-md-1 col-sm-1 col-xs-2 btn dropdown-toggle" data-toggle="dropdown" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">

    <span class="caret"></span></a><ul class="dropdown-menu">
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-pencil"></i>Madrid</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-trash"></i>Bibao</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="icon-ban-circle"></i>Barcelona</a>
        </li>
      <li class="divider"></li>
      <li>
      <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="i">

      </i>Sevilla</a></li>
     </ul>    <!-- /controls -->
                                        </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
    <a class="fondo-desplegable col-lg-11 col-md-11 col-sm-11 col-xs-10 btn" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
    <i class="icon-user icon-white">

    </i>Payment methods</a>

    <a class="col-lg-1 col-md-1 col-sm-1 col-xs-2 btn dropdown-toggle" data-toggle="dropdown" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">

    <span class="caret"></span></a><ul class="dropdown-menu">
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-pencil"></i>Check</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-trash"></i>Cash</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="icon-ban-circle"></i>Bank transfer</a>
        </li>


     </ul>    <!-- /controls -->
                                        </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="C.C.C.: 0049 5143 12 7895643980" disabled="">

                                            </div><div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
                                                <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" value="+ Add service to issue" disabled="">

                                            </div>




</fieldset>


</div>
                  <div class="text-center p20 col-lg-12">
<button type="submit" class="btn btn-warning" style="
">Save</button></div></div>
                </div>
            </div>
</div>
@endsection
