<?php

namespace App\Http\Controllers;

use App\Models\Culture;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 budaya terbaru
        $latest = Culture::latest()->take(3)->get();

        return view('pages.home', [
            'latest' => $latest
        ]);
    }
}
