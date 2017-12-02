@extends('base') @section('content')


<div class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 fondo-blanco no-padding-di">
<section class="content invoice p10">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12 invoice-header">
              <h1>
                              <img src="{{asset('public/PHM_files/images/favicon-192x192.png')}}" title="fisiosite.com" alt="fisiosite.com" height="30" style="
">Invoice<small class="pull-right">Date: 16/08/2016</small>
                          </h1>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">Company:<address>
                              <strong>Fisiosite.com</strong>
                              <br>Av. Manoteras 36<br>Madrid 28050<br>Phone: 91 711 08 09<br>web: fisiosite.com<br><strong> Membership number: b65748392</strong>
                          </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">Client:<address>
                              <strong>Carlos García</strong>
                              <br>Calle cedros,37, madrid
                              <br>Madrid, 28223
                              <br>Phone: 678123456
                              <br>Email: jon@tuclinica.com
                          </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Reference number: #007612</b>
              <br>
              <br>
              <b>ID:</b> 4F3S8J
              <br>
              <b>Payment data:</b> 2/12/2017
              <br>
              <b>Account:</b> 968-34567
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="table-wrapper p10" style="
overflow-x: auto;
">
                            <table class="table table-striped jambo_table bulk_action borde-tarifa text-center">
                                <thead style="
background: #2e9e9a;
color: white;
">
                                    <tr>
                                        <th class="text-center">Amount</th>

<th class="text-center">Service</th>
<th class="text-center">Reference</th>
<th class="text-center">Subtotal</th>

                                    </tr>
                                </thead>
                                <tbody>

<tr class="even pointer">

                <td class=" ">1</td>
                <td class=" ">Back massage</td>


<td class=" ">455-981-221</td><td class=" ">45 €</td>




              </tr>
<tr class="even pointer">

                <td class=" ">2</td>
                <td class=" ">Rehabilitation</td>

                <td class=" ">247-925-726</td>
<td class=" ">85 €</td>




              </tr>
<tr class="even pointer">

                <td class=" ">3</td>
                <td class=" ">Bandage</td>

                <td class=" ">735-845-642</td>
<td class=" ">25 €</td>




              </tr>
















            </tbody>

                            </table>
                        </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment methods</p>
              <img src="./PHM_files/images/visa.png" alt="Visa">
              <img src="./PHM_files/images/mastercard.png" alt="Mastercard">
              <img src="./PHM_files/images/american-express.png" alt="American Express">
              <img src="./PHM_files/images/paypal.png" alt="Paypal">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">According Law 37/1992,  28 december, of the Value Added Tax, medical, surgical and health care related to the diagnosis, prevention and treatment of diseases are exempt from VAT.</p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">Final cost</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td>155 €</td>
                    </tr>
                    <tr>
                      <th>VAT (9.3%)</th>
                      <td>10,34 €</td>
                    </tr>

                    <tr>
                      <th>Total:</th>
                      <td>165,34 €</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <button class="btn btn-default" onclick="window.print();">Print</button>
              <button class="btn btn-success pull-right">Pay</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"> Generate PDF</button>
            </div>
          </div>
        </section>
</div>
@endsection
