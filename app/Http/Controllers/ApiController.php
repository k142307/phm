<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

  protected $token = 'a6433350aa0cbbbc876ccdd9387355e6';
  protected $api_url_get = 'http://dev.fisiosite.com/apiv0/user/token/';


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


    //
}
