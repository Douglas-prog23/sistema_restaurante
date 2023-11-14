<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Verificar si el usuario tiene al menos uno de los roles proporcionados
        if ($request->user() && in_array($request->user()->id_rol, $roles)) {
            return $next($request);
        }

        abort(403);
    }
}
