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
              <h5>Suppliers</h5>
              <div class=" margin-5 p10">
                <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('nuevo-proveedor') }}' ">Add Supplier</button>
              </div>
            </div>

<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco p20">
<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin-top">Supplier list</h2><div class="table-wrapper p10" style="
    overflow-x: auto;
">
                                        <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
                                            <thead style="
    background: #2e9e9a;
    color: white;
">
                                                <tr>
                                                    <th class="text-center">Name</th>

<th class="text-center">Address</th>
<th class="text-center">Registration date</th>
<th class="text-center">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

<tr class="even pointer">

                            <td class=" ">Supplier 1</td>
                            <td class=" ">acacias , 34, madrid</td>

                            <td class=" ">27/ 06/ 2016</td>



                            <td class=" last"><a href="datos-proveedor.htm">See</a>
<a href="nuevo-proveedor.htm"> / Edit</a>
                            </td>
                          </tr>
<tr class="even pointer">

                            <td class=" ">Supplier 2</td>
                            <td class=" ">leon , 14, madrid</td>

                            <td class=" ">17/ 02/ 2016</td>



                            <td class=" last"><a href="datos-proveedor.htm">See</a>
                            </td>
                          </tr>
<tr class="even pointer">

                            <td class=" ">Supplier 3</td>
                            <td class=" ">acacias , 34, madrid</td>

                            <td class=" ">27/ 06/ 2016</td>



                            <td class=" last"><a href="datos-proveedor.htm">See</a>
                            </td>
                          </tr>
<tr class="even pointer">

                            <td class=" ">Supplier 4</td>
                            <td class=" ">libertad , 4, segovia</td>

                            <td class=" ">27/ 06/ 2016</td>



                            <td class=" last"><a href="datos-proveedor.htm">See</a>
                            </td>
                          </tr>
<tr class="even pointer">

                            <td class=" ">Supplier 5</td>
                            <td class=" ">marina , 34, Valadolid</td>

                            <td class=" ">27/ 06/ 2016</td>



                            <td class=" last"><a href="datos-proveedor.htm">See</a>
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

<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">
                                            <button type="submit" class="btn boton-verde btn-primary">Continue</button>
                                            <button class="btn">Cancel</button>
<button type="submit" class="btn btn-warning">Save</button>
                                        </div></div>



@endsection
