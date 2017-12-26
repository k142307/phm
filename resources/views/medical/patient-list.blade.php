@extends('base') @section('content')
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Patient List</h5>
  <div class=" margin-5 p10">
    <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('datos-centro') }}' ">Add Patient</button>
  </div>
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">
  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center" style="
                        overflow-x: auto;">
<div class="table-wrapper p10" style="
    overflow-x: auto;
">
                                        <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
                                            <thead style="
    background: #2e9e9a;
    color: white;
">
                                                <tr>
                                                    <th class="text-center">Reference</th>

<th class="text-center">Discharge date</th>
<th class="text-center">First / Second name</th>
<th class="text-center">Status</th><th class="text-center">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

<tr>

                            <td class=" ">fs001</td>
                            <td class=" ">23/06/2017</td>

                            <td class=" ">Pilar Maldonado</td>
                            <td class=" ">Under treatment</td>

                            <td class=" last"><a href="historia-paciente.htm">See</a>
                            </td>
                          </tr>
<tr>

                            <td class=" ">fs002</td>
                            <td class=" ">23/02/2017</td>

                            <td class=" ">Jose Garcia</td>
                            <td class=" ">Under treatment</td>

                            <td class=" last"><a href="#">See</a>
                            </td>
                          </tr><tr>

                            <td class=" ">fs003</td>
                            <td class=" ">23/03/2017</td>

                            <td class=" ">Mercedes Fernandez</td>
                            <td class=" ">Under treatment</td>

                            <td class=" last"><a href="#">See</a>
                            </td>
                          </tr>
                          <tr>

                            <td class=" ">fs004</td>
                            <td class=" ">03/12/2016</td>

                            <td class=" ">Carlos Martinez</td>
                            <td class=" ">Treatment finished</td>

                            <td class=" last"><a href="#">See</a>
                            </td>
                          </tr>
<tr>

                            <td class=" ">fs001</td>
                            <td class=" ">23/06/2017</td>

                            <td class=" ">Jose tamayo</td>
                            <td class=" ">Under treatment</td>

                            <td class=" last"><a href="historia-paciente.htm">See</a>
                            </td>
                          </tr>
<tr>

                            <td class=" ">fs001</td>
                            <td class=" ">23/06/2017</td>

                            <td class=" ">Angel Zarabozo</td>
                            <td class=" ">Under treatment</td>

                            <td class=" last"><a href="historia-paciente.htm">See</a>
                            </td>
                          </tr>
<tr>

                            <td class=" ">fs001</td>
                            <td class=" ">23/06/2017</td>

                            <td class=" ">Leo Fernandez</td>
                            <td class=" ">Treatment finished</td>

                            <td class=" last"><a href="historia-paciente.htm">See</a>
                            </td>
                          </tr>
<tr>

                            <td class=" ">fs001</td>
                            <td class=" ">23/06/2017</td>

                            <td class=" ">Patricia Real</td>
                            <td class=" ">Under treatment</td>

                            <td class=" last"><a href="historia-paciente.htm">See</a>
                            </td>
                          </tr>
<tr class="even pointer">

                            <td class=" ">fs001</td>
                            <td class=" ">23/06/2017</td>

                            <td class=" ">Juanjo Aguado</td>
                            <td class=" ">Treatment finished</td>

                            <td class=" last"><a href="historia-paciente.htm">See</a>
                            </td>
                          </tr>













                        </tbody>

                                        </table>
                                    <div class="text-center p20">
                        <div class="btn-group">
                          <button class="btn btn-warning active" type="button">1</button>
                          <button class="btn btn-warning" type="button">2</button>
                          <button class="btn btn-warning" type="button">3</button>
                          <button class="btn btn-warning" type="button">4</button>
                        </div>

                        <div class="btn-group">
                          <button class="btn btn-warning" type="button">8</button>
                        </div>
                      </div></div>
                    </div>
                  </div>

@endsection
