<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $team = TeamMember::orderBy('display_order')->paginate(6);
        return view('team.index', compact('team'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'image' => 'image|max:2048',
            'social_links' => 'array|nullable',
            'display_order' => 'integer|nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'team-' . (TeamMember::max('display_order') + 1) . '.' . $image->getClientOriginalExtension();
            $data['image_path'] = $image->storeAs('', $imageName, 'public');
        }

        $data['display_order'] = $data['display_order'] ?? TeamMember::max('display_order') + 1;

        TeamMember::create($data);
        return redirect()->route('team')->with('success', 'Team member created successfully.');
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $data = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'image' => 'image|max:2048|nullable',
            'social_links' => 'array|nullable',
            'display_order' => 'integer|nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'team-' . ($data['display_order'] ?? $teamMember->display_order) . '.' . $image->getClientOriginalExtension();
            $data['image_path'] = $image->storeAs('', $imageName, 'public');
        }

        $teamMember->update($data);
        return redirect()->route('team')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('team')->with('success', 'Team member deleted successfully.');
    }
}
