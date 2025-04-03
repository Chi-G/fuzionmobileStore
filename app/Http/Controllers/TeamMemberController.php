<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller {
    public function index() {
        $team = TeamMember::orderBy('display_order')->get();
        return view('team.index', compact('team'));
    }

    public function create() {
        return view('team.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'image' => 'image|max:2048',
            'social_links' => 'array|nullable',
            'display_order' => 'integer',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('team', 'public');
        }

        TeamMember::create($data);
        return redirect()->route('team.index');
    }

    public function edit(TeamMember $teamMember) {
        return view('team.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember) {
        $data = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'image' => 'image|max:2048|nullable',
            'social_links' => 'array|nullable',
            'display_order' => 'integer',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('team', 'public');
        }

        $teamMember->update($data);
        return redirect()->route('team.index');
    }

    public function destroy(TeamMember $teamMember) {
        $teamMember->delete();
        return redirect()->route('team.index');
    }
}
