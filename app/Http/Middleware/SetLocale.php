<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->cookie('locale') ?: config('app.locales');
        app()->setLocale($locale);
        return $next($request);
        // $locale = $request->segment(1);
        // if (in_array($locale, ['en', 'id'])) {
        //     App::setLocale($locale);
        // }

        // return $next($request);
        // $locale = $request->cookie('locale') ?: $request->segment(1) ?: config('app.locale');
        // if (!in_array($locale, config('app.locales'))) {
        //     $locale = config('app.locale'); // Kembalikan ke default jika tidak valid
        // }
        // app()->setLocale($locale);

        // return $next($request);
    }
}
