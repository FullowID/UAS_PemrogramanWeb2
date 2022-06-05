<?php

namespace App\Http\Controllers;
use App\Models\Faction;

use Illuminate\Http\Request;

class FactionController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $faction = Faction::all();

       return view('faction.index', compact('faction'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('faction.create');
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

       Faction::create($request->all());

       return redirect()->route('faction.index')->with('success','faction created successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function show(Faction $faction)
   {
     return view('faction.show',compact('faction'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function edit(Faction $operator_class)
   {
       return view('faction.edit',compact('faction'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Faction $faction)
   {
       $request->validate([
           'title' => 'required',
           'body' => 'required',
       ]);

       $faction->update($request->all());

       return redirect()->route('faction.index')->with('success','Faction updated successfully');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function destroy(Faction $faction)
   {
     $faction->delete();

      return redirect()->route('faction.index')
                      ->with('success','Faction deleted successfully');
   }
}

