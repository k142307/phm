@extends('base') @section('content')

</div>
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Service Information</h5>
  <div class=" margin-5 p10">
    <button type="button" class="btn boton-verde btn-primary margin-5" onclick=" window.location.href='{{ route('service',session('token')) }}' ">Back</button>
  </div>
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">

  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center" style="
                        overflow-x: auto;">


    <div class="p10 col-lg-12 col-md-12 col-sm-12 col-xs-12 fondo-gris">
      <h5 class="no-margin-bott col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-di" style="
                            font-style: italic;
                        ">{{$services['name']}}</h5>
      <h5 class="no-margin-bott col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-di" style="
                            font-style: italic;
                        ">Length: {{$services['length']}} min</h5>
      <h5 class="no-margin-bott col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-di" style="
                            font-style: italic;
                        ">Cost:  {{$services['cost']}}€</h5>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p10">
        @foreach($services['tags'] as $key => $val)
        <span class="tag mtop-10" style="
                            background: #555;
                            color: white;
                            -webkit-border-radius: 2px;
                            display: block;
                            float: left;
                            padding: 5px 9px;
                            color: #F1F6F7;
                            margin-right: 5px;
                            font-weight: 500;
                            margin-bottom: 5px;
                            font-family: helvetica;">
                            <span>{{ $val }}</span></span>
          @endforeach
      </div>
    </div>

    <p style="text-align:justify" class="no-padding-di col-lg-12 col-md-12 col-sm-12 col-xs-12 mbott-20">
      {{ $services['des'] }}
    </p>

  </div>
</div>




@endsection
