<?php

namespace App\Http\Controllers;

use App\Models\Race;

use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $race = Race::all();

       return view('race.index', compact('race'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('race.create');
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

       Race::create($request->all());

       return redirect()->route('race.index')->with('success','Race created successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function show(Race $race)
   {
     return view('race.show',compact('race'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function edit(Race $race)
   {
       return view('race.edit',compact('race'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Race $race)
   {
       $request->validate([
           'title' => 'required',
           'body' => 'required',
       ]);

       $race->update($request->all());

       return redirect()->route('race.index')->with('success','Race updated successfully');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
   public function destroy(Race $race)
   {
     $race->delete();

      return redirect()->route('race.index')
                      ->with('success','Race deleted successfully');
   }
}
