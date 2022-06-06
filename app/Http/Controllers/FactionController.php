<?php

namespace App\Http\Controllers;

use App\Models\Faction;

use Illuminate\Http\Request;

class FactionController extends Controller
{
    public function index()
    {
        $faction = Faction::all();

        return view('faction.index', compact('faction'));
    }

    public function create()
    {
        return view('faction.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'factionname' => 'required',
            'type' => 'required'
        ]);

        Faction::create($request->all());

        return redirect()->route('faction.index')->with('success', 'faction created successfully.');
    }

    public function show(Faction $faction)
    {
        return view('faction.show', compact('faction'));
    }

    public function edit(Faction $faction)
    {
        return view('faction.edit', compact('faction'));
    }

    public function update(Request $request, Faction $faction)
    {
        $request->validate([
            'factionname' => 'required',
            'type' => 'required'
        ]);

        $faction->update($request->all());

        return redirect()->route('faction.index')->with('success', 'Faction updated successfully');
    }

    public function destroy(Faction $faction)
    {
        $faction->delete();

        return redirect()->route('faction.index')
            ->with('success', 'Faction deleted successfully');
    }
}
