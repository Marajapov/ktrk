<?php
namespace Acme\Middlewares;
use Closure;
class RoleBasedAccess {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @return mixed
     */
// public function handle($request, Closure $next, ...$roles)
   public function handle($request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);

        if(auth()->check() && in_array(auth()->user()->getRole(), $roles))
            return $next($request);
        return redirect()->route('front.login');
    }
}
/*<?php
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
// public function handle($request, Closure $next, ...$roles)
  /* public function handle($request, Closure $next)
    {
        app()->setlocale($request->cookie('locale', 'kg'));
        return $next($request);

        $roles = array_slice(func_get_args(), 2);

        if(auth()->check() && in_array(auth()->user()->getRole(), $roles))
            return $next($request);
        return redirect()->route('front.login');
    }
}*/
