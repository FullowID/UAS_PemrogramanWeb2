<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\OperatorClass;
use App\Models\Faction;
use App\Models\Race;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    public function index()
    {
        $operator = Operator::all();

        return view('operator.index', compact('operator'));
    }

    public function create()
    {
        $operator_class = OperatorClass::all();
        $faction = Faction::all();
        $race = Race::all();

        return view('operator.create', compact('operator_class', 'faction', 'race'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'codename' => 'required',
            'operator_classes_id' => 'required',
            'factions_id' => 'required',
            'races_id' => 'required',
            'description' => 'required'
        ]);

        Operator::create($request->all());

        return redirect()->route('operator.index')->with('success', 'operator created successfully.');
    }

    public function show(Operator $operator)
    {
        return view('operator.show', compact('operator'));
    }

    public function edit(Operator $operator)
    {
        $operator_class = OperatorClass::all();
        $faction = Faction::all();
        $race = Race::all();

        return view('operator.edit', compact('operator', 'operator_class', 'faction', 'race'));
    }

    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'codename' => 'required',
            'operator_classes_id' => 'required',
            'factions_id' => 'required',
            'races_id' => 'required',
            'description' => 'required'
        ]);

        $operator->update($request->all());

        return redirect()->route('operator.index')->with('success', 'Operator updated successfully');
    }

    public function destroy(Operator $operator)
    {
        $operator->delete();

        return redirect()->route('operator.index')
            ->with('success', 'operator deleted successfully');
    }
}
