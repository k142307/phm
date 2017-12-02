@extends('base') @section('content')

</div>
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

          @foreach($iv as $val)
          <td class=" ">{{ $val->id }}</td>
          <td class=" ">#fs123</td>
          <td class=" ">{{ $val->fname }}</td>
          <td class=" ">{{ $val->service }}</td>
          <td class=" ">{{ $val->invoicedate }}</td>
          <td class=" ">{{$val->payment}}€</td>
          <td class=" ">OK</td>
          <td class=" last"><a href="factura.htm">Ver</a>
            <a href="#"> / Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center p20">
      <div class="btn-group">
        {{ $iv->links() }}
      </div>
    </div>
  </div>
</div>




@endsection
