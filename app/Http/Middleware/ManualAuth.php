<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManualAuth
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
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln(ManualAuth::class);
        if (!Session::has('username')){
            $out->writeln('Unauthenticated');
            return redirect()->route('auth.ask');
        }else{
            $out->writeln('Authenticated: '.Session::get('username'));
        }
        return $next($request);
    }
}
