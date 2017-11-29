@extends('base')
@section('content')

<div class="form-group pull-right top_search  col-lg-6 col-md-4 col-sm-6 col-xs-12 mtop-10">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type here">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Search</button>
                    </span>
                  </div>
            </div></div>

<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
              <h5>Invoicing reports</h5>
            </div><div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco p20">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mtop-10">
                    <input type="text" class="form-control" placeholder="Sart date">

                  </div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mtop-10">
                    <input type="text" class="form-control" placeholder="End date">

                  </div>

<div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 mtop-10">
    <a class="fondo-desplegable col-lg-10 col-md-10 col-sm-10 col-xs-9 btn" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
    <i class="icon-user icon-white">

    </i>Select Service</a>

    <a class="col-lg-2 col-md-2 col-sm-2 col-xs-3 btn dropdown-toggle" data-toggle="dropdown" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">

    <span class="caret"></span></a><ul class="dropdown-menu">
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-pencil"></i>Back massage</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-trash"></i>Rehabilitation</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="icon-ban-circle"></i>Arthritis</a>
        </li>
      <li class="divider"></li>
      <li>
      <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="i">

      </i>Pilates</a></li>
     </ul>    <!-- /controls -->
                                        </div><div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 mtop-10">
    <a class="fondo-desplegable col-lg-10 col-md-10 col-sm-10 col-xs-9 btn" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
    <i class="icon-user icon-white">

    </i>Select Professional</a>

    <a class="col-lg-2 col-md-2 col-sm-2 col-xs-3 btn dropdown-toggle" data-toggle="dropdown" href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">

    <span class="caret"></span></a><ul class="dropdown-menu">
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-pencil"></i>Pilar Maldonado</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#">
        <i class="icon-trash"></i>Carlos Martinez</a>
        </li>
        <li>
        <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="icon-ban-circle"></i>Angel Zarabozo</a>
        </li>
      <li class="divider"></li>
      <li>
      <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#"><i class="i">

      </i>Patricia Real</a></li>
     </ul>    <!-- /controls -->
                                        </div>









</div>

<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco p20 ptopMob-0">

<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-marg-top">Last generated invoices</h2>
<div class=" margin-5 p10">
  <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('crear-factura') }}' ">Generate invoice</button>
</div><div class=" col-md-8 col-sm-12 col-xs-12 col-lg-8  p10  fondo-blanco" style="
    overflow-x: auto;
">
                                        <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
                                            <thead style="
    background: #2e9e9a;
    color: white;
">
                                                <tr>
                                                    <th class="text-center">Invoice Num</th>

<th class="text-center">Patient ID</th>
<th class="text-center">Service</th>
<th class="text-center">Cost</th><th class="text-center">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

<tr class="even pointer">

                            <td class=" ">Fs0001</td>
                            <td class=" ">#fs123</td>



<td class=" ">Back massage</td>

<td class=" ">45€</td>

                            <td class=" last"><a href="#">Ver</a>
                            </td>
                          </tr>

<tr class="even pointer">

                            <td class=" ">Fs0003</td>
                            <td class=" ">#fs125</td>



<td class=" ">Rehabilitation</td>

<td class=" ">65€</td>

                            <td class=" last"><a href="#">See</a>
                            </td>
                          </tr><tr class="even pointer">

                            <td class=" ">Fs0001</td>
                            <td class=" ">#fs123</td>



<td class=" ">Pilates</td>

<td class=" ">45€</td>

                            <td class=" last"><a href="#">Ver</a>
                            </td>
                          </tr><tr class="even pointer">

                            <td class=" ">Fs0001</td>
                            <td class=" ">#fs123</td>



<td class=" ">Back massage</td>

<td class=" ">45€</td>

                            <td class=" last"><a href="#">Ver</a>
                            </td>
                          </tr>














                        </tbody>

                                        </table>
                                    </div>
<div class=" col-md-4 col-sm-12 col-xs-12 col-lg-4  p10 ptopMob-0" style="">
                      <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-tarifa no-padding-di" style="
    background: #555;
    color: white;
">
                <div class="tile-stats">

                  <h3 class="text-center">Today's billing</h3>
                  <h1 class="text-center">2.500 €</h1>
                  <div class="p10 col-lg-4 col-md-4 col-sm-4 col-xs-4">
  <p class="text-center borde-tarifa no-margin p10" style="
    background: #2e9e9a;
">TODAY</p></div>
<div class="p10 col-lg-4 col-md-4 col-sm-4 col-xs-4">
  <p class="text-center borde-tarifa no-margin p10" style="
    background: #2e9e9a;
">WEEK</p></div><div class="p10 col-lg-4 col-md-4 col-sm-4 col-xs-4">
  <p class="text-center borde-tarifa no-margin p10" style="
    background: #2e9e9a;
">MONTH</p></div>


                </div>
              </div>
                    </div></div><div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco p20 ptopMob-0 no-padtop">



<div class="col-md-6 col-sm-6 col-xs-12 p10 text-center mtop-0">

              <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-marg-top">Total invoiced services</h2>
<img class="img-responsive avatar-view col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12" src="./PHM_files/images/chart2.jpg" alt="Avatar" title="Cambiar icono"></div><div class="col-md-6 col-sm-6 col-xs-12 p10  text-center">

              <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-marg-top">Weekly billing</h2>
<img class="img-responsive avatar-view col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12" src="./PHM_files/images/chart.jpg" alt="Avatar" title="Cambiar icono"></div></div>



@endsection
