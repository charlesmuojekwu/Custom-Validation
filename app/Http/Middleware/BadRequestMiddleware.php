<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BadRequestMiddleware
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


        $response = $next($request);

        // 'Catch' our FormValidationException and redirect back.
        if (!empty($response->exception) && $response->exception instanceof \BadMethodCallException) {
            return response()->json([
                'error' => $response->exception
            ], 400);
        }

        return $response;
    }
}
