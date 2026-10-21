<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->login === 'Admin26') {

            $isPasswordCorrect = Hash::check('1234567', $user->password) || $user->password === '1234567';

            if ($isPasswordCorrect) {
                return $next($request);
            }
        }

        abort(403, 'Доступ запрещен');
    }
}
