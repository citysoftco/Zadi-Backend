<?php

namespace App\Http\Middleware;

use Closure;
use View;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct()
    {
        View::composers([
            'App\Composers\CityAdComposer'  => [
                                                'cityadmin.*',
                                             ] //attaches HomeComposer to home.blade.php
        ]);
    }
    
    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('bamaCityAdmin')) {
            return redirect()->route('cityadmin-login');
        }

        return $next($request);
    }
}
