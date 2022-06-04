<?php

namespace App\Http\Controllers;
use App\Models\OperatorClass;

use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Operator;

class OperatorClassController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operator_class = OperatorClass::all();

        return view('operator.index', compact('operator_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('operator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        OperatorClass::create($request->all());

        return redirect()->route('operator.index')->with('success','operator class created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(OperatorClass $operator_class)
    {
      return view('operator.show',compact('operator_class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(OperatorClass $operator_class)
    {
        return view('operator.edit',compact('operator_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperatorClass $operator_class)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $operator_class->update($request->all());

        return redirect()->route('operator.index')->with('success','Operator Class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperatorClass $operator_class)
    {
      $operator_class->delete();

       return redirect()->route('operator_class.index')
                       ->with('success','operator class deleted successfully');
    }
}
