<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\Contribution;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard', [
            'totalCultures' => Culture::count(),
            'pending'       => Contribution::where('status', 'pending')->count(),
            'users'         => User::count(),
            'recent'        => Contribution::latest()->take(5)->get(),
        ]);
    }
}
