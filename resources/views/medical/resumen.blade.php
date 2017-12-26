@extends('base') @section('content')

<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Patient Card</h5>
</div>
<div role="tabpanel" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tab-pane no-borde active" id="tab_content5" aria-labelledby="profile-tab">
  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Summary</h2>
  <div class="row">
    <div class="accordion col-lg-6 col-md-6 col-sm-12 col-xs-12 mtop-10" id="accordion2" role="tablist" aria-multiselectable="true">
      <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" name="province" required>
              <option value="" disabled selected>Select Pathalogy</option>
                <option value="Madrid">Alfonso Martinez</option>
                <option value="Bibeo">Ruben Iturrarte</option>
                <option value="barcelona">Pilar Maldonado</option>
              </select>
    </div>
    <!-- <div class="accordion col-lg-6 col-md-6 col-sm-12 col-xs-12 mtop-10" id="accordion4" role="tablist" aria-multiselectable="true">
<p>Pathology selected</p>
</div> -->
  </div>
  <div class="row">
    <div class="accordion col-lg-6 col-md-6 col-sm-12 col-xs-12 mtop-10" id="accordion2" role="tablist" aria-multiselectable="true">

      <div class=" panel cabeceras  no-marg-bott">
        <a class="panel-heading acordeones collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion2" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
          <h4 class="texto-cabeceras">Assessment summary</h4>
        </a>
        <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
          <div class="panel-body no-padd-toplefrigh">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
              <fieldset>




                <!-- /control-group -->




                <!-- /form-actions -->
                <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Based on the patient's assessment, summarize the following aspects:</p>






                <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="PHYSIOTHERAPY DIAGNOSIS "></textarea><textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input"
                  rows="3" placeholder="TREATMENT OBJECTIVE"></textarea><textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="PROGNOSIS"></textarea><textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input"
                  rows="3" placeholder="ADDITIONAL NOTES"></textarea></fieldset>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="accordion col-lg-6 col-md-6 col-sm-12 col-xs-12 mtop-10" id="accordion4" role="tablist" aria-multiselectable="true">

      <div class=" panel cabeceras  no-marg-bott">
        <a class="panel-heading collapsed acordeones" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion4" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
          <h4 class="texto-cabeceras">Action plan / treatment

</h4>
        </a>
        <div id="collapseTwo4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
          <div class="panel-body no-padd-toplefrigh">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
              <fieldset>

                <!-- /form-actions -->
                <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Fill in the following fields depending on the proposed treatment</p>

                <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MANUAL THERAPY
"></textarea><textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ELECTROTHERAPY"></textarea><textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input"
                  rows="3" placeholder="BANDAGES / ORTHESIS / FIXINGS
"></textarea><textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="THERAPEUTIC EXERCISE
"></textarea></fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">
    <button type="button " class="btn boton-verde btn-primary" onclick=" window.location.href='fin-tratamiento' ">Continue</button>

    <button type="submit" class="btn btn-warning">Save</button>
    <button class="btn btn-danger">Cancel</button></div>
</div>
@endsection
