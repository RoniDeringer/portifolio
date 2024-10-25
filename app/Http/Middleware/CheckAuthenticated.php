<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuthenticated
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
        if (!Auth::check()) {
            return redirect('login')->withErrors(['Você precisa estar logado para acessar esta página.']);
        }

        if (Auth::user()->type !== 'admin') {
            abort(403, 'Você não possui permissões de acesso.');
        }
        return $next($request);
    }
}
