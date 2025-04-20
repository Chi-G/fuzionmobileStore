<?php

namespace App\Http\Controllers;

use App\Models\MarketingStrategy;
use Illuminate\Http\Request;

class MarketingStrategyController extends Controller {
    public function index() {
        $strategies = MarketingStrategy::all();
        return view('marketing.index', compact('strategies'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'brochure' => 'file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('brochure')) {
            $data['brochure_path'] = $request->file('brochure')->store('brochures', 'public');
        }

        MarketingStrategy::create($data);
        return redirect()->route('marketing');
    }
}
