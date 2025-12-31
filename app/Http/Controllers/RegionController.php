<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegionController extends Controller
{
    // HALAMAN LIST PROVINSI
    public function index()
    {
        // Ambil provinsi unik dari budaya
        $provinces = Culture::select('province')
            ->whereNotNull('province')
            ->distinct()
            ->orderBy('province')
            ->pluck('province');

        return view('pages.regions.index', compact('provinces'));
    }

    // HALAMAN BUDAYA PER PROVINSI
    public function show($province)
    {
        $decodedProvince = str_replace('-', ' ', $province);

        $cultures = Culture::where('province', $decodedProvince)
            ->latest()
            ->paginate(9);

        return view('pages.regions.show', [
            'province' => $decodedProvince,
            'cultures' => $cultures
        ]);
    }
}
