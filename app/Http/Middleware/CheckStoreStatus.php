<?php

namespace App\Http\Middleware;

use App\Models\Store;
use Cache;
use Closure;
use Illuminate\Http\Request;

class CheckStoreStatus
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
        if ($request->store_id) {
            $store = Store::find($request->store_id);
            if ($store->store_status != 1)
                abort(403, __("keywords.store is not active"));
        }
        return $next($request);
    }
}
