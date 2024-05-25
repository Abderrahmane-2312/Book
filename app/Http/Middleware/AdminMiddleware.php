<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
    */ //   @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next


    public function handle(Request $request, Closure $next){
        
        // Vérifier si l'utilisateur est connecté
        if (!auth()->check()) {
            return redirect()->route('auth.login')->with('error','Vous devez être connecté pour accéder à cette page.');
        }

        return $next($request);

    }

}
