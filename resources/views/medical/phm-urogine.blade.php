@extends('base') @section('content')
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 margin-5">
  <h5>Patient Card</h5>
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ">
  <div role="tabpanel" class="no-borde col-lg-12 col-sm-12 col-md-12 tab-pane active" id="tab_valoracion" aria-labelledby="profile-tab no-borde">

    <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Urogynecological evaluation
                </h2>
    <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Record all data of interest for the diagnosis and follow-up of your patient. </p>

    <div class="row">
      <div class="accordion col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10" id="accordion1" role="tablist" aria-multiselectable="true">
        <div class=" panel cabeceras no-marg-bott">
          <a class="panel-heading acordeones collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
            <h4 class="texto-cabeceras">Pain assessment</h4>
          </a>
          <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
            <div class="panel-body no-padd-toplefrigh">
              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 no-padding-di">
                <fieldset>
                  <div class="panel-body no-padding mtop-20">


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
                    <span class="irs-min" style="visibility: visible;color: #999;font-size: 13px;line-height: 1.333;text-shadow: none;top: 0;padding: 1px 3px;background: #e1e4e9;-moz-border-radius: 4px;border-radius: 4px;position: absolute;display: block;left: -9px;cursor: default;">Little pain</span>
                    <span class="irs-max" style="visibility: visible;position: absolute;display: block;right: -9px;cursor: default;color: #999;font-size: 13px;line-height: 1.333;text-shadow: none;top: 0;padding: 1px 3px;background: #e1e4e9;-moz-border-radius: 4px;border-radius: 4px;">Heavy pain</span>
                    <span class="irs-from" style="visibility: hidden;position: absolute;display: block;top: 0;">0</span>
                    <span class="irs-to" style="visibility: hidden;position: absolute;display: block;top: 0;left: 0;cursor: default;white-space: nowrap;color: #fff;font-size: 10px;line-height: 1.333;text-shadow: none;padding: 1px 5px;background: #ed5565;-moz-border-radius: 4px;border-radius: 4px;">0</span>
                    <span class="irs-single" style="left: 38%;color: #fff;font-size: 14px;line-height: 1.333;text-shadow: none;padding: 1px 5px;background: #ed9055;-moz-border-radius: 4px;border-radius: 4px;position: absolute;display: block;top: 0;/* left: 0; */cursor: default;white-space: nowrap;">Moderate pain</span>
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
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mtop-10 no-padding-di mbott-10">
                      <h5 class="col-lg-7 col-sm-8  col-xs-10 col-md-10  no-marg-bott no-marg-top ">Numeric pain scale</h5>
                      <input type="text" class="borde col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="">
                    </div>

                    <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


                    <div class="col-lg-12" role="tabpanel" data-example-id="togglable-tabs">
                      <div class="col-xs-12 col-md-4 col-md-offset-0 col-lg-4 col-sm-6 col-sm-offset-3 text-center mtop-20">
                        <img class="img-responsive bodychart" src="./PHM_files/images/catchmypain.png" alt="Avatar" title="Change the avatar">
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
                          <li role="presentation" class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 active">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="mright-10 padding-ri-5 texto-tabs no-padding ">Superficial</a>
                            </li>
                            <li role="presentation " class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2 " id="home-tab " role="tab " data-toggle="tab " aria-expanded="true " class="mright-10 padding-ri-5 texto-tabs no-padding">Deep</a>
                          </li>
                          <li role="presentation" class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"  class="mright-10 padding-ri-5 texto-tabs no-padding ">Mechanical</a>
                            </li>
                            <li role="presentation " class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2 " id="home-tab " role="tab " data-toggle="tab " aria-expanded="true " class="mright-10 padding-ri-5 texto-tabs no-padding">Inflamatory</a>
                          </li>
                          <li role="presentation" class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"  class="mright-10 padding-ri-5 texto-tabs no-padding ">Continuous</a>
                            </li>
                            <li role="presentation " class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2 " id="home-tab" role="tab " data-toggle="tab " aria-expanded="true "  class="mright-10 padding-ri-5 texto-tabs no-padding">Sporadic</a>
                          </li>
                          <li role="presentation" class=" no-padding-di borde col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10">
                            <a href="file:///Users/muuwinmac2/Desktop/PHM2.htm#tab_seleccion2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="mright-10 padding-ri-5 texto-tabs no-padding ">Related with</a>
                            </li>
                            <li role="presentation " class=" no-padding-di col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 mtop-10 ">
                                <button aria-expanded="false " type="button " class="boton-desplegable btn btn-default dropdown-toggle " data-toggle="dropdown ">N / A <span class="caret "></span> </button></li>
                        </ul>
                    </div>


             </div>
            </div>
            </fieldset>
            </div>
            <div class="accordion col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 " id="accordion_tabla1 " role="tablist " aria-multiselectable="true ">

                                  <div class="panel cabeceras no-marg-bott ">
                                    <a class="panel-heading acordeones collapsed " role="tab " id="cabecera_tabla1 " data-toggle="collapse " data-parent="#accordion_tabla1 " href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTabla1
                              " aria-expanded="false " aria-controls="collapseTwo ">
                                      <h4 class="texto-cabeceras ">Cuestionario de síntomas</h4>
                                    </a>
                                    <div id="collapseTabla1 " class="panel-collapse collapse " role="tabpanel " aria-labelledby="headingTwo " aria-expanded="false " style="height: 0px; ">

                                    <div class="panel-body no-padding p13 ">
                                        <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


              <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>PRESENCE
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8 ">Pregnant woman</p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-8 col-sm-8 col-xs-8 ">Woman in postpartum period
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-11 col-sm-11 col-xs-10 no-padding-righ ">Woman with voiding dysfunctions, anorectal, sexual problems or dysfunctions
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-11 col-sm-11 col-xs-10 ">Man with voiding or sexual dysfunction
            </p></div></div><div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>VISUAL INSPECTION
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Scars
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Episiotomy
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Caesarean sections
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Keloids
            </p></div></div><div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>INTRA-VAGINAL INSPECTION
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Tone
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Normotonia
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Hypertonia
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-9 col-md-10 col-sm-8 col-xs-8 ">Hypotonia
            </p></div></div><div class="row col-lg-12 col-md-12 col-sm-1 col-xs-12 ">
            </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>PERINEAL EVALUATION
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Vaginal examination:
            </p><div class="col-sm-12 ">
              <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding-righ ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">Resistance
            </p></div><div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding-righ ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">Depressible
            </p></div></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Shrinkage
            </p><div class="col-sm-12 ">
              <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding-righ ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">Good
            </p></div><div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding-righ ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">Bad
            </p></div></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Relaxation
            </p><div class="col-sm-12 ">
              <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding-righ ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">Good
            </p></div><div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding-righ ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">Bad
            </p></div></div></div></div>




              <div class="col-lg-4 col-md-8 col-sm-6 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>UROLOGICAL BALL
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Voiding dysfunction:
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Non complete voiding sensation?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Difficulty initiating urination?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft-40 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-11 col-sm-10 col-xs-10 no-padding-righ ">Less or intermittent urine flow?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Bladder pain:
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px pleft-40 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-11 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Low belly pain with full bladder or when you finish urinating?
                                    Incontinence
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px pleft-40 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-11 col-sm-10 col-xs-10 no-padding-righ ">Urine escapes with exertion, sneezing, coughing?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px pleft-40 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-11 col-sm-10 col-xs-10 no-padding-righ ">Do you feel compelled to go to the bathroom all of a sudden?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px pleft-40 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Both happen at the same time
            </p></div></div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>ANORRECTAL SPHERE
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">A lot of effort to evacuate?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-11 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Faecal losses? Of gas? liquid? Solid?
            </p></div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-7 col-md-8 col-sm-7 col-xs-7 no-padding-righ ">Frequency?
            </p><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mtop-10 no-padding-di mbott-10 "><input type="text " class=" form-control borde " placeholder=" "></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-7 col-md-8 col-sm-7 col-xs-7 no-padding-righ ">How does it affect your quality of life?   (0  a   10)
            </p><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mtop-10 no-padding-di mbott-10 "><input type="text " class=" form-control borde " placeholder=" "></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde no-padding-di ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>PROLAPSES
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Lump in your genitals?
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-11 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Maneuver or change position to urinate, defecate or maintain sexual relationships?
            </p></div></div></div><div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 borde no-padding-di mbott-20 mtop-10 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center cuestionario-cabeza ">

                              <h2>SEXUAL SPHERE
            </h2></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Pain at the onset of sexual intercourse
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Pain at end of penetration
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-7 col-md-5 col-sm-4 col-xs-7 no-padding-righ ">Intensity,  time?
            </p><div class="col-lg-3 col-md-3 col-sm-2 col-xs-3 mtop-10 no-padding-di mbott-10 "><input type="text " class=" form-control borde " placeholder=" "></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Varies by position
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Preservation of libido
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">Lubrication preservated
            </p></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borde-1px ">
                                <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario "><input type="checkbox " class="flat checks "></div>
                              <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-padding-righ ">When reaching orgasm, pain increases during it
            </p></div></div></div>
                                    </div>
                                  </div>

                                </div></div>
            </div>
            </div>
            </div>













                                </div>

            <div class="row ">
              <div class="accordion col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 " id="accordion2 " role="tablist " aria-multiselectable="true ">

                                  <div class=" panel cabeceras no-marg-bott ">
                                    <a class="panel-heading acordeones collapsed " role="tab " id="headingTwo1 " data-toggle="collapse " data-parent="#accordion2 " href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTwo3
                              " aria-expanded="false " aria-controls="collapseTwo ">
                                      <h4 class="texto-cabeceras ">Assessments</h4>
                                    </a>
                                    <div id="collapseTwo3 " class="panel-collapse collapse " role="tabpanel " aria-labelledby="headingTwo " aria-expanded="false " style="height: 0px; ">
                                      <div class="panel-body no-padd-toplefrigh ">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
              <fieldset>




             <!-- /control-group -->




                                                     <!-- /form-actions -->
             <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->






            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
              <textarea class="estilo-input col-sm-6 col-md-6 col-lg-6 col-xs-6 mtop-10 " rows="3 " placeholder="MUSCULAR ASSESSMENT "></textarea><textarea class="estilo-input col-sm-6 col-md-6 col-lg-6 col-xs-6 mtop-10 " rows="3 " placeholder="OTHER
                              TESTS "></textarea></div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtop-10 ">

              <div class="accordion no-padding-di " id="accordion_tablaOxford " role="tablist " aria-multiselectable="true ">

                                  <div class="panel cabeceras no-marg-bott ">
                                    <a class="panel-heading acordeones collapsed " role="tab " id="cabecera_tablaOxford " data-toggle="collapse " data-parent="#accordion_tablaOxford " href="file:///Users/muuwinmac2/Desktop/physiomanager2.html#collapseTablaOxford
                              " aria-expanded="false " aria-controls="collapseTwo ">
                                      <h4 class="texto-cabeceras ">Modified Oxford Scale</h4>
                                    </a>
                                    <div id="collapseTablaOxford " class="panel-collapse no-padding collapse " role="tabpanel " aria-labelledby="headingTwo " aria-expanded="false " style="height: 0px; ">
                                      <div class="panel-body no-padding ">
                                        <!--<p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->


              <table class="data table table-striped no-margin ">

                                          <tbody>

                                            <tr class="borde-cuestionario ">

                                              <td class="fondo-blanco text-center ">DEGREE</td>



                                            <td class="fondo-blanco text-center ">MUSCULAR RESPONSE
            </td></tr>


                                          <tr>

                                              <td class="fondo-gris text-center ">0</td>



                                            <td class="fondo-gris text-center ">No answer
            </td></tr><tr class="borde-cuestionario ">






                                                          <td class="fondo-blanco text-center ">1</td><td class="fondo-blanco text-center ">Flickering. Shaky musculature movements.
            </td></tr><tr>





                                            <td class="fondo-gris text-center ">2</td><td class="fondo-gris text-center ">Weak. Weak pressure but no flicker.
            </td></tr><tr class="borde-cuestionario ">





                                            <td class="fondo-blanco text-center ">3</td><td class="fondo-blanco text-center ">Moderate. Increased pressure. Slight elevation of the vaginal wall.
            </td></tr><tr>





                                            <td class="fondo-gris text-center ">4</td><td class="fondo-gris text-center ">All right. The examiner's fingers are tightened firmly.
            </td></tr><tr class="borde-cuestionario ">





                                            <td class="fondo-blanco text-center ">5</td><td class="fondo-blanco text-center ">Strong. Fastening of the fingers and lifting of the back wall with optimum resistance.
            </td></tr></tbody>
                                        </table>

              </div>
                                    </div>
                                  </div>

                                </div></div>





            </fieldset>
            </div>
            </div>
                                    </div>
                                  </div>

                                </div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center ">
                                                        <button class="btn ">Back</button>
            <button type="button " class="btn boton-verde btn-primary " onclick=" window.location.href='resumen' ">Continue</button>
                                                        <button class="btn ">Cancel</button>
            <button type="submit " class="btn btn-warning ">Save</button>
                                                    </div></div>



            </div>


@endsection
