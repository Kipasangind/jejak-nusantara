<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culture;

class CultureController extends Controller
{
    public function index(Request $request)
{
    $query = Culture::with('category')->latest();

    // SEARCH JUDUL
    if ($request->q) {
        $query->where('title', 'like', '%' . $request->q . '%');
    }

    // FILTER KATEGORI
    if ($request->category) {
        $query->where('category_id', $request->category);
    }

    // FILTER PROVINSI (INI INTI TAHAP B)
    if ($request->province) {
        $query->where('province', $request->province);
    }

    $cultures = $query->paginate(9)->withQueryString();

    // AMBIL LIST PROVINSI UNIK (buat ditampilkan)
    $provinces = Culture::select('province')
        ->distinct()
        ->orderBy('province')
        ->pluck('province');

    return view('pages.cultures', compact('cultures', 'provinces'));
}


    public function show($slug)
    {
        $culture = Culture::where('slug', $slug)
            ->with('category', 'creator')
            ->firstOrFail();

        $related = Culture::where('category_id', $culture->category_id)
            ->where('id', '!=', $culture->id)
            ->take(4)
            ->get();

        // ✅ SESUAI FILE YANG ADA
        return view('pages.detail', compact('culture', 'related'));
    }
}
