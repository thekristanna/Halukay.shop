<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Notification;

class UpdateNotifications
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::get('user_id')) {
            $notifications = Notification::query()
                ->select(DB::raw('COUNT(*) AS total_notifs'))
                ->where('user_id', '=', Session::get('user_id'))
                ->where('marked_seen', '=', '0')
                ->get()
                ->first();

            Session::put('notification_count', $notifications->total_notifs);
        }
        return $next($request);
    }
}
