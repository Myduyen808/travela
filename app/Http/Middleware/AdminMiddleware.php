<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    // public function handle(Request $request, Closure $next): Response
    //  {
    //     // Kiểm tra xem người dùng đã đăng nhập và có phải admin không
    //     if (Auth::check() && Auth::user()->is_admin == 1) {
    //         return $next($request);
    //     }

    //     // Nếu không phải admin, chuyển hướng hoặc báo lỗi
    //     return redirect('/login')->with('error', 'Bạn không có quyền truy cập');
    // }
}
