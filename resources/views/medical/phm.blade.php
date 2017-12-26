@extends('base') @section('content')

</div>
<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 ptopMob-50">
  <div class="page-title col-md-3 col-sm-5 col-xs-12 col-lg-6 mtop-10">
    <h4 style="
    color: #555555;
">JOHN DOE´S card</h4>
  </div>

  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Personal data</h2>
  <p class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 mtop-10">

    <fieldset>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="First name">
        <p class="help-block">Your name will be used to log in and it won't be possible to change later. </p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Last name" >

      </div>
      <!-- /control-group -->


      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">

        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="VAT" >

      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Birth date" >

      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">

        <label class="texto-genero">Gender</label><label class="radio inline texto-genero">
                <input type="radio" name="radiobtns">Man
            </label><label class="radio inline texto-genero">
                <input type="radio" name="radiobtns">Woman
            </label>
        <!-- /controls -->
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" id="username" placeholder="Dirección"  class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12">

      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="City" >
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" name="province" required>
                <option value="" disabled selected>Province</option>
                  <option value="Madrid">Madrid</option>
                  <option value="Bibeo">Bibao</option>
                  <option value="barcelona">barcelona</option>
                  <option value="Sevilla">Sevilla</option>
                </select>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Postal Code" >

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Phone number 1*" >

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Phone number 2*" >

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Email" >

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <input type="text" class="padding-topbott-5 estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12" id="username" placeholder="Occupation" >

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10 no-padding-di">
        <select class="fondo-desplegable col-lg-12 col-md-12 col-sm-12 col-xs-10 btn" name="province" required>
                <option value="" disabled selected>Insurance company</option>
                  <option value="Madrid">Adeslas</option>
                  <option value="Bibeo">Sanitas</option>
                  <option value="barcelona">Asisa</option>
                  <option value="Sevilla">Other</option>
                </select>
      </div>

    </fieldset>


  </div>
  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 mtop-10">

    <fieldset>

      <textarea placeholder="Consultation reasons" rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12"></textarea>
      <textarea placeholder="Tag Dislocation" rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10"></textarea>
      <textarea placeholder="Medical diagnostic" rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10"></textarea>
      <textarea placeholder="Record. Ej: Allergic to Latex and Benzodiazepines" rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10"></textarea><textarea placeholder="Previous treatments. Ej: Allergic to Latex and Benzodiazepines"
        rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10"></textarea>
      <textarea placeholder="Allergies. Ej: Allergic to Latex and Benzodiazepines" rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10"></textarea><textarea placeholder="Medical flags. Ej: Allergic to Latex and Benzodiazepines"
        rows="3" class="estilo-input col-sm-12 col-md-12 col-lg-12 col-xs-12 mtop-10"></textarea>

      <div class="input-group ptop-10 no-padding-di pbott-10">
        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Select file</button>
                    </span><input type="text" class="form-control p10" placeholder="Nothing selected">

      </div>

    </fieldset>
  </div>
  <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="
    text-align: justify;
">
    <div class="icheckbox_flat-green checked borde col-lg-1 col-md-1 col-sm-1 col-xs-1 mtop-15 checks-cuestionario"><input type="checkbox" class="flat checks"></div>
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-di">The personal data collected in this form will be incorporated and treated in a file owned by THE COMPANY MUUWIN TECH S.L. with address at Av / Manoteras 38, Edificio C 410. This file is only for the purpose of proceeding to the proper management of
      the COMPANY's own functions. The person responsible for the file is the company itself, before which the interested parties can exercise their rights of access, rectification, cancellation and opposition, sending a communication to the address indicated
      above, with the reference "Data Protection", all of which is reported in compliance with article 5 of Organic Law 15/1999, of December 13, on Protection of Personal Data.</p>
  </div>
  <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 mbott-20 mtop-10 text-center">
    <button type="button " class="btn boton-verde btn-primary" onclick=" window.location.href='historias-clinicas' ">Continue</button>

    <button type="submit" class="btn btn-warning">Save</button>
    <button class="btn btn-danger">Cancel</button></div>



</div>






@endsection
