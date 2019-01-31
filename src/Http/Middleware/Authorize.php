<?php

namespace Vemcogroup\Websockets\Http\Middleware;

use Vemcogroup\Websockets\Websockets;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(Websockets::class)->authorize($request) ? $next($request) : abort(403);
    }
}
