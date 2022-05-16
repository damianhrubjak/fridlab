<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrintModelPrivate
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
        $printModel = $request->route('printModel');

        // if printModel is private return 404 page
        if ($printModel->is_private) {
            return abort(404);
        }
        return $next($request);
    }
}
