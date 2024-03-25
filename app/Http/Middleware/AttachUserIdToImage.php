<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AttachUserIdToImage
{
    public function handle($request, Closure $next)
    {
        // Attach user ID to the image being uploaded
        if (Auth::check()) {
            $userId = Auth::id();
            $request->merge(['user_id' => $userId]);
        }

        return $next($request);
    }
}