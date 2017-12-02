@extends('base') @section('content')



<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Suppliers</h5>
  <div class=" margin-5 p10">
    <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('nuevo-proveedor') }}' ">Add Supplier</button>
  </div>
</div>

<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco p20">
  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin-top">Supplier list</h2>
  <div class="table-wrapper p10" style="
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

        @foreach($sl as $val)
        <tr class="even pointer">

          <td class=" ">{{$val->sname}}</td>
          <td class=" ">{{$val->saddress}}</td>

          <td class=" ">{{ date('d/M/Y', strtotime($val->regdate)) }}</td>



          <td class=" last"><a href="datos-proveedor.htm">See</a>
          </td>
        </tr>
        @endforeach

      </tbody>

    </table>

    <div class="text-center p20">
      <div class="btn-group">
        {{$sl->links()}}
      </div>
    </div>
  </div>
</div>



@endsection
