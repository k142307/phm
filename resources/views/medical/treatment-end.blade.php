@extends('base') @section('content')

<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Patient Card</h5>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div role="tabpanel" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tab-pane no-borde active" id="tab_content6" aria-labelledby="profile-tab">
                <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Treatment end
</h2><!--<!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--><div class="row">
<div class="accordion col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10" id="accordion5" role="tablist" aria-multiselectable="true">

          <div class=" panel cabeceras no-marg-bott">
            <a class="panel-heading acordeones collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion5" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo">
              <h4 class="texto-cabeceras">Treatment end cause</h4>
            </a>
            <div id="collapseTwo5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
              <div class="panel-body no-padd-toplefrigh">
                <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12 no-padtop p13">

<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 mtop-10 no-padding-di">
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                                <label class="radio inline">
                                  <input type="radio" name="radiobtns">Referral</label>

                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                <label class="radio inline">
                                  <input type="radio" name="radiobtns">Problem resolved

</label>

                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <label class="radio inline">
                                  <input type="radio" name="radiobtns">Improvement

</label>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
                                <label class="radio inline">
                                  <input type="radio" name="radiobtns">Abandoned treatment

</label>
                              </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-di">
<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
<textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-20 estilo-input" placeholder="Notes" rows="3"></textarea></div><div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
<textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-20 estilo-input" placeholder="Other reasons" rows="3"></textarea></div></div></div>
</div>
            </div>
          </div>
        </div>
        </div>
<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">


<button type="submit" class="btn btn-warning">Save and Close</button>
                            </div>
</div>
      </div>
@endsection
