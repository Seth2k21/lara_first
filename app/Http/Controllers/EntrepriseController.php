<?php

namespace App\Http\Controllers;


use App\Models\Entreprise;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $entreprises = Entreprise::all();
      return view("entreprise.index", compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("entreprise.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->Validate([
            'raison_sociale'=>'required|string',
            'ifu'=>'required|integer|digit:13',

        ]);

        $entreprise = New Entreprise();
        $entreprise->raison_sociale = $request->raison_sociale;
        $entreprise->ifu = $request->ifu;
        $entreprise->save();
        return Redirect::route('entreprises.index')->with('success');
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
