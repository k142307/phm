@extends('base')
@section('content')



<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
              <h5>Pathology list</h5>
            </div>
            <div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">
    <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Pathology table</h2>

<div class="form-group top_search  col-lg-6 col-md-6 col-sm-6 col-xs-12 mtop-10">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by pathology type">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Search</button>
                    </span>
                  </div>
            </div>

<div class="p10 ">
                      <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
                                            <thead style="
    background: #2e9e9a;
    color: white;
">
                                                <tr>
                                                    <th class="text-center"># ID</th>

<th class="text-center">Pathology</th>
<th class="text-center">Category</th>
<th class="text-center">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>



@foreach($path as $value)
<tr class="even pointer">

                            <td class=" ">{{$value->iden}}</td>
                            <td class=" ">{{$value->pathology}}</td><td class=" ">{{$value->category}}</td>
                            <td class=" last"><a href="#">See</a>
                            </td>
                          </tr>

@endforeach

                        </tbody>

                                        </table>

                    </div>



</div><div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div>


@endsection
