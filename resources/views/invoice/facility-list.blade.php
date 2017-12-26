@extends('base') @section('content')

</div>
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Facility List</h5>
  <div class=" margin-5 p10">
    <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('datos-centro') }}' ">Add facility</button>
  </div>
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">
  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Facility table</h2>
  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center" style="
                        overflow-x: auto;
                        ">
    <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
      <thead style="
                        background: #2e9e9a;
                        color: white;
                        ">
        <tr>
          <th class="text-center">Facility</th>
          <th class="text-center">Company Name</th>
          <th class="text-center">Email</th>
          <th class="text-center">Action</th>

        </tr>
      </thead>
      <tbody>
        <tr class="even pointer">
          @foreach($facilities as $key=>$val)
          <td>{{ $val['name'] }}</td>
          <td>{{ $val['cname'] }}</td>
          <td>{{ $val['email'] }}</td>
          <td class=" last">
            <a href="">ver / Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center p20">
      <div class="btn-group">
        {{$facilities->links()}}
      </div>
    </div>
  </div>
</div>




@endsection
