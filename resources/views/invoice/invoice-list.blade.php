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
                          <h5>Invoice List</h5>
                          <div class=" margin-5 p10">
                            <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('crear-factura') }}' ">Generate Invoice</button>
                          </div>
                        </div>
                        <div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">
                        <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Invoice table</h2>
                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center" style="
                        overflow-x: auto;
                        ">
                                                    <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
                                                        <thead style="
                        background: #2e9e9a;
                        color: white;
                        ">
                                                            <tr>
                                                                <th class="text-center">Invoice Num.</th>

                        <th class="text-center">Patient ID</th>
                        <th class="text-center">Patient name</th>
                        <th class="text-center">Service</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Cost</th>
                        <th class="text-center">status</th>
                        <th class="text-center">See Invoice</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>

                        <tr class="even pointer">

                                        <td class=" ">Fs0001</td>
                                        <td class=" ">#fs123</td>

                                        <td class=" ">Pilar Maldonado</td>

                        <td class=" ">Back massage</td>
                        <td class=" ">21/06/2017</td>
                        <td class=" ">45€</td><td class=" ">OK</td>

                                        <td class=" last"><a href="factura.htm">Ver</a>
                        <a href="#"> / Edit</a>
                                        </td>
                                      </tr>

                        <tr class="even pointer">

                                        <td class=" ">Fs0003</td>
                                        <td class=" ">#fs125</td>

                                        <td class=" ">Carlos Martinez</td>

                        <td class=" ">Rehabilitation</td>
                        <td class=" ">21/06/2017</td>
                        <td class=" ">65€</td><td class=" ">Pending</td>

                                        <td class=" last"><a href="#">See</a>
                                        </td>
                                      </tr><tr class="even pointer">

                                        <td class=" ">Fs0001</td>
                                        <td class=" ">#fs123</td>

                                        <td class=" ">Andrés Fernandez</td>

                        <td class=" ">Pilates</td>
                        <td class=" ">21/06/2017</td>
                        <td class=" ">45€</td><td class=" ">OK</td>

                                        <td class=" last"><a href="#">See</a>
                                        </td>
                                      </tr><tr class="even pointer">

                                        <td class=" ">Fs0001</td>
                                        <td class=" ">#fs123</td>

                                        <td class=" ">Pilar Maldonado</td>

                        <td class=" ">Back massage</td>
                        <td class=" ">21/06/2017</td>
                        <td class=" ">45€</td><td class=" ">OK</td>

                                        <td class=" last"><a href="#">See</a>
                                        </td>
                                      </tr>














                                    </tbody>

                                                    </table>
                                                </div>




                        </div>




@endsection
