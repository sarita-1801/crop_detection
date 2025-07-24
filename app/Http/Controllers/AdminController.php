<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $totalUsers = User::count();
        $newUsers = User::where('created_at', '>=', now()->subMonth())->count();

        $recentUsers = User::latest()->paginate(8);
        $recentDetections = Detection::with('user')->latest()->paginate(10);

        $totalLogins = Login::count();
        $loginsToday = Login::whereDate('login_time', today())->count();

        $recentLogins = Login::with('user')->latest()->take(10)->get();

        return view('admin.dashboard', [
            'stats' => [
                'total_users' => $totalUsers,
                'new_users' => $newUsers,
                'total_logins' => $totalLogins,
                'logins_today' => $loginsToday,
            ],
            'recentUsers' => $recentUsers,
            'recentDetections' => $recentDetections,
            'recentLogins' => $recentLogins
        ]);
    }
}