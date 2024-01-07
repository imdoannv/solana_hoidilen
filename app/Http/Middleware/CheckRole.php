<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            // Kiểm tra role của người dùng
            $userRole = Auth::user()->role;

            // Kiểm tra xem role của người dùng có trong danh sách được phép hay không
            if (in_array($userRole, $roles)) {
                return $next($request);
            } else {
                // Nếu không có quyền truy cập, chuyển hướng đến trang lỗi 403
                abort(403);
            }
        }

        // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return redirect()->route('login');
    }
}
