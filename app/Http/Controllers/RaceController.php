<?php

namespace App\Http\Controllers;

use App\Models\Race;

use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index()
    {
        $race = Race::all();

        return view('race.index', compact('race'));
    }

    public function create()
    {
        return view('race.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Race::create($request->all());

        return redirect()->route('race.index')->with('success', 'Race created successfully.');
    }

    public function show(Race $race)
    {
        return view('race.show', compact('race'));
    }

    public function edit(Race $race)
    {
        return view('race.edit', compact('race'));
    }

    public function update(Request $request, Race $race)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $race->update($request->all());

        return redirect()->route('race.index')->with('success', 'Race updated successfully');
    }

    public function destroy(Race $race)
    {
        $race->delete();

        return redirect()->route('race.index')
            ->with('success', 'Race deleted successfully');
    }
}
