<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Culture;
use Illuminate\Support\Str;

class AdminContributionController extends Controller
{
    public function index()
    {
        $pending = Contribution::where('status', 'pending')->get();
        return view('pages.admin.contributions.index', compact('pending'));
    }

    public function show($id)
    {
        $data = Contribution::findOrFail($id);
        return view('pages.admin.contributions.review', compact('data'));
    }

    public function approve($id)
    {
        $c = Contribution::findOrFail($id);

        Culture::create([
            'title' => $c->title,
            'slug' => Str::slug($c->title),
            'category_id' => $c->category_id,
            'province' => $c->province,
            'description' => $c->description,
            'image' => $c->image,
            'created_by' => 1,
        ]);

        $c->update(['status' => 'approved']);

        return back()->with('success', 'Kontribusi disetujui');
    }

    public function destroy($id)
    {
        Contribution::findOrFail($id)->delete();
        return back()->with('success', 'Kontribusi dihapus');
    }
}
