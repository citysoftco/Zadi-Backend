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
        $request->merge([
            "user_phone" => HelperService::removeFirstChars('0', $request->user_phone)
        ]);
        return $next($request);
    }
}
