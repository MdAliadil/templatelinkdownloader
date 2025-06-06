<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Card; 

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $totalAdmins = User::role('admin')->count();
        $totalUsers = User::role('user')->count();
        $totalCards = Card::count(); 
        $recentUsers = User::latest()->take(5)->get();

        return view('superadmin.dashboard', compact('totalAdmins', 'totalUsers', 'totalCards', 'recentUsers'));
    }
}
