<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$series=\DB::select("SELECT nome FROM series");
        $series=Serie::all();

       //$series=["twd","tvd","pikachu"];
        //['series']=>'$series'
        //compact('series')
        return view('series.index',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.inserir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome=$request->input('nome');
        Serie::create($request->all());
        return to_route('series.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $series)
    {
        return view('series.atualiza',compact('series'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serie $series)
    {
          $series->fill($request->all());
          $series->save();
          return to_route('series.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serie $series)
    {
        Serie::destroy($series->id);
        return to_route('series.index');

    }
}
