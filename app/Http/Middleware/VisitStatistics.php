<?php

namespace App\Http\Middleware;

use App\Visitor;
use Closure;
use Illuminate\Support\Facades\Auth;

class VisitStatistics
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
        if (Auth::check())
        {
            $visitor = Auth::user()->getVisitor;
            $page = $request->path();

            if ($visitor != null)
            {
                $visitor->update([
                    $page => $visitor->$page + 1
                ]);
            }
            else
            {
                $visitor = new Visitor([
                    $page => 1
                ]);
                Auth::user()->getVisitor()->save($visitor);
            }
        }

        return $next($request);
    }
}