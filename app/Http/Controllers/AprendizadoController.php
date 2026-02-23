<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aprendizados;
use App\Models\Fontes;
use App\Models\Area;

class AprendizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $aprendizados = Aprendizados::with(['area', 'fonte'])->get();
    return view('inicio', compact('aprendizados'));
        // session()->flash("success","Cadastrado com Sucesso");
        // return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::all();
        $fontes = Fontes::all();
        return view('aprendizado.criar', compact('areas', 'fontes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
     Aprendizados::create($request->all());
     return redirect('/inicio')->with('success', 'Salvo com sucesso!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
