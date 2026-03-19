<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequireSubscription
{
    public function handle(Request $request, Closure $next): Response
    {
        if (config('app.env') === 'local') {
            return $next($request);
        }

        $user = $request->user();

        if (! $user || ! $user->subscribed('default')) {
            return redirect()->route('pricing');
        }

        return $next($request);
    }
}
