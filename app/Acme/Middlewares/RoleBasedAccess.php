<?php
namespace Acme\Middlewares;

use Closure;

class RoleBasedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(auth()->check() && in_array(auth()->user()->getRole(), $roles))
            return $next($request);
        return redirect()->route('front.login');
    }
}
