<?php

namespace App\Http\Middleware;

use App\Enum\HeaderType;
use App\Enum\MimeType;
use Closure;
use Illuminate\Http\Request;

class Json
{
    /**
     * @param Request $request
     * @param Closure $next
     *
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set(HeaderType::CONTENT_TYPE, MimeType::JSON);

        return $next($request);
    }
}
