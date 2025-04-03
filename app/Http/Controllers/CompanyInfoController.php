<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller {
    public function index() {
        $info = CompanyInfo::first();
        return view('about.index', compact('info'));
    }

    public function create() {
        return view('about.create'); 
    }

    public function store(Request $request) {
        $data = $request->validate([
            'description' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'logo' => 'image|max:2048',
            'video_url' => 'url|nullable',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')->store('logos', 'public');
        }

        CompanyInfo::create($data);
        return redirect()->route('about.index');
    }

    public function edit(CompanyInfo $companyInfo) {
        return view('about.edit', compact('companyInfo'));
    }

    public function update(Request $request, CompanyInfo $companyInfo) {
        $data = $request->validate([
            'description' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'logo' => 'image|max:2048|nullable',
            'video_url' => 'url|nullable',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')->store('logos', 'public');
        }

        $companyInfo->update($data);
        return redirect()->route('about.index');
    }

    // Destroy method omitted as there’s typically one CompanyInfo record
}
