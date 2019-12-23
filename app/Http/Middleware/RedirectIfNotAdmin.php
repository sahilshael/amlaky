<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Admin, App\AccessRight;

class RedirectIfNotAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard('admins')->check()) 
        {
            return redirect('admin');
        }
        $user=Auth::guard('admins')->user()->type;
        	// dd($user);
    	
        return $next($request);
    }

    
}
?>