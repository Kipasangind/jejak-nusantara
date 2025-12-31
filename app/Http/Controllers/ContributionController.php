<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'province' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('cultures', 'public');
        }

        Contribution::create([
            'user_id' => 1, // 🔥 INI KUNCI FIX ERROR
            'title' => $validated['title'],
            'category_id' => $validated['category_id'],
            'province' => $validated['province'],
            'description' => $validated['description'],
            'image' => $validated['image'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('contribute')
            ->with('success', 'Kontribusi berhasil dikirim dan menunggu persetujuan admin.');
    }
}
