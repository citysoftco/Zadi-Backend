<?php

namespace App\Http\Middleware;

use App\Services\HelperService;
use Closure;
use Illuminate\Http\Request;

class RemoveZeroFromPhone
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has("user_phone"))
            $request->merge([
                "user_phone" => ltrim($request->user_phone, '0')
            ]);
        return $next($request);
    }
}
