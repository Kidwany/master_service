<?php

namespace App\Http\Middleware;

use App\Setting;
use Closure;

class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $setting = Setting::orderby('id', 'desc')->first();
        if (!empty($setting))
        {
            if ($setting->open == '0')
            {
                return redirect('/maintenance');
            }
            else
            {
                return $next($request);
            }
        }

    }
}
