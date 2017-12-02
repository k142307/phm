@extends('base') @section('content')

</div>
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Service List</h5>
  <div class=" margin-5 p10">
    <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ url('crear-factura') }}' ">Add Service</button>
  </div>
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">
  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Service table</h2>
  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center" style="
                        overflow-x: auto;
                        ">
    <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
      <thead style="
                        background: #2e9e9a;
                        color: white;
                        ">
        <tr>
          <th class="text-center">Service</th>
          <th class="text-center">Cost</th>
          <th class="text-center">Length</th>
          <th class="text-center">Employ Status</th>
          <th class="text-center">Schedule Status</th>
          <th class="text-center">Action</th>

        </tr>
      </thead>
      <tbody>
        <tr class="even pointer">

          <td class=" last"><a href="factura.htm">Ver</a>
            <a href="#"> / Edit</a>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="text-center p20">
      <div class="btn-group">

      </div>
    </div>
  </div>
</div>




@endsection
