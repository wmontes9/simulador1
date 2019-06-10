<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       // if (Auth::guard($guard)->check()) {
          //  return redirect('/');
            //return redirect('/home');
        //}
        if (Auth::guard($guard)->check()) {
            $type = Session::get("rol_user");
            if(Session::get("rol_user")==1){
                return redirect('/administracion/actividad');
                //return redirect('/admin/caso');
            }if(Session::get("rol_user")==3){
                //return redirect('/admin/caso');
                return redirect('inicio');
            }else{
                return redirect('/');
            }
        }else{
          return $next($request);  
        }

    }
}
