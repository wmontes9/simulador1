<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
class verify_user
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
        if (Auth::check()) {
            if(Session::get("rol_user")==1){
                return $next($request); 
            }if(Session::get("rol_user")==3){
                return $next($request);
            }else{
                return redirect('/');
            }
        }else{
          return redirect("/");
        }
       // return $next($request);
    }
}
