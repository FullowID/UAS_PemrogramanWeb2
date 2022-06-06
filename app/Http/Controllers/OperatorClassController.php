<?php

namespace App\Http\Controllers;

use App\Models\OperatorClass;

use Illuminate\Http\Request;

class OperatorClassController extends Controller
{
    public function index()
    {
        $operator_class = OperatorClass::all();

        return view('operatorclass.index', compact('operator_class'));
    }

    public function create()
    {
        $operator_class = OperatorClass::all();

        return view('operatorclass.create', compact('operator_class'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'classname' => 'required',
            'position' => 'required',
            'description' => 'required'
        ]);

        OperatorClass::create($request->all());

        return redirect()->route('operator_class.index')->with('success', 'operator class created successfully.');
    }

    public function show(OperatorClass $operator_class)
    {
        return view('operatorclass.show', compact('operator_class'));
    }

    public function edit(OperatorClass $operator_class)
    {
        return view('operatorclass.edit', compact('operator_class'));
    }

    public function update(Request $request, OperatorClass $operator_class)
    {
        $request->validate([
            'classname' => 'required',
            'position' => 'required',
            'description' => 'required'
        ]);

        $operator_class->update($request->all());

        return redirect()->route('operator_class.index')->with('success', 'Operator Class updated successfully');
    }

    public function destroy(OperatorClass $operator_class)
    {
        $operator_class->delete();

        return redirect()->route('operator_class.index')
            ->with('success', 'operator class deleted successfully');
    }
}
