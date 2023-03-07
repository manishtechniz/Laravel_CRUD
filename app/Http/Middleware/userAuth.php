<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class userAuth
{
    
    public function handle(Request $request, Closure $next)
    {
        if(Session::get('login')==true){
            return $next($request);
        } 
        return redirect('login');
    }
}
