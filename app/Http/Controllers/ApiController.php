<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

  protected $token;
  protected $api_url_get = 'http://dev.fisiosite.com/apiv0/user/token/';
  protected $api_url_save = 'http://dev.fisiosite.com/apiv0/user/save/';

   public function __construct($token="")
  {
    $this->token = $token;
  }

  public function getSaveCurl()
  {
    $curl_post_data = array(
      "Services" => array(
          "Service" => array(
            "id"=>"40",
            "name"=>"tratamiento migra\u00f1a",
            "description"=>"tratamiento migra\u00f1a",
            "duration_reserved"=>"30",
            "duration"=>"30",
            "price"=>"50",
            "slots"=>"1",
            "establishment_id"=>"6009",
            "created_status"=>"0",
            "tag"=>""
          ),
          "Timetable"=> array(),
        // Profesionales asignados al servicio
        // Un array con los ids de los profesionales a asociar al servicio. Si se pasa un array vacio
        // se desasignarán todos los profesionales asignados al servicio. Si se omite la asociativa
        // se mantendrán los que ya hubiera asociados en el sistema.
        "Staff"=>array()
      ));
    $api_url_get = $this->api_url_save.$this->token;
    $ch = curl_init();
    $payload = json_encode($curl_post_data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$api_url_get);
    $result = curl_exec($ch);
    curl_close($ch);
    # Print response.
    echo "<pre>$result</pre>";
    dd($result);
  }
  public function getEstid()
  {
    $api_url_get = $this->api_url_get.$this->token;
    $ch = curl_init();
// Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
    curl_setopt($ch, CURLOPT_URL,$api_url_get);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);
    $ar = json_decode($result);
    $response = $this->MakeConnection();
    return $response->Establishment->id;

  //dd($data);
    # code...
  }

  public function MakeConnection()
  {
    $api_url_get = $this->api_url_get.$this->token;
    $ch = curl_init();
// Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
    curl_setopt($ch, CURLOPT_URL,$api_url_get);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);
    $ar = json_decode($result);
    return $ar->response;
  }

  public function TestConnection()
  {
    $res = $this->MakeConnection();
    if(isset($res->Establishment->id))
    {
      return true;
    }
    else
    {
      return false;
    }


  }


    //
}
