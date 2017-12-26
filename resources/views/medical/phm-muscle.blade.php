@extends('base') @section('content')



<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Pathology list</h5>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div role="tabpanel" class="no-borde col-lg-12 col-sm-12 col-md-12 tab-pane active" id="tab_valoracion" aria-labelledby="profile-tab no-borde">
<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Musculoskeletal assessment
</h2>
<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Record all data of interest for the diagnosis and follow-up of your patient</p>

<div class="row">

    <div class="accordion col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10" id="accordion1" role="tablist" aria-multiselectable="true">
      <div class=" panel cabeceras no-marg-bott">
        <a class="panel-heading acordeones" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
          <h4 class="texto-cabeceras">Pain evaluation</h4>
        </a>
        <div id="collapseTwo1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
          <div class="panel-body no-padd-toplefrigh">
            <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding no-marg-bott no-marg-top mleft-10 p10">Numerical pain scale.</h2>
            <span class="irs js-irs-6 irs-with-grid col-lg-12 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 contenedor-barra">
                                            <span class="irs barra-dolor">
                                                <span class="irs-line barra" tabindex="-1">
                                                    <span class="irs-line-left barra-izq">
                                                    </span>
            <span class="irs-line-mid barra-medio">
                                                    </span>
            <span class="irs-line-right barra-dcha">
                                                    </span>
            </span>
            <span class="irs-min" style="visibility: visible;color: #999;font-size: 13px;line-height: 1.333;text-shadow: none;top: 0;padding: 1px 3px;background: #e1e4e9;-moz-border-radius: 4px;border-radius: 4px;position: absolute;display: block;left: -9px;cursor: default;">Little Pain</span>
            <span class="irs-max" style="visibility: visible;position: absolute;display: block;right: -9px;cursor: default;color: #999;font-size: 13px;line-height: 1.333;text-shadow: none;top: 0;padding: 1px 3px;background: #e1e4e9;-moz-border-radius: 4px;border-radius: 4px;">Heavy Pain</span>
            <span class="irs-from" style="visibility: hidden;position: absolute;display: block;top: 0;">0</span>
            <span class="irs-to" style="visibility: hidden;position: absolute;display: block;top: 0;left: 0;cursor: default;white-space: nowrap;color: #fff;font-size: 10px;line-height: 1.333;text-shadow: none;padding: 1px 5px;background: #ed5565;-moz-border-radius: 4px;border-radius: 4px;">0</span>
            <span class="irs-single" style="left: 38%;color: #fff;font-size: 14px;line-height: 1.333;text-shadow: none;padding: 1px 5px;background: #ed9055;-moz-border-radius: 4px;border-radius: 4px;position: absolute;display: block;top: 0;/* left: 0; */cursor: default;white-space: nowrap;">Moderate Pain</span>
            </span>
            <span class="irs-grid col-sm-12 col-sm-offset-0 col-xs-11 col-xs-offset-1" style="/* width: 98.6014%; *//* left: 0.599301%; */position: absolute;/* display: none; */bottom: 0;left: -35px;/* width: 100%; *//* height: 20px; */display: block;">
                                                <span class="irs-grid-text js-grid-text-1" style="left: 10%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">1</span>
            <span class="irs-grid-text js-grid-text-2" style="left: 20%;visibility: visible;margin-left: -3.75874%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">2</span>
            <span class="irs-grid-text js-grid-text-3" style="left: 30%;visibility: visible;margin-left: -3.75874%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">3</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 40%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">4</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 50%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">5</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 60%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">6</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 70%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">7</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 80%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">8</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 90%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">9</span>
            <span class="irs-grid-text js-grid-text-4" style="left: 100%;margin-left: -6.91818%;visibility: visible;margin-left: -3.75874%;position: absolute;bottom: 0;/* left: 0; */white-space: nowrap;text-align: center;font-size: 12px;line-height: 9px;padding: 0 3px;color: #000;color: #999;">10</span>
            </span><span class="irs-bar" style="left: 0.699301%;width: 43.3007%;height: 12px;background-position: 0 0;/* left: 9%; *//* width: 82%; */position: absolute;display: block;top: 25px;background: #319f9b;"></span>
            <span class="irs-bar-edge esquina-barra ">

                                                </span><span class="irs-shadow shadow-single" style="display: none;height: 3px;top: 34px;background: #000;opacity: 0.25;position: absolute;display: none;left: 0;width: 0;"></span>
            <span class="irs-slider single" style="left: 40.3007%;width: 16px;height: 18px;top: 22px;background-position: 0 -120px;background: url(https://colorlib.com/polygon/vendors/ion.rangeSlider/img/sprite-skin-flat.png) repeat-x;position: absolute;display: block;cursor: default;z-index: 1;background: black;"></span>
            </span>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 no-padding-di">
              <fieldset>
                <div class="panel-body no-padding mtop-20">




                  <div class="col-lg-12" role="tabpanel" data-example-id="togglable-tabs">
                    <div class="col-xs-12 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-1 col-sm-6 col-sm-offset-3 text-center mtop-20">
                      <img class="img-responsive bodychart" src="{{ asset('public/PHM_files/images/29395a6c1a4f7b2c1bcb96c6d38815b2.jpg') }}" alt="Avatar" title="Cambiar avatar">
                    </div>
                    <div class="col-xs-12 col-md-8 col-lg-8 col-sm-12 mtop-20">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="col-md-3 col-lg-2 active">
                          <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="pestaña">First selection</a>
                        </li>
                        <li role="presentation" class="col-md-3 col-lg-2 ">
                          <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="pestaña">+</a>
                        </li>
                      </ul>

                      <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Fill in the information about your patient's pain. If more than one pain coexists, use the selections to differentiate one from the other.</p>

                      <ul class="nav nav-tabs tabs-right col-sm-12 col-xs-12 col-lg-12 col-md-12 no-borde no-padding-di">
                        <li role="presentation" class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10">
                          <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" "=" " class="mright-10 padding-ri-5 texto-tabs no-padding ">Superficial</a>
                                </li>
                                <li role="presentation " class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                                <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2 " id="home-tab " role="tab " data-toggle="tab " aria-expanded="true " "="" class="mright-10 padding-ri-5 texto-tabs no-padding">Deep</a>
                        </li>
                        <li role="presentation" class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10">
                          <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" "=" " class="mright-10 padding-ri-5 texto-tabs no-padding ">Mechanical</a>
                                </li>
                                <li role="presentation " class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                                <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2 " id="home-tab " role="tab " data-toggle="tab " aria-expanded="true " "="" class="mright-10 padding-ri-5 texto-tabs no-padding">Inflamatory</a>
                        </li>
                        <li role="presentation" class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10">
                          <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" "=" " class="mright-10 padding-ri-5 texto-tabs no-padding ">Continuous</a>
                                </li>
                                <li role="presentation " class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                                <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2 " id="home-tab " role="tab " data-toggle="tab " aria-expanded="true " "="" class="mright-10 padding-ri-5 texto-tabs no-padding">Sporadic</a>
                        </li>
                        <div class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10" style="
                    background: #f5f2ed;
                ">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 no-padding-di mbott-10">
                            <p class="col-lg-3 col-lg-offset-3 col-sm-4 col-sm-offset-3 col-xs-8 col-md-4 col-md-offset-3 no-marg-bott no-marg-top ">Intensity</p>
                            <input type="text" class="borde col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="">
                          </div>
                        </div>
                        <div class="no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10" style="
                    background: #f5f2ed;
                ">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 no-padding-di mbott-10">
                            <p class="col-lg-5 col-lg-offset-3 col-sm-4 col-sm-offset-3 col-xs-8 col-md-6 col-md-offset-1 no-marg-bott no-marg-top ">Related with:</p>
                            <input type="text" class="borde col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="">
                          </div>
                        </div>
                      </ul>
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mtop-20">
                      <div class="accordion" id="accordionFactores" role="tablist" aria-multiselectable="true">
                        <div class=" panel cabeceras no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="headingFactores" data-toggle="collapse" data-parent="#accordionFactores" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseFactores" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Factors aggravating or relieving pain</h4>
                          </a>
                          <div id="collapseFactores" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body no-padd-toplefrigh">
                              <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                                <fieldset>
                                  <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 text-center">Aggravating factors</h2>
                                  <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Add information about aggravating factors.</p>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-di">
                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="REPOSE" rows="3">REPOSE</textarea>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="PHYSICAL ACTIVITY" rows="3">PHYSICAL ACTIVITY</textarea>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="SPECIFIC MOVEMENT / SPECIFIC POSITION" rows="3">SPECIFIC MOVEMENT / SPECIFIC POSITION</textarea>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="OTHERS" rows="3">OTHERS</textarea>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                                <fieldset>
                                  <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 text-center">Relieving factors</h2>
                                  <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Add information about relieving factors.</p>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-di">
                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="REPOSE" rows="3">REPOSE</textarea>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="PHYSICAL ACTIVITY" rows="3">PHYSICAL ACTIVITY</textarea>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="SPECIFIC MOVEMENT / SPECIFIC POSITION" rows="3">SPECIFIC MOVEMENT / SPECIFIC POSITION</textarea>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xs-12">
                                      <textarea class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 margen-top20 estilo-input" placeholder="OTHERS" rows="3">OTHERS</textarea>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>










    <div class="accordion  col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10" id="accordion_tabla1" role="tablist" aria-multiselectable="true">

      <div class="panel cabeceras no-marg-bott">
        <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tabla1" data-toggle="collapse" data-parent="#accordion_tabla1" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTabla1" aria-expanded="false" aria-controls="collapseTwo">
          <h4 class="texto-cabeceras">Assessments</h4>
        </a>
        <div id="collapseTabla1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

          <div class="panel-body p13">
            <div class=" borde-verde" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs no-borde" role="tablist">

                <li role="presentation" class="mright-10 mtop-10 active"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentATM" role="tab" id="profile-tabATM" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">ATM</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10">
                  <a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentCABEZA" role="tab" id="profile-tabCABEZA" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">HEAD</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentCUELLO" role="tab" id="profile-tabCUELLO" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">NECK</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentHOMBRO" role="tab" id="profile-tabHOMBRO" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">SHOULDER</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentCODO" role="tab" id="profile-tabCODO" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">ELBOW</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentMUÑECA-MANO" role="tab" id="profile-tabMUÑECA-MANO" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">WRIST-HAND</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentTORAX" role="tab" id="profile-tabTORAX" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">CHEST</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentLUMBAR" role="tab" id="profile-tabLUMBAR" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">LOW BACK</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentCADERA" role="tab" id="profile-tabCADERA" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">HIP</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentRODILLA" role="tab" id="profile-tabRODILLA" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">KNEE</a>
                </li>
                <li role="presentation" class="mright-10 mtop-10"><a href="file:///Users/muuwinmac2/Desktop/escritorio.htm#tab_contentTOBILLO" role="tab" id="profile-tabTOBILLO" data-toggle="tab" class="padding-ri-5 texto-subtabs" aria-expanded="false">ANKLE</a>
                </li>
              </ul>




              <div id="myTabContent" class="tab-content no-padding">

                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentATM" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di" id="tab_ATM">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaATM" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaATM" data-toggle="collapse" data-parent="#accordion_tablaATM" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaATM" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Articular mobility assessment</h4>
                          </a>
                          <div id="collapseTablaATM" class="panel-collapse no-padding collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Opening</p>
                                  <input type="text" class=" form-control borde" placeholder="RoM:">
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>



                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">



                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Closure</p>

                                  <input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-di">Right Deviation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Deviation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Protrusion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Retrusion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">
                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCabeza" role="tablist" aria-multiselectable="true">
                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionATM" data-toggle="collapse" data-parent="#accordion_tablaValoracionATM" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionATM" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras"> Muscular assessment and orthopedic testing </h4>
                          </a>
                          <div id="collapseTablaValoracionATM" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tabla7" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tabla7" data-toggle="collapse" data-parent="#accordion_tabla7" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTabla7" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Routine Questionnaire for symptom detection</h4>
                          </a>
                          <div id="collapseTabla7" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body no-padding">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <table class="data table table-striped no-margin">

                                <tbody>

                                  <tr class="borde-cuestionario">

                                    <td class="fondo-blanco"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>



                                    <td class="fondo-blanco text-center">Does the patient have difficulty and / or pain when opening mouth, for example when yawning?
                                    </td>
                                  </tr>


                                  <tr>

                                    <td class="fondo-gris"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>



                                    <td class="fondo-gris text-center"> Does the patient feel the jaw blocked, stucked or unhinged?
                                    </td>
                                  </tr>
                                  <tr class="borde-cuestionario">





                                    <td class="fondo-blanco"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>
                                    <td class="fondo-blanco text-center">Does the patient have difficulty chewing, talking and using the jaw?
                                    </td>
                                  </tr>
                                  <tr>





                                    <td class="fondo-gris"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>
                                    <td class="fondo-gris text-center"> Does the patient hear any noise from the articulations?
                                    </td>
                                  </tr>
                                  <tr class="borde-cuestionario">





                                    <td class="fondo-blanco"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>
                                    <td class="fondo-blanco text-center">Does the patient feel stiffness, tightness or tiredness in the jaw?
                                    </td>
                                  </tr>
                                  <tr>





                                    <td class="fondo-gris"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>
                                    <td class="fondo-gris text-center"> Does the patient frequently have headaches, neck pain or tooth pain?
                                    </td>
                                  </tr>
                                  <tr class="borde-cuestionario">





                                    <td class="fondo-blanco"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>
                                    <td class="fondo-blanco text-center"> Had the patient recently any trauma to the head, neck, or jaw?
                                    </td>
                                  </tr>
                                  <tr>





                                    <td class="fondo-gris"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label>
                                    </td>
                                    <td class="fondo-gris text-center"> Has the patient noticed any changes recently in the jaw?
                                    </td>
                                  </tr>
                                  <tr class="borde-cuestionario">





                                    <td class="fondo-blanco"><input type="radio" name="radiobtns"><label class="radio inline col-xs-12 col-sm-3 col-lg-2 col-md-2">
                                                </label></td>
                                    <td class="fondo-blanco text-center">Does the patient have pain in or around the ears, in the temples or cheeks?
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tabla8" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2ATM" data-toggle="collapse" data-parent="#accordion_tablaValoracion2ATM" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2ATM" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2ATM" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY"></textarea><textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTS"></textarea>
                              <textarea
                                class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentCABEZA" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di" id="tab_cabeza">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoCabeza" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaCabeza" data-toggle="collapse" data-parent="#accordion_tablaCabeza" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaCabeza" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Head assessment table</h4>
                          </a>
                          <div id="collapseTablaCabeza" class="panel-collapse no-padding collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaValoracionCabeza" data-toggle="collapse" data-parent="#accordion_tablaValoracionCabeza" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionCabeza" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionCabeza" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTINGS</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>








                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaCabeza" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaCuestionarioCabeza" data-toggle="collapse" data-parent="#accordion_tablaCuestionarioCabeza" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseCuestionarioCabeza" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Routine Questionnaire for symptom detection</h4>
                          </a>
                          <div id="collapseCuestionarioCabeza" class="panel-collapse no-padding collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
                            <div class="panel-body no-padding p13">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 borde no-padding-di m-bott-20 mtop-10">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza">

                                  <h2>SYMPTOMS
    </h2></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Headache</p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Cramp
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Oppressive
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Pulsating
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Sharp/Piercing
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Explosive
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Dizziness
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8">Instability sensation
                                  </p>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 borde no-padding-di  mtop-10">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza">

                                  <h2>CONCOMITANT SYMPTOMS
    </h2></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Eyelid edema: more closed eyelids
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Facial spasms
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Fallen eyelids
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Anisocoria: differences between pupil dilation
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Tearing
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Eyes redness
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Vertigo
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Nausea and vomiting
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8">Mucus
                                  </p>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 borde no-padding-di mbott-20 mtop-10">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza">

                                  <h2>ALARM SYMPTOMS
    </h2></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Vision alterations: (black spots, bright lights, etc.)
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Tingling sensation in arms and legs.
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Rashes.
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Dizziness and instability on standing up.
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Eyelid drooping or changes in pupil size.
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  borde-1px">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Stiff neck
                                  </p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                  <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
                                  <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ">Fever
                                  </p>
                                </div>
                              </div>




                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tabla8" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones  collapsed" role="tab" id="cabecera_tablaCabezaValorac" data-toggle="collapse" data-parent="#accordion_tablaCabezaValorac" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaCabezaValorac" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseTablaCabezaValorac" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea><textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea>
                              <textarea
                                class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentCUELLO" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoCabeza" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaCuello" data-toggle="collapse" data-parent="#accordion_tablaCuello" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaCuello" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Neck assessment table</h4>
                          </a>
                          <div id="collapseTablaCuello" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p>
                                  <input type="text" class=" form-control borde" placeholder="RoM:">
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaValoracionCuello" data-toggle="collapse" data-parent="#accordion_tablaValoracionCuello" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionCuello" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionCuello" class="panel-collapse no-padding collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tabla8" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaValoracion2Cuello" data-toggle="collapse" data-parent="#accordion_tablaValoracion2Cuello" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2Cuello" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2Cuello" class="panel-collapse no-padding collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentHOMBRO" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones  collapsed" role="tab" id="cabecera_tablaHombro" data-toggle="collapse" data-parent="#accordion_tablaHombro" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaHombro" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Shoulder assessment table </h4>
                          </a>
                          <div id="collapseTablaHombro" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Abduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Abduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Horizontal Abduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Horizontal Adduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionHombro" data-toggle="collapse" data-parent="#accordion_tablaValoracionHombro" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionHombro"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionHombro" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2Hombro" data-toggle="collapse" data-parent="#accordion_tablaValoracion2Hombro" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2Hombro"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2Hombro" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentCODO" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones  collapsed" role="tab" id="cabecera_tablaCodo" data-toggle="collapse" data-parent="#accordion_tablaCodo" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaCodo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Elbow assessment table</h4>
                          </a>
                          <div id="collapseTablaCodo" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Pronation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Supination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCodo" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionCodo" data-toggle="collapse" data-parent="#accordion_tablaValoracionCodo" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionCodo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionCodo" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaCodo" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2Codo" data-toggle="collapse" data-parent="#accordion_tablaValoracion2Codo" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2Codo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2Codo" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentMUÑECA-MANO" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoMUÑECA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones" role="tab" id="cabecera_tablaHombro" data-toggle="collapse" data-parent="#accordion_tablaMUÑECA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaMUÑECA" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">WRIST-HAND assessment table</h4>
                          </a>
                          <div id="collapseTablaMUÑECA" class="panel-collapse no-padding collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: auto;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p>
                                  <input type="text" class=" form-control borde" placeholder="RoM:">
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Radial Deviation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Cubital Deviation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexing fingers</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Finger Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCuello" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionMUÑECA" data-toggle="collapse" data-parent="#accordion_tablaValoracionMUÑECA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionMUÑECA"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionMUÑECA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMUÑECA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2MUÑECA" data-toggle="collapse" data-parent="#accordion_tablaValoracion2MUÑECA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2MUÑECA"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2MUÑECA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentTORAX" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoTORAX" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones  collapsed" role="tab" id="cabecera_tablaHombro" data-toggle="collapse" data-parent="#accordion_tablaTORAX" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaTORAX" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Chest assessment table</h4>
                          </a>
                          <div id="collapseTablaTORAX" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p>
                                  <input type="text" class=" form-control borde" placeholder="RoM:">
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionTORAX" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionHombro" data-toggle="collapse" data-parent="#accordion_tablaValoracionTORAX" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionTORAX"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionTORAX" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaTORAX" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2Hombro" data-toggle="collapse" data-parent="#accordion_tablaValoracion2TORAX" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2TORAX" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2TORAX" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentLUMBAR" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoLumbar" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones  collapsed" role="tab" id="cabecera_tablaLumbar" data-toggle="collapse" data-parent="#accordion_tablaLumbar" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaLumbar" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Low Back assessment table</h4>
                          </a>
                          <div id="collapseTablaLumbar" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Inclination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionLumbar" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionLumbar" data-toggle="collapse" data-parent="#accordion_tablaValoracionLumbar" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionLumbar"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionLumbar" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaLumbar" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2Hombro" data-toggle="collapse" data-parent="#accordion_tablaValoracion2Lumbar" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2Lumbar"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2Lumbar" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentCADERA" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoCADERA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaCADERA" data-toggle="collapse" data-parent="#accordion_tablaCADERA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaCADERA" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Hip assessment table</h4>
                          </a>
                          <div id="collapseTablaCADERA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Abduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Abduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Left Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Right Rotation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Horizontal Abduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Horizontal Adduction</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionCADERA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionCADERA" data-toggle="collapse" data-parent="#accordion_tablaValoracionCADERA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionCADERA"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionCADERA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaCADERA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2CADERA" data-toggle="collapse" data-parent="#accordion_tablaValoracion2CADERA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2CADERA"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2CADERA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentRODILLA" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoRODILLA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaRODILLA" data-toggle="collapse" data-parent="#accordion_tablaRODILLA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaRODILLA" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Knee assessment table</h4>
                          </a>
                          <div id="collapseTablaRODILLA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Varus</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Valgus</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionRODILLA" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionHombro" data-toggle="collapse" data-parent="#accordion_tablaValoracionRODILLA" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionRODILLA"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionRODILLA" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaRodilla" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2Rodilla" data-toggle="collapse" data-parent="#accordion_tablaValoracion2Rodilla" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2Rodilla"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2Rodilla" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane m10 no-borde" id="tab_contentTOBILLO" aria-labelledby="profile-tab">

                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaMusculoTOBILLO" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaTOBILLO" data-toggle="collapse" data-parent="#accordion_tablaTOBILLO" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaTOBILLO" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Ankle assessment table</h4>
                          </a>
                          <div id="collapseTablaTOBILLO" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->




                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Dorsal flexion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flex up</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Supination</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Pronation</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Inversion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Eversion</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Flex up toes</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 borde no-padding-righ">
                                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-5 mtop-10 no-padding-di mbott-10">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-bott no-marg-top no-padding-left">Toes extension</p><input type="text" class=" form-control borde" placeholder="RoM:"></div>
                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mtop-10 no-padding-di">
                                  <p class=" col-sm-12 col-xs-12 col-md-12 no-marg-top no-marg-bott text-center">Pain</p>




                                  <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 text-center no-padding-righ" style="
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
    ">
    <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default mright-10" style="width: 32px;height: 20px;border: 1px solid #dfdfdf;border-radius: 20px;cursor: pointer;display: inline-block;position: relative;vertical-align: middle;user-select: none;box-sizing: content-box;background-clip: content-box;background-color: rgb(91, 172, 169);border-color: rgb(91, 172, 169);box-shadow: rgb(91, 172, 169) 0px 0px 0px 11px inset;transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 0px;transition: background-color 0.4s, left 0.2s;width: 20px;height: 20px;background: #fff;border-radius: 100%;box-shadow: 0 1px 3px rgba(0,0,0,0.4);position: absolute;top: 0;"></small></span>YES / NO</label></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaValoracionTOBILLO" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracionTOBILLO" data-toggle="collapse" data-parent="#accordion_tablaValoracionTOBILLO" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaValoracionTOBILLO"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Muscular assessments</h4>
                          </a>
                          <div id="collapseTablaValoracionTOBILLO" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body p13">

                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">MUSCULAR STRENGTH
                          </h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 mtop-10 no-padding-left">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Assessment">

                                  </div>
                                  <div class="rating  col-lg-3 col-md-4 col-sm-3 col-xs-4 font-20 mtop-10">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">

                                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center texto-cabeceras">ORTHOPEDIC TESTING</h2>
                                <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mtop-10 ">

                                    <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-topbott-5 estilo-input" id="username" value="Testing">

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">+
                                  </button>


                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mtop-10">
                                    <button type="submit" class="boton-verde btn btn-primary col-md-12 col-sm-12 col-xs-12 col-lg-12">-</button>


                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10">

                      <div class="accordion no-padding-di" id="accordion_tablaTOBILLO" role="tablist" aria-multiselectable="true">

                        <div class="panel cabeceras  no-marg-bott">
                          <a class="panel-heading acordeones collapsed" role="tab" id="cabecera_tablaValoracion2TOBILLO" data-toggle="collapse" data-parent="#accordion_tablaValoracion2TOBILLO" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseValoracion2TOBILLO"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="texto-cabeceras">Other assessments</h4>
                          </a>
                          <div id="collapseValoracion2TOBILLO" class="panel-collapse no-padding collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">

                            <div class="panel-body">
                              <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="MECHANISMSIBILITY:"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="COMPLEMENTARY TESTINGS"></textarea></div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <textarea class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 estilo-input" rows="3" placeholder="ASSESSMENT NOTES"></textarea></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">
                                              <button class="btn">Back</button>
  <button type="button " class="btn boton-verde btn-primary" onclick=" window.location.href='resumen' ">Continue</button>
                                              <button class="btn">Cancel</button>
  <button type="submit" class="btn btn-warning">Save</button>
                                          </div>
</div>







@endsection
