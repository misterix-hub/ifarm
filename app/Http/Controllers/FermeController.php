<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Ferme;
use App\Modeles\Champs;

class FermeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ferme.liste', [
            'fermes' => Ferme::orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Ferme::where('nom', $request->nom)->get()) == 0) {
            $ferme = new Ferme;
            $ferme->nom = $request->nom;
            $ferme->save();

            return back()->with('success', "Ferme ajoutée avec succès !");
        } else {
            return back()->with('error', "Nom déjà pris !");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fermes = Ferme::where('id', $id)->get();
        if (count($fermes) == 0) {
            abort('404');
        } else {
            return view('champs.liste', [
                'fermes' => $fermes,
                'champs' => Champs::where('ferme_id', $id)->get()
            ]);   
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ferme = Ferme::findOrFail($id);
        $ferme->nom = $request->nom;
        $ferme->save();

        return back()->with('success', "Ferme mise à jour avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ferme = Ferme::findOrFail($id);
        $ferme->delete();

        return back()->with('success', "Ferme supprimée avec succès !");
    }
}
