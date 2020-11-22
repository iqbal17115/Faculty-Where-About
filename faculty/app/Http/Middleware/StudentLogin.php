<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->Session()->exists('student_id')){
           
            return redirect('student');
 
         }
        return $next($request);
    }
}
