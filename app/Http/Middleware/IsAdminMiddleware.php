<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Http\Controllers\FruitsController;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(is_null($request->route('admin'))) {
            return redirect()->action('App\Http\Controllers\FruitsController@anyPears');
            /* redirect
                use back() -- For come back to the previouse page where we are coming from.
                ->withInput() -- Redirigir enviando datos por post.


            */
        }
        return $next($request);
    }
}
