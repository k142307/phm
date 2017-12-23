<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\ApiController;
use session;
class token
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //session()->flush();
        if(session()->has('token'))
        {
          if($request->token == session('token'))
          {

          }
          else {
            $this->SetTokenSession($request->token);
          }
        }
        else {

          $this->SetTokenSession($request->token);

        }


        return $next($request);
    }
    protected function SetTokenSession($token)
    {
      $api = new ApiController($token);
      if($api->TestConnection())
      {

        session(['token' => $token]);
      }
      else {
        throw new \Exception("wrong token provided");
      }
    }
}
