@extends('base') @section('content')

</div>
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Service information</h5>

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
                        ">Length: $services['length'] min</h5>
      <h5 class="no-margin-bott col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-di" style="
                            font-style: italic;
                        ">Cost:  $services['cost']€</h5>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p10">
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
                            <span>Sports physiotherapy</span></span>
      </div>
    </div>

    <p style="text-align:justify" class="no-padding-di col-lg-12 col-md-12 col-sm-12 col-xs-12 mbott-20">Plantar fasciitis consists of inflammation (-itis) of the plantar fascia, this structure is a band of elastic tissue that extends from the calcaneus, heel bone, to the area of the metatarsals, located in front of the fingers in the plant of the foot.
      This structure has an essential function of maintaining the plantar arch, absorbing and returning the energy that is produced when the foot hits the ground.<strong style="
                        "></p>


  </div>
</div>




@endsection
